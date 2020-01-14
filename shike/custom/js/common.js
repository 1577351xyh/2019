/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2006, 2014 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD (Register as an anonymous module)
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // Node/CommonJS
        module.exports = factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {
    var pluses = /\+/g;

    function encode(s) {
        return config.raw ? s : encodeURIComponent(s);
    }

    function decode(s) {
        return config.raw ? s : decodeURIComponent(s);
    }

    function stringifyCookieValue(value) {
        return encode(config.json ? JSON.stringify(value) : String(value));
    }

    function parseCookieValue(s) {
        if (s.indexOf('"') === 0) {
            // This is a quoted cookie as according to RFC2068, unescape...
            s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
        }
        try {
            // Replace server-side written pluses with spaces.
            // If we can't decode the cookie, ignore it, it's unusable.
            // If we can't parse the cookie, ignore it, it's unusable.
            s = decodeURIComponent(s.replace(pluses, ' '));
            return config.json ? JSON.parse(s) : s;
        } catch (e) {
        }
    }

    function read(s, converter) {
        var value = config.raw ? s : parseCookieValue(s);
        return $.isFunction(converter) ? converter(value) : value;
    }

    var config = $.cookie = function (key, value, options) {
        // Write
        if (arguments.length > 1 && !$.isFunction(value)) {
            options = $.extend({}, config.defaults, options);
            if (typeof options.expires === 'number') {
                var days = options.expires,
                    t = options.expires = new Date();
                t.setMilliseconds(t.getMilliseconds() + days * 864e+5);
            }
            return (document.cookie = [
                encode(key), '=', stringifyCookieValue(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path ? '; path=' + options.path : '',
                options.domain ? '; domain=' + options.domain : '',
                options.secure ? '; secure' : ''
            ].join(''));
        }
        // Read
        var result = key ? undefined : {},
            // To prevent the for loop in the first place assign an empty array
            // in case there are no cookies at all. Also prevents odd result when
            // calling $.cookie().
            cookies = document.cookie ? document.cookie.split('; ') : [],
            i = 0,
            l = cookies.length;
        for (; i < l; i++) {
            var parts = cookies[i].split('='),
                name = decode(parts.shift()),
                cookie = parts.join('=');
            if (key === name) {
                // If second argument (value) is a function it's a converter...
                result = read(cookie, value);
                break;
            }
            // Prevent storing a cookie that we couldn't decode.
            if (!key && (cookie = read(cookie)) !== undefined) {
                result[name] = cookie;
            }
        }
        return result;
    };
    config.defaults = {};
    $.removeCookie = function (key, options) {
        // Must not alter options, thus extending a fresh object...
        $.cookie(key, '', $.extend({}, options, {
            expires: -1
        }));
        return !$.cookie(key);
    };
}));

/************/

$(document).ready(function () {
    var app = {
        headerHei: 68,
        mHeaderHei: 48,
        header: $('#mk-header'),
        m_header: $('#res-nav'),
        m_footer: $('#menu-footer-menu'),
        pcMenu: function () {
            $('.login_menu_item a').attr('rel', 'nofollow');
        },
        resNav: function () {
            app.m_header.css('max-height', $(window).height() - app.mHeaderHei + 'px');
            $('.responsive-nav-link').bind('click', function () {
                $(this).toggleClass('active-burger')
                app.m_header.slideToggle();
                if ($(this).hasClass('active-burger')) {
                    $('body').addClass('res-nav-opened')
                } else {
                    $('body').removeClass('res-nav-opened')
                }
            });
            var sec_menu = $('#menu-main-menu-1').children(".menu-item-has-children")
            var hrefof = window.location.href;
            if (hrefof.indexOf('/zh-hant') > 0||hrefof.indexOf('/en') > 0 || hrefof.indexOf('/ko') > 0 || hrefof.indexOf('/de') > 0 || hrefof.indexOf('/es') > 0 || hrefof.indexOf('/ja') > 0 || hrefof.indexOf('/ru') > 0) {
                sec_menu = $('#res-nav .menu').children(".menu-item-has-children")
            }


            sec_menu.each(function () {
                var _this = $(this)
                $(this).children('a').bind('click', function (e) {

                    _this.toggleClass('menu-opened')
                    $(this).next().slideToggle()
                    return false
                })
            });

            if ($(window).width() < 768) {
                var m_foot_menu = app.m_footer.children(".menu-item-has-children")
                m_foot_menu.each(function () {
                    var _this = $(this)

                    $(this).children('a').bind('click', function (e) {
                        _this.toggleClass('footer-menu-opened')
                        $(this).next().slideToggle()
                        return false
                    })
                })
            }
        },
        stickyHeader: function () {
            var top = $(window).scrollTop()
            var head = app.header
            if (top > app.headerHei) {
                if (!head.hasClass('scroll-header')) {
                    head.addClass('scroll-header')
                }
            } else {
                if (head.hasClass('scroll-header')) {
                    head.removeClass('scroll-header')
                }
            }
        },
        searchForm: function () {
            $('body').bind('click', function () {
                $('.hdr-search').removeClass("hdr-search-show")
            })
            $('.hdr-search-icon').bind('click', function () {
                app.stopPropagation();
                $('.hdr-search').toggleClass("hdr-search-show")
            })
            $('.search_form')
                .each(function () {
                    var form = $(this)
                    form.find('button').bind('click', function () {
                        var value = form.find('input').val()
                        var post = $(this).attr('data-search')
                        if (value !== '') {
                            if (post)
                                window.location.href = '/?s=' + value + '&post_type=' + post
                            else
                                window.location.href = '/?s=' + value
                        } else {
                            form.find('input').focus()
                        }
                    })
                    form.find('input').keydown(function (e) {
                        var e = e || event,
                            keycode = e.which || e.keyCode;
                        if (keycode == 13) {
                            form.find('button').trigger("click");
                        }
                    })
                })
                .bind('click', function () {
                    app.stopPropagation();
                })
        },
        videoPlay: function () {
            $('.vc_video-box').each(function () {
                var box = $(this)
                $(this).find('.vc_video-poster').bind('click', function () {
                    if (box.parent().hasClass('swiper-slide') && box.parent().hasClass('swiper-slide-active') || !box.parent().hasClass('swiper-slide')) {
                        var src = $(this).attr('data-src')
                        var video = box.find('video').attr('src', src)[0]
                        if (video.paused) {
                            video.play()
                            box.addClass("vc_video-play")
                        }
                    }
                })
            })
        },
        tipPop: function () {
            //弹窗
            if ($(window).width() > 767) {
                $('.tip-hide-btn').bind('click', function () {
                    if ($('#tipPop').hasClass('tip-show')) {
                        $('#tipPop').removeClass('tip-show').addClass('tip-hide')
                        if (!$.cookie('has_hide_tip')) {
                            $.cookie('has_hide_tip', '1', {expires: 1, path: '/'});
                        }
                    }
                    return false
                })

                var popTime = 30 * 1000
                var longPopTime = 60 * 1000
                var t = popTime

                if (!$.cookie('has_hide_tip')) {
                    // t = longPopTime
                    setTimeout(function () {
                        $('#tipPop').addClass('tip-show')
                    }, t)
                }
            }
        },
        toTop: function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 200) {
                    $("#mk-to-top").show()
                } else {
                    $("#mk-to-top").hide()
                }
            })
            $("#mk-to-top").bind('click', function () {
                $(window).scrollTop(0)
                return false
            })
        },
        stopPropagation: function (e) {
            e = e || window.event;
            if (e.stopPropagation) { //W3C阻止冒泡方法
                e.stopPropagation();
            } else {
                e.cancelBubble = true; //IE阻止冒泡方法
            }
        },
        lang: function () {
            var hrefof = window.location.href;
            $('.footer-desc').text('時科,源自台湾,全球知名的半导体分立元器件解决商')
            if (hrefof.indexOf('/zh-hant') > 0) {
                //中繁
                $('.footer-desc').text('時科，源自臺灣，全球知名的半導體分立元器件廠商之壹');
                $(".mk-subfooter-logos img").attr('src', '/wp-content/uploads/2019/11/logo_ft.png');
                $(".mk-dark-logo").attr('src', '/wp-content/uploads/2019/11/logo_216x116.png');
                $('.footer-col-3 .footer-contact-outlink>span').text('聯系我們:');
                $('.footer-copyright>p').text('Copyright © 2014 廣東時科微實業有限公司版權所有');
                $('.footer-inlink a:nth-child(1)').text('隱私政策');
                $('.footer-inlink a:nth-child(2)').text('使用條款');
                $('.footer-inlink a:nth-child(3)').text('銷售條款');
                $('.footer-inlink a:nth-child(4)').text('提供反饋');
                //de 德语
                //ja 日语
                //ru 俄语
                //es 西班牙语
                //ko 韩语
            } else if (hrefof.indexOf('/en') > 0) {
                //addclass适配类
                $('.main-navigation-ul').addClass('main-navigation-ul-en');
                $('.hdr-shop').addClass('hdr-shop-en');
                //英文
                $('.hdr-shop>a').html('<a href="http://www.s-k.tw/" target="_blank"> <span class="hdr-i-shop"></span>Mall</a>');
                $('.search_form input').attr('placeholder', 'Example: STO-363');
                $(".mk-dark-logo").attr('src', '/wp-content/uploads/2019/12/logo.jpeg');
                $('.mk-subfooter-logos img').attr('src', '/wp-content/uploads/2019/12/logos.png');
                $('.footer-col-1 .footer-desc').text("Shikues, from Taiwan, one of the world's leading semiconductor discrete component manufacturers");
                $('.footer-col-3 .footer-contact-outlink>span').text('contact us:');
                $('.footer-copyright>p').text('Guangdong Shikueswei Industrial Co., Ltd. All rights reserved');
                $('.footer-inlink a:nth-child(1)').text('Privacy Policy');
                $('.footer-inlink a:nth-child(2)').text('Terms of use');
                $('.footer-inlink a:nth-child(3)').text('Terms of sale');
                $('.footer-inlink a:nth-child(4)').text('Provide feedback');
            }else if (hrefof.indexOf('/de') > 0) {
                //addclass适配类
                $('.main-navigation-ul').addClass('main-navigation-ul-de');
                $('.menu_right').addClass('de');
                $('.search_form').addClass('from-de');
                // $('.hdr-shop').addClass('hdr-shop-en');
                //德语
                $('.hdr-shop>a').html('<a href="http://www.s-k.tw/" target="_blank"> <span class="hdr-i-shop"></span>Online Store</a>');
                $('.search_form input').attr('placeholder', 'z.B.: SOT-363 oder SOT');
                $(".mk-dark-logo").attr('src', '/wp-content/uploads/2019/12/logo.jpeg');
                $('.mk-subfooter-logos img').attr('src', '/wp-content/uploads/2019/12/logos.png');
                $('.footer-col-1 .footer-desc').text("Shikues aus Taiwan, ein weltberühmter Lösungsanbieter von diskreten Halbleiterelemente");
                $('.footer-col-3 .footer-contact-outlink>span').text('Shikues Kontakt:');
                $('.footer-copyright>p').text('Copyright © 2014 Guangdong Shike Micro Industrial Co., ltd. Alle Rechte vorbehalten');
                $('.footer-inlink a:nth-child(1)').text('Datenschutzbestimmungen');
                $('.footer-inlink a:nth-child(2)').text('Nutzungsbedingungen');
                $('.footer-inlink a:nth-child(3)').text('Verkaufsbedingungen');
                $('.footer-inlink a:nth-child(4)').text('Feedback');
            }else if (hrefof.indexOf('/ja') > 0) {
                //addclass适配类
                $('.main-navigation-ul').addClass('main-navigation-ul-ja');
                // $('.hdr-shop').addClass('hdr-shop-en');
                $('.search_form').addClass('from-ja')

                //日语
                $('.hdr-shop>a').html('<a href="http://www.s-k.tw/" target="_blank"> <span class="hdr-i-shop"></span>ショッピングセンター</a>');
                $('.search_form input').attr('placeholder', '例えば、SOT-363またはSOT');
                $(".mk-dark-logo").attr('src', '/wp-content/uploads/2019/12/logo.jpeg');
                $('.mk-subfooter-logos img').attr('src', '/wp-content/uploads/2019/12/logos.png');
                $('.footer-col-1 .footer-desc').text("Shikuesは台湾から来ました。世界的に有名なディスクリート半導体ソリューションプロバイダー。");
                $('.footer-col-3 .footer-contact-outlink>span').text('お問い合わせ:');
                $('.footer-copyright>p').text('Copyright © 2014　広東SHIKUES微実業有限会社の著作権');
                $('.footer-inlink a:nth-child(1)').text('プライバシーポリシー');
                $('.footer-inlink a:nth-child(2)').text('使用条項');
                $('.footer-inlink a:nth-child(3)').text('販売条項');
                $('.footer-inlink a:nth-child(4)').text('フィードバック');
            }else if (hrefof.indexOf('/ru') > 0) {
                //addclass适配类
                $('.main-navigation-ul').addClass('main-navigation-ul-ru');
                $('.menu_right').addClass('ru')
                $('.hdr-shop').addClass('hdr-shop-ru')
                $('.search_form').addClass('from-ru')
                $('.header-right').addClass('header-right-ru');
                // $('.hdr-shop').addClass('hdr-shop-en');
                //俄语
                $('.hdr-shop>a').html('<a href="http://www.s-k.tw/" target="_blank"> <span class="hdr-i-shop"></span>Торговый комплекс</a>');
                $('.search_form input').attr('placeholder', 'Например : SOT-363 или SOT');
                $(".mk-dark-logo").attr('src', '/wp-content/uploads/2019/12/logo.jpeg');
                $('.mk-subfooter-logos img').attr('src', '/wp-content/uploads/2019/12/logos.png');
                $('.footer-col-1 .footer-desc').text("Shikues из Тайваня , одного из ведущих мировых производителей дискретных компонентов полупроводников");
                $('.footer-col-3 .footer-contact-outlink>span').text('Свяжись с нами:');
                $('.footer-copyright>p').text('Copyright © 2014 Все авторские права защищены на микропромышленный SHIKUES в гуандун');
                $('.footer-inlink a:nth-child(1)').text('Политика конфиденциальности');
                $('.footer-inlink a:nth-child(2)').text('Пользовательское соглашение');
                $('.footer-inlink a:nth-child(3)').text('Условия продажи');
                $('.footer-inlink a:nth-child(4)').text('Обеспечивать обратную связь');
            }else if (hrefof.indexOf('/es') > 0) {
                //addclass适配类
                $('.main-navigation-ul').addClass('main-navigation-ul-es');
                $('.menu_right').addClass('es');
                $('.search_form').addClass('from-es')

                // $('.hdr-shop').addClass('hdr-shop-en');
                //西班牙
                $('.hdr-shop>a').html('<a href="http://www.s-k.tw/" target="_blank"> <span class="hdr-i-shop"></span>Centro comercial</a>');
                $('.search_form input').attr('placeholder', 'Por ejemplo: SOT-363 o SOT');
                $(".mk-dark-logo").attr('src', '/wp-content/uploads/2019/12/logo.jpeg');
                $('.mk-subfooter-logos img').attr('src', '/wp-content/uploads/2019/12/logos.png');
                $('.footer-col-1 .footer-desc').text("Shikues,  originaria de Taiwán, Solución de componentes discretos de semiconductores de renombre mundial");
                $('.footer-col-3 .footer-contact-outlink>span').text('Conductor del motor:');
                $('.footer-copyright>p').text('Derechos de autor  © 2014 Derechos de autor de Guangdong Shikues Micro industria S.L. ');
                $('.footer-inlink a:nth-child(1)').text('Política de privacidad');
                $('.footer-inlink a:nth-child(2)').text('Términos de uso');
                $('.footer-inlink a:nth-child(3)').text('Condiciones de venta');
                $('.footer-inlink a:nth-child(4)').text('Proporcionar comentarios');
            }else if (hrefof.indexOf('/ko') > 0) {
                //addclass适配类
                // $('.main-navigation-ul').addClass('main-navigation-ul-en');
                // $('.hdr-shop').addClass('hdr-shop-en');
                //韩语
                $('.menu_right').addClass('ko')
                $('.search_form').addClass('from-ko')

                $('.hdr-shop>a').html('<a href="http://www.s-k.tw/" target="_blank"> <span class="hdr-i-shop"></span>몰</a>');
                $('.search_form input').attr('placeholder', '예제:SOT-363혹은 SOT');
                $(".mk-dark-logo").attr('src', '/wp-content/uploads/2019/12/logo.jpeg');
                $('.mk-subfooter-logos img').attr('src', '/wp-content/uploads/2019/12/logos.png');
                $('.footer-col-1 .footer-desc').text("Shikues는 대만에서 시작하였으며 전세계 유명한 반도체 개별부품 업체입니다.");
                $('.footer-col-3 .footer-contact-outlink>span').text('연락:');
                $('.footer-copyright>p').text('Copyright © 2014 광동 shikues마이크로실업 유한 회사 판권 소유');
                $('.footer-inlink a:nth-child(1)').text('개인 정보 보호 정책');
                $('.footer-inlink a:nth-child(2)').text('이용 약관');
                $('.footer-inlink a:nth-child(3)').text('판매 조건');
                $('.footer-inlink a:nth-child(4)').text('피드백 제공');
            }
        },
        inputSearch:function () {
            //键盘事件
            $('#header-search').bind('keypress',function (event) {
                let searchValue = $('#header-search').val();
                var hrefof = window.location.href;
                var herf = `/categories/?id=1&checkKey="a":"${searchValue}"&search=${searchValue}`;
                var herfs = "http://www.shikues.com/categories?id=1";
                if (hrefof.indexOf('/zh-hant') > 0) {
                     herf = `/zh-hant/categories/?id=1&checkKey="a":"${searchValue}"&search=${searchValue}`;
                     herfs = "http://www.shikues.com/zh-hant/categories?id=1";
                }else if(hrefof.indexOf('/en') > 0){
                     herf = `/en/categories/?id=1&checkKey="a":"${searchValue}"&search=${searchValue}`;
                     herfs = "http://www.shikues.com/en/categories?id=1";
                }else if(hrefof.indexOf('/ko') > 0){
                    herf = `/ko/categories/?id=1&checkKey="a":"${searchValue}"&search=${searchValue}`;
                     herfs = "http://www.shikues.com/ko/categories?id=1";
                }else if(hrefof.indexOf('/de') > 0){
                    herf = `/de/categories/?id=1&checkKey="a":"${searchValue}"&search=${searchValue}`;
                     herfs = "http://www.shikues.com/de/categories?id=1";
                }else if(hrefof.indexOf('/es') > 0){
                    herf = `/es/categories/?id=1&checkKey="a":"${searchValue}"&search=${searchValue}`;
                     herfs = "http://www.shikues.com/es/categories?id=1";
                }else if(hrefof.indexOf('/ja') > 0){
                    herf = `/es/categories/?id=1&checkKey="a":"${searchValue}"&search=${searchValue}`;
                     herfs = "http://www.shikues.com/es/categories?id=1";
                }else if(hrefof.indexOf('/ru') > 0){
                    herf = `/ru/categories/?id=1&checkKey="a":"${searchValue}"&search=${searchValue}`;
                     herfs = "http://www.shikues.com/ru/categories?id=1";
                }


                if (event.keyCode === 13) {
                    if (searchValue.length !== 0) {
                        window.location.href = herf;
                    } else {
                        window.location.href = herfs;
                    }
                }
            });

            $('.search_form button').on('click', function () {
                let value = $('#header-search').val();

                var hrefofs = window.location.href;
                var herf1 = `/categories/?id=1&checkKey="a":"${value}"&search=${value}`;
                var herfs1 = "http://www.shikues.com/categories?id=1";

                if (hrefofs.indexOf('/zh-hant') > 0) {
                     herf1 = `/zh-hant/categories/?id=1&checkKey="a":"${value}"&search=${value}`;
                     herfs1 = "http://www.shikues.com/zh-hant/categories?id=1";
                }else if(hrefofs.indexOf('/en') > 0 || hrefofs.indexOf('/ko') > 0|| hrefofs.indexOf('/de') > 0|| hrefofs.indexOf('/es') > 0|| hrefofs.indexOf('/ja') > 0||hrefofs.indexOf('/ru') > 0){
                     herf1 = `/en/categories/?id=1&checkKey="a":"${value}"&search=${value}`;
                     herfs1 = "http://www.shikues.com/en/categories?id=1";
                }


                if (value.length !== 0) {
                    window.location.href = herf1;
                } else {
                    window.location.href = herfs1;
                }
            })
        },
        // PhoneClick(){
        //   if($(window).width()<768){
        //       $('#menu-item-524>a').bind('click',function (e) {
        //           e.preventDefault()
        //       })
        //       $('#menu-item-526>a').bind('click',function (e) {
        //           e.preventDefault()
        //       })
        //       $('#menu-item-527>a').bind('click',function (e) {
        //           e.preventDefault()
        //       })
        //       $('.menu-item-language-current>a').bind('click',function (e) {
        //           e.preventDefault()
        //       })
        //   }
        // },
        init: function () {
            app.lang();
            app.videoPlay();
            // app.pcMenu()
            app.resNav();
            app.stickyHeader();
            app.searchForm();
            app.toTop();
            app.inputSearch();
            // app.PhoneClick();
            if ($(window).width() > 960) {
                $(window).scroll(function () {
                    app.stickyHeader()
                })
            }
        }
    }

    app.init()
})