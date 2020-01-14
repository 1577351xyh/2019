$(document).ready(function () {
    var recruit = {
        data: undefined,
        text: '查看职位',
        getData() {
            $.ajax({
                type: 'post',
                url: '/wp-admin/admin-ajax.php',
                data: {
                    'action': 'recruit'
                },
                success(res) {
                    var res = JSON.parse(res);
                    console.log(res);
                    recruit.data = res.data;
                    recruit.createDom(recruit.data)
                }
            })
        },
        createDom() {
            var hrefof = window.location.href;
            var content = {
                time: '发布日期',
                xueli: '学历',
                city: '工作地点',
                info: '查看详情',
                zhiwei: '申请职位',
                link:'/recruitment'
            };
            if (hrefof.indexOf('/zh-hant') > 0) {
                content.time = '發布日期';
                content.xueli = '學曆';
                content.city = '工作地點';
                content.info = '查看詳情';
                content.zhiwei = '申請職位';
                content.link='/zh-hant/recruitment'
            } else if (hrefof.indexOf('/en') > 0) {
                content.time = 'Release date';
                content.xueli = 'Education';
                content.city = 'work place';
                content.info = 'View jobs';
                content.zhiwei = 'Apply for a position';
                content.link='/en/recruitment'
            } else if (hrefof.indexOf('/de') > 0) {
                content.zhiwei = 'Bewerben Sie sich auf eine Stelle';
                content.time = 'Erscheinungsdatum';
                content.xueli = 'Bildung';
                content.city = 'Arbeitsplatz';
                content.info = 'Details anzeigen';
                content.zhiwei = 'Bewerben Sie sich auf eine Stelle';
                content.link='/de/recruitment'
            } else if (hrefof.indexOf('/es') > 0) {
                //西班牙
                recruit.text = "ポジションに応募する"
                content.time = 'Fecha de lanzamiento';
                content.xueli = 'Educacion';
                content.city = 'Escuela';
                content.info = 'Ver detalles';
                content.zhiwei = 'Solicitar un puesto';
                content.link='/es/recruitment'
            } else if (hrefof.indexOf('/ja') > 0) {
                //日语
                recruit.text = "ポジションに応募する"
                content.time = '発売日';
                content.xueli = '教育';
                content.city = '職場';
                content.info = '詳細を見る';
                content.zhiwei = 'ポジションに応募する';
                content.link='/ja/recruitment'
            } else if (hrefof.indexOf('/ru') > 0) {
                //俄语
                recruit.text = "Подать заявку на должность"
                content.time = 'Дата выхода';
                content.xueli = 'Образование';
                content.city = 'Место работы';
                content.info = 'Посмотреть детали';
                content.zhiwei = 'Подать заявку на должность';
                content.link='/ru/recruitment'
            } else if (hrefof.indexOf('/ko') > 0) {
                //韩语
                recruit.text = "직위 신청"
                content.time = '출시일';
                content.xueli = '교육';
                content.city = '직장';
                content.info = '세부 사항보기';
                content.zhiwei = '직위 신청';
                content.link='/ko/recruitment'
            }


            for (let i = 0; i < recruit.data.length; i++) {
                let vm = recruit.data[i];
                var $div = `<div class="add-content vc_row">
                <div class="content-top">
                    <img src="${vm.text1}" />
                    <div class="titles">
                        <h4>${vm.title}</h4>
                        <div>
                            <p>${content.city}：${vm.text2}</p><p>${content.xueli}：${vm.text3}</p><p>${content.time}：${vm.text4}</p>
                        </div>
                    </div>
                    <div class="urlTo see">${content.info}</div>
                </div>
              
                <div class="content-bottom">
                   <div class="recruit-title">${vm.content}</div>
                   <a class="urlTo" href="${content.link}">${content.zhiwei}</a>
                </div>
            </div>`;
                $('.ajax-box').append($div)
            }
            recruit.infoClick();

        },
        lang() {
            var hrefof = window.location.href;
            if (hrefof.indexOf('/zh-hant') > 0) {
                recruit.text = '查看职位';
            } else if (hrefof.indexOf('/en') > 0) {
                recruit.text = "View jobs"
            } else if (hrefof.indexOf('/de') > 0) {
                recruit.text = "Details anzeigen"
            } else if (hrefof.indexOf('/es') > 0) {
                //西班牙
                recruit.text = "Ver detalles"
            } else if (hrefof.indexOf('/ja') > 0) {
                //日语
                recruit.text = "詳細を見る"
            } else if (hrefof.indexOf('/ru') > 0) {
                //俄语
                recruit.text = "Посмотреть детали"
            } else if (hrefof.indexOf('/ko') > 0) {
                //韩语
                recruit.text = "세부 사항보기"
            }
        },
        infoClick() {
            $('.add-content .see').on('click', function () {
                if ($(this).hasClass('bgc')) {
                    $(this).removeClass('bgc');
                    $(this).text(recruit.text);
                    $(this).parent('.content-top').next().slideUp()
                    return;
                }
                $(this).addClass('bgc');
                $(this).text('');
                $(this).parent('.content-top').next().slideDown()

            })
        },
        init() {
            recruit.lang();
            recruit.getData();
        }
    };

    recruit.init();
});






