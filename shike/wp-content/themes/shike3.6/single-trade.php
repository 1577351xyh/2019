<?php
global $post,
       $mk_settings;

get_header(); ?>

<link rel="stylesheet" href="/custom/css2/single.css">
<link rel="stylesheet" href="/custom/css2/form/form_details.min.css">

<div id="theme-page">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
        <!--banner-->
        <div class="vc_row banner_row"
             style="background:url(/wp-content/uploads/2019/06/fwbz-banner.png) no-repeat center / auto 100%">
            <div class="vc_wrapper">
                <div class="vc_column ">
                    <div class="vc_column-box">
                        <div class="mk-text-block banner_title"><p>管易云，激活智慧电商</p>
                        </div>
                    </div>
                </div>
                <div class="clearboth"></div>
            </div>
        </div>
        <div class="theme-page-wrapper vc_row">
            <div class="theme-content vc_wrapper">
                <div class="single_top">
                    <div class="current-tag"><a href="/" style="color: #999999;">金蝶管易云官网</a> / <a href="/gyy_trade">行业资讯</a></div>
                    <!--single-left-->
                    <div class="single_left vc_column">
                        <h1 class="single_title"><?php the_title(); ?></h1>
                        <div class="single_sub_text"><span><img src="/wp-content/uploads/2019/07/eye.jpg"><?php the_views(); ?></span><span><?php the_time("Y-m-d"); ?></span></div>
                        <div class="single-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="single_prev"><?php previous_post_link('上一篇: %link'); ?></div>
                        <div class="single_prev"><?php next_post_link('下一篇: %link'); ?></div>
                    </div>
                    <!--single-right-->
                    <div class="single_right vc_column">
                        <?php do_shortcode("[form_details forms_name='form_details']") ?>
                        <div class="fancy-title fancy_right_title">管易推荐</div>
                        <div class="recommended_cont">
                            <ul>
                                <li>
                                    <?php //var_dump(keywordList());
                                    $i = 0;
                                    foreach (keywordList() as $k=>$v)
                                        if($i < 10) {

                                            ?>
                                            <a target="_blank" href="<?php echo $v[0]; ?>"><?php echo $k; ?></a>

                                            <?php
                                            $i++;

                                        }
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <div class="fancy-title fancy_right_title pro_right_title">热门产品</div>
                        <?php do_shortcode("[popular_products]") ?>
                    </div>
                    <div class="clearboth"></div>
                </div>
                <!--news-->
                <div class="single_bottom">
                    <div class="news_col">
                        <div class="fancy-title fancy_right_title">热门问答</div>
                        <?php do_shortcode("[popular_post post_type='answer']") ?>
                    </div>
                    <div class="news_col">
                        <div class="fancy-title fancy_right_title">热门新闻</div>
                        <?php do_shortcode("[popular_post post_type='news']") ?>
                    </div>
                    <div class="news_col">
                        <div class="fancy-title fancy_right_title">热门资讯</div>
                        <?php do_shortcode("[popular_post post_type='trade']") ?>
                    </div>
                    <div class="clearboth"></div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

</div>
<?php get_footer(); ?>

<script type="text/javascript" src="/custom/js/form/form_details.min.js"></script>


