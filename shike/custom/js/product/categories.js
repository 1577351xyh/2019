$(document).ready(function () {
    var pro = {
        id: 1,
        page: 1,
        table: $(".pro_right table tbody"),
        selKey: {
            "a": null,
            "b": null,
            "c": null,
            "d": null,
            "e": null,
            "f": null,
            "g": null,
            "h": null,
            "i": null,
            "j": null,
            "k": null,
            "l": null,
            "m": null,
            "n": null,
            "o": null,
            "p": null,
            "q": null,
            "r": null,
            "s": null,
            "t": null,
        },
        searchText: '',
        checkKey: {},
        tableHead: {},

        //左边list列表
        getProductType: function () {
            $.ajax({
                type: 'get',
                url: 'http://api.shikues.com/api/product/productType',
                data: {
                    a: pro.searchText
                },
                success: function (res) {
                    console.log(res);
                    var data = res.data;
                    var data_html = "";
                    for (var i = 0; i < data.length; i++) {
                        var data_class = "";
                        if (data[i].id == pro.id) {
                            data_class = "pro_active"
                            // $(".export_btn").attr("href",data[i].href||'javascript:void(0)')
                        }
                        var hrefof = window.location.href;

                        data_html = `<li class="${data_class}" data-id="${data[i].id}"><a href="/categories/?id=${data[i].id}&search=">${data[i].cn_name}</a></li>`;
                        if (hrefof.indexOf('/zh-hant') > 0) {
                            data_html = `<li class="${data_class}" data-id="${data[i].id}"><a href="/zh-hant/categories/?id=${data[i].id}&search=">${data[i].hk_name}</a></li>`;
                        } else if (hrefof.indexOf('/en') > 0 || hrefof.indexOf('/ko') > 0 || hrefof.indexOf('/de') > 0 || hrefof.indexOf('/es') > 0 || hrefof.indexOf('/ja') > 0 || hrefof.indexOf('/ru') > 0) {
                            data_html = `<li class="${data_class}" data-id="${data[i].id}"><a href="/en/categories/?id=${data[i].id}&search=">${data[i].en_name}</a></li>`;
                        }
                        $("#pro_list").append(data_html)
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        },
        getProductList: function () {
            if (pro.searchText.length !== 0) {
                var options = {
                    product_type_id: pro.id,
                    page: pro.page,
                    limit: 15,
                    a: pro.searchText
                };
            } else {
                var options = {
                    product_type_id: pro.id,
                    page: pro.page,
                    limit: 15
                };
            }
            options = Object.assign(options, pro.checkKey);
            $.ajax({
                type: 'get',
                url: 'http://api.shikues.com/api/product/productList',
                data: options,
                success: function (res) {
                    console.log(res)
                    var data = res.data;
                    var data_html = "";
                    for (var i = 0; i < data.length; i++) {
                        data_html = "<tr>";
                        for (var key in pro.tableHead) {
                            data_html += '<td>' + data[i][key] || '' + '</td>'
                        }
                        // if(data[i].pdf){
                        data_html += `<td><a class="pdf_btn" href="http://api.shikues.com/pdf/${data[i].a}.pdf">PDF</a></td>`
                        // } else {
                        // data_html += '<td><button class="pdf_btn" href="javascript:void(0)">PDF</button></td>'
                        // }
                        data_html += '</tr>';
                        pro.table.append(data_html)
                    }
                    if (res.meta.total > 0) {
                        pro.setPage(res.meta.last_page)
                        $("#loadtip").hide()
                    }
                    if (data.length == 0) {
                        $("#loadtip").text("暂无数据")
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        },
        getSelector: function () {
            pro.table.append('<tr id="proSel"></tr>')
            $.ajax({
                type: 'get',
                url: 'http://api.shikues.com/api/product/screenList',
                data: {
                    product_type_id: pro.id,
                },
                success: function (res) {
                    // console.log(res);
                    if (res.data.length > 0) {
                        var data = JSON.parse(res.data[0].screen_content)
                        var data_html = ""
                        for (var i = 0; i < data.length; i++) {
                            data_html += "<td><div class='selbox'>"
                            for (var key in data[i]) {
                                pro.tableHead = Object.assign(pro.tableHead, data[i])
                                var td_html = ""
                                if (key != "a") {
                                    for (var k = 0; k < data[i][key].length; k++) {
                                        var check = " "
                                        if (pro.selKey[key]) {
                                            var arr = pro.selKey[key].split(',')
                                            if (arr.indexOf(data[i][key][k]) > -1) {
                                                check = "checked='true' "
                                            }
                                        }
                                        td_html += '<div><input ' + check + 'type="checkbox" value="' + data[i][key][k] + '" name="sel_' + key + '"/>' + data[i][key][k] + '</div>'
                                    }
                                }

                                data_html += td_html + "</div></td>"
                            }
                        }
                        data_html += "<td></td>"
                        if (!pro.selKey.a) {
                            $("#proSel").html(data_html);
                            pro.selChange()
                        }
                        pro.getProductList()
                    } else {
                        $("#loadtip").text("暂无数据")
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        },
        selChange: function () {
            $("#proSel input").bind('change', function (e) {
                var newObj = {}
                for (var key in pro.selKey) {
                    // pro.selKey[key] = pro.getCheckBoxValueThree(key)
                    var val = pro.getCheckBoxValueThree(key)
                    if (val) {
                        newObj[key] = pro.getCheckBoxValueThree(key)
                    }
                }
                // console.log(newObj)
                window.location.href = '/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(newObj);
            })
        },
        getCheckBoxValueThree: function (key) {
            //获取input类型是checkBox并且 name="box"选中的checkBox的元素
            var checkbox = '#proSel input:checkbox[name="sel_' + key + '"]:checked'
            var data = $(checkbox).map(function () {
                return $(this).val();
            }).get().join(",");
            return data
        },
        setPage: function (total) {
            $(".pagination").bootstrapPaginator({
                //设置版本号
                bootstrapMajorVersion: 3,
                // 显示第几页
                currentPage: pro.page,
                // 总页数
                totalPages: total,
                itemTexts: function (type, page, current) {
                    var next = '上一页';
                    var prev = '下一页';
                    var home = '首页';
                    var last = '尾页';
                    var hrefof = window.location.href;
                    if (hrefof.indexOf('/zh-hant') > 0) {
                        next = '上一頁';
                        prev = '下一頁';
                        home = '首頁';
                        last = '尾頁';
                    } else if (hrefof.indexOf('/en') > 0 || hrefof.indexOf('/ko') > 0 || hrefof.indexOf('/de') > 0 || hrefof.indexOf('/es') > 0 || hrefof.indexOf('/ja') > 0 || hrefof.indexOf('/ru') > 0) {
                        next = 'Prev';
                        prev = 'next';
                        home = 'first page';
                        last = 'last page';
                    }
                    switch (type) {
                        case "first":
                            return home;
                        case "prev":
                            return next;
                        case "next":
                            return prev;
                        case "last":
                            return last;
                        case "page":
                            return page;
                    }
                },
                //当单击操作按钮的时候, 执行该函数, 调用ajax渲染页面
                onPageClicked: function (event, originalEvent, type, paged) {
                    // 把当前点击的页码赋值给currentPage, 调用ajax,渲染页面
                    pro.page = paged;

                    var hrefof = window.location.href;
                    var herf1 = '/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(pro.checkKey) + '&curpage=' + paged + '&search=' + pro.searchText;
                    var herf2 = '/categories/?id=' + pro.id + '&curpage=' + paged + '&search=' + pro.searchText;
                    var herf3 = '/categories/?id=' + pro.id + '&curpage=' + paged;

                    if (hrefof.indexOf('/zh-hant') > 0) {
                        herf1 = '/zh-hant/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(pro.checkKey) + '&curpage=' + paged + '&search=' + pro.searchText;
                        herf2 = '/zh-hant/categories/?id=' + pro.id + '&curpage=' + paged + '&search=' + pro.searchText;
                        herf3 = '/zh-hant/categories/?id=' + pro.id + '&curpage=' + paged;
                    } else if (hrefof.indexOf('/en') > 0 || hrefof.indexOf('/ko') > 0 || hrefof.indexOf('/de') > 0 || hrefof.indexOf('/es') > 0 || hrefof.indexOf('/ja') > 0 || hrefof.indexOf('/ru') > 0) {
                        herf1 = '/en/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(pro.checkKey) + '&curpage=' + paged + '&search=' + pro.searchText;
                        herf2 = '/en/categories/?id=' + pro.id + '&curpage=' + paged + '&search=' + pro.searchText;
                        herf3 = '/en/categories/?id=' + pro.id + '&curpage=' + paged;
                    }

                    if (Object.keys(pro.checkKey).length > 0) {
                        window.location.href = herf1;
                    } else if (pro.searchText.length !== 0) {
                        window.location.href = herf2;
                    } else {
                        window.location.href = herf3;
                    }
                }
            })
        },
        setSearch: function () {
            var searchForm = $("#searchInput");
            searchForm.find('button').bind('click', function () {
                //获取搜索框值
                var value = searchForm.find('input').val();

                if (value != "") {
                    var newObj = {
                        a: value
                    };
                    //刷新页面传参
                    var hrefof = window.location.href;
                    if (hrefof.indexOf('/zh-hant') > 0) {
                       window.location.href = '/zh-hant/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(newObj) + '&search=' + value;
                    } else if (hrefof.indexOf('/en') > 0 ) {
                        window.location.href = '/en/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(newObj) + '&search=' + value;
                    } else if(hrefof.indexOf('/ko') > 0){
                        window.location.href = '/ko/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(newObj) + '&search=' + value;
                    }else if(hrefof.indexOf('/de') > 0){
                        window.location.href = '/de/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(newObj) + '&search=' + value;
                    } else if(hrefof.indexOf('/es') > 0){
                        window.location.href = '/es/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(newObj) + '&search=' + value;
                    }else if(hrefof.indexOf('/ja') > 0){
                        window.location.href = '/ja/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(newObj) + '&search=' + value;
                    }else if(hrefof.indexOf('/ru') > 0){
                        window.location.href = '/es/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(newObj) + '&search=' + value;
                    }else {
                        window.location.href = '/categories/?id=' + pro.id + '&checkKey=' + JSON.stringify(newObj) + '&search=' + value;
                    }
                }
            });
            searchForm.find('input')
                .val(pro.selKey.a || '')
                .keydown(function (e) {
                    var e = e || event,
                        keycode = e.which || e.keyCode;
                    if (keycode == 13) {
                        searchForm.find('button').trigger("click");
                    }
                });
            $("#resetProBtn").bind("click", function () {
                searchForm.find('input').val('');
                if (Object.keys(pro.checkKey).length > 0) {
                    window.location.href = '/categories/?id=' + pro.id
                }
            })
        },

        init: function () {
            pro.id = GetUrlParam("id") || 1;
            pro.page = GetUrlParam("curpage") || 1;
            pro.searchText = GetUrlParam("search") || '';
            var checkKey = GetUrlParam("checkKey");
            if (checkKey) {
                pro.checkKey = JSON.parse('{' + decodeURI(checkKey) + '}');
                pro.selKey = Object.assign(pro.selKey, pro.checkKey);
            }
            pro.getProductType();
            pro.setSearch();
            pro.getSelector();
        },
    }

    function GetUrlParam(paraName) {
        var url = document.location.toString();
        var arrObj = url.split("?");

        if (arrObj.length > 1) {
            var arrPara = arrObj[1].split("&");
            var arr;

            for (var i = 0; i < arrPara.length; i++) {
                arr = arrPara[i].split("=");

                if (arr != null && arr[0] == paraName) {
                    return arr[1];
                }
            }
            return "";
        } else {
            return "";
        }
    }

    pro.init();

})





