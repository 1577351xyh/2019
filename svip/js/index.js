$(document).ready(function ($) {
    let app = {
        timeout1:null,
        timeout2:null,
        timeout3:null,
        timeout4:null,
        timeout5:null,
        swiper(){
            new Swiper('.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                },
                autoplay:true
            })
        },
        animateds(el,classname,time){
            $(el).addClass(classname)
            $(el).stop().animate({'opacity':'1'},time,function () {
                $(el).css('opacity','1')
                $(el).css('transform','translateY(0%)')
            })
        },
        // 清除定时器
        clearTimeouts(){
            app.timeout1 =null;
            app.timeout2 =null;
            app.timeout3 =null;
            app.timeout4 =null;
            app.timeout5 =null;
            clearTimeout(app.timeout1)
            clearTimeout(app.timeout2)
            clearTimeout(app.timeout3)
            clearTimeout(app.timeout4)
            clearTimeout(app.timeout5)
        },
        // 移除动画，初始化值
        removeAnimated(el,classname,type){
            $(el).removeClass(classname)
            $(el).css('opacity','0')
            if(type==='text'){
                $(el).css('transform','translateY(200%)')
            }
            if(type==='img'){
                $(el).css('transform','translateY(20%)')
            }
        },
        //动画
        animation(el_childer){
                app.clearTimeouts();
                $('.warper2-childer').addClass('tranfrom1').removeClass('tranfrom1-hide')
                $('.warper2 .warper-text').stop(true).animate({'marginTop':'70px'},100)
                $('.warper2 .warper-text>.warper-text-childer-item').addClass('tranfrom')
               // $(`.warper2  ${el_childer} .item`).css('display','block')
                $(`.warper2  ${el_childer} .item`).css('display','block')
                app.animateds(`${el_childer}>.imgs`,'open-img',300)
                app.timeout1 = setTimeout(function () {
                    app.animateds(`${el_childer}>.item-text-first`,'open',100)
                },200)
                app.timeout2 = setTimeout(function () {
                    app.animateds(`${el_childer}>.item-text-2`,'open',100)
                },250)
                app.timeout3 = setTimeout(function () {
                    app.animateds(`${el_childer}>.item-text-3`,'open',100)
                },300)
                app.timeout4 = setTimeout(function () {
                    app.animateds(`${el_childer}>.item-text-4`,'open-2',100)
                },350)
        },
        // 事件
        onmovesd(){
                let vm = $('.warper-text-childer-item>p')
                $.each(vm,function(index,el){
                    $(el).on('mouseenter',()=>{
                        //当前移入的元素
                        var that = $(this);
                        var dom = '.'+($(this).siblings()[1]).className.split(' ',9)[1];
                        //移入动画
                        app.animation(dom)
                        //当前移入的元素的其他兄弟元素
                        let sib = $(this).parent().siblings();
                        $.each(sib,function(index,el_childer){
                            let m_si = $(el_childer).children('.mouseleave')
                            $(m_si).on('mouseenter',function () {
                                let sib_dom ='.'+ that.siblings()[1].className.split(' ',9)[1]
                                $(`${sib_dom} .item`).css('display','none')
                                app.removeAnimated(`${sib_dom}>.imgs`,'open-img')
                                app.removeAnimated(`${sib_dom}>.item-text-first`,'open','text')
                                app.removeAnimated(`${sib_dom}>.item-text-2`,'open','text')
                                app.removeAnimated(`${sib_dom}>.item-text-3`,'open','text')
                                app.removeAnimated(`${sib_dom}>.item-text-4`,'open-2','text')
                            })
                        })
                        $('.warper2').on('mouseleave',function () {
                            //放大
                            $('.warper2-childer').removeClass('tranfrom1').addClass('tranfrom1-hide')
                            //上移
                            $('.warper2 .warper-text').animate({'marginTop':'215px'},100)
                            //内容
                            $(`.item-box .item`).css('display','none')
                            app.removeAnimated(`.item-box>.imgs`,'open-img')
                            app.removeAnimated(`.item-box>.item-text-first`,'open','text')
                            app.removeAnimated(`.item-box>.item-text-2`,'open','text')
                            app.removeAnimated(`.item-box>.item-text-3`,'open','text')
                            app.removeAnimated(`.item-box>.item-text-4`,'open-2','text')
                        })
                    })
                })
        },
        //warper动画
        warper3_1(){
            $('.warper3-childer1').on('mouseenter',function () {
                $('.warper3-childer1 .warper-text').stop(true).animate({'marginTop':'70px'},300)
                $(`.warper3 .warper3-item`).css('display','block')
                app.timeout1 = setTimeout(function () {
                    app.animateds(`.warper3-item1`,'open-warper2',100)
                },200)
                app.timeout2 = setTimeout(function () {
                    app.animateds(`.warper3-item2`,'open-warper2',100)
                },300)
                app.timeout3 = setTimeout(function () {
                    app.animateds(`.warper3-item3`,'open-warper2',100)
                },350)
                app.timeout4 = setTimeout(function () {
                    app.animateds(`.warper3-item4`,'open-warper2',100)
                },400)
                $('.warper3-childer1').on('mouseleave',function () {
                    //上移
                    $('.warper3-childer1 .warper-text').animate({'marginTop':'215px'},300)
                    //内容
                    $(`.warper3 .warper3-item`).css('display','none')
                    app.removeAnimated(`.warper3-item`,'open-warper2','text')
                    app.removeAnimated(`.warper3-item`,'open-warper2','text')
                    app.removeAnimated(`.warper3-item`,'open-warper2','text')
                    app.removeAnimated(`.warper3-item`,'open-warper2','text')
                    app.removeAnimated(`.warper3-item`,'open-warper2','text')
                })
            })

        },
        forClick(){
            $('#bottom').on('click',function (e) {
                e.preventDefault()
                if($('.bottom img').css('display')=='block'){
                    $('#bottom').text('申请试用')
                    $('.bottom img').slideUp();
                    if($(window).width()>768){
                        $('.warper4 .warper-text').stop().animate({'marginTop':'210px'},300)
                    }
                    return;
                }
                $('#bottom').text('扫码立即试用')
                $('.bottom img').slideDown();
                $('.warper4 .warper-text').stop().animate({'marginTop':'70px'},300)
            })
        },
        warper3_2(){
          $('.warper3-childer2').on('mouseenter',function () {
              $('#warper3-box').css('display','block')
              $('#warper3-box').addClass('animated fadeInUp')
              $('#warper3-box1').addClass('animated fadeOutUp')
              $('#warper3-box').removeClass('fadeOutDown')
              $('#warper3-box1').removeClass('fadeInDown')
                  $('.warper3-childer2').on('mouseleave',function () {
                      $('#warper3-box').addClass('fadeOutDown')
                      $('#warper3-box1').addClass('fadeInDown')
                      $('#warper3-box').removeClass('fadeInUp')
                      $('#warper3-box1').removeClass('fadeOutUp')
                  })
          })
        },
        init(){
            if($(window).width()<768){
                app.swiper();
                app.forClick();
                return;
            }
            app.swiper();
            app.onmovesd();
            app.warper3_1();
            app.forClick();
            app.warper3_2();
        }
    }
    app.init();
})


