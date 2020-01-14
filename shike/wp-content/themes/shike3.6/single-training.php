<?php
global $post,
       $mk_settings;

get_header(); ?>

<link rel="stylesheet" href="/custom/css/design/single-design_tech.css">

<div id="theme-page" class="theme-page">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post();

        $single_title = "";
        $single_en = "";

        $opnNews = '技术支持';
        $product = '最新产品';
        $news = '行业新闻';



        switch ($post->post_type){
            case "post":
                $single_title = $opnNews;
                $single_en = "News release";
                break;
            case "product_news":
                $single_title = $product;
                $single_en = "Latest products";
                break;
            case "industry_news":
                $single_title = $news;
                $single_en = "Industry news";
                break;
            default:
                $single_title = $opnNews;
                $single_en = "News release";
                break;
        }

    ?>
        <div class="theme-page-wrapper mk-grid">
            <div class="theme-content">
                <!--banner-->
                <div class="vc_row banner_row"
                     style="background:url(/wp-content/uploads/2019/11/about_ban.jpg) no-repeat center / cover">
                    <div class="vc_wrapper">
                        <div class="vc_column ">
                            <div class="vc_column-box">
                                <div class="mk-text-block banner_title"><p>技术支持</p>
                                </div>
                                <div class="mk-text-block banner_en"><p>DESIGN TOOL</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearboth"></div>
                    </div>
                </div>
                <!--bread-->
                <div class="vc_row menu_row">
                    <div class="vc_wrapper">
                        <div class="vc_column menu_left">
                            <div class="vc_column-box">
                                <div class="mk-text-block bread"><p><a href="/" class="home">首页</a> / <a href="/about/" class="/train">技术支持</a> / <a href="/train" style="color:#00cdfb;" class="text">培训活动</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearboth"></div>
                    </div>
                </div>



                <!--content-->
                <div class="vc_row single_content xxxx">
                    <div class="vc_wrapper">
                        <div class="vc_column">
                            <div class="vc_column-box">
                                <h1 class="single_title"><?php the_title(); ?></h1>
                                <div class="single_sub_text"><span><img src="/wp-content/uploads/2019/11/view.png"><?php the_views(); ?></span><span><?php the_time("Y-m-d"); ?></span></div>
                                <div class="single-content">
                                    <?php the_content(); ?>
                                </div>
                                <div class="single_prev next"><?php previous_post_link('上一篇: %link'); ?></div>
                                <div class="single_prev prev"><?php next_post_link('下一篇: %link'); ?></div>
                            </div>
                        </div>
                        <div class="clearboth"></div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

</div>
<?php get_footer(); ?>


<script>
//界面英文翻译
(function(){
console.log('xxxx')
var hrefof = window.location.href;
if(hrefof.indexOf('/en') > 0 || hrefof.indexOf('/ko') > 0|| hrefof.indexOf('/de') > 0|| hrefof.indexOf('/es') > 0|| hrefof.indexOf('/ja') > 0||hrefof.indexOf('/ru') > 0){

    $('.bread p').html('<p><a href="/en" class="home">Home</a> / <a href="/en/techpost/" class="about">Technical Support</a> / <a href="/en/train/" style="color:#00cdfb;" class="text">Training activities</a></p>')
    $('.banner_title').hide();
    if($('.next').html()){
        let link = $('.next a');
        $('.next').text('Prev: ')
        $('.next').append(link)
    }
    if($('.prev').html()){
        let links = $('.prev a');
        $('.prev').text('Next: ')
        $('.prev').append(links)
    }

}

})()


</script>


