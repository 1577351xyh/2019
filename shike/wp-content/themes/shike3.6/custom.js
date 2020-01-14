/*
If you are using a child theme and you have added custom scripts into this file, move this file to child theme root folder and continue your modifications there!
*/

(function ($) {

    "use strict";

    /*
		Your custom JS
	*/

    //ie-8
    if(navigator.userAgent.indexOf("MSIE")>0)
    {
        if(navigator.userAgent.indexOf("MSIE 8.0")>0)
        {
            $('#mk-main-navigation ul li.menu-item.menu-item-has-children').on('mouseover',function(){
                if(!$(this).hasClass('dropdownOpen')){
                    $(this).addClass('dropdownOpen');
                }
            })
            $('#mk-main-navigation ul li.menu-item.menu-item-has-children').on('mouseout',function(){
                if($(this).hasClass('dropdownOpen')){
                    $(this).removeClass('dropdownOpen');
                }
            })
			if($(window).width() < 1800) {
            	$('.main-navigation-ul li.has_three_sub_menu>ul.sub-menu>li').addClass('dropdownRightToLeft');
			}
        }
    }

    if($(window).width() < 1200) {
        $('.responsive-nav-link').bind('click',function () {
            $('.mk-responsive-nav li ul li.menu-item-has-children>a').bind('click',function () {
                $(this).parent().find('ul.sub-menu').slideToggle();
                return false;
            })
        })
        $('#mk-footer .footer_link h2.footer_link_has_children a').bind('click',function () {
            if(!$(this).parent().hasClass('footer_active_menu')) {
                $('.footer_active_menu').parent().find('.footer_link_content').slideToggle();
                $('.footer_active_menu').removeClass('footer_active_menu');
                $(this).parent().addClass('footer_active_menu');
            } else {
                $(this).parent().removeClass('footer_active_menu');
            }
            $(this).parent().parent().find('.footer_link_content').slideToggle();
            return false;
        })

    }


})(jQuery);
