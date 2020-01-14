$(document).ready(function(){

    var focusSwiper = new Swiper('.focus-swiper',{
        // watchOverflow: true,//因为仅有1个slide，swiper无效
        loop: true,
        speed: 1000,
        pagination: {
            el: '.focus-pagination',
        },
        autoplay: {
            delay: 7000,
        },

    });

})