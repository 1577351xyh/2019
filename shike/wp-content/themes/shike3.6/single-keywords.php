<?php

//global $post;

get_header();

?>
    <!--[if !IE]><!-->
    <link rel="stylesheet" href="/custom/css2/swiper.min.css">
    <!--<![endif]-->
    <!--[if IE]>
    <link rel="stylesheet" href="/custom/css2/idangerous.swiper.css">
    <![endif]-->
    <link rel="stylesheet" href="/custom/css2/search.css">
    <link rel="stylesheet" href="/custom/css2/keywords.css">

    <div id="theme-page" class="theme-page">
        <div class="theme-page-wrapper">
            <div class="theme-content">
                <div class="vc_row_fluid banner_row">
                    <?php echo do_shortcode('[mk_mobile_slideshow slideshow_cat="search_banner"]') ?>

                    <div class="search_form">
                        <input type="text" name="searchInput" placeholder="快速搜索全站内容">
                        <button>点击搜索</button>
                    </div>
                </div>
                <?php




                global $wpdb;

                $keywords = get_the_title();

                $details = get_option( DXSEO_PRE . '_anchor_text_datas' );//所有关键词
                $category = $details[$keywords][1];//分类
                $describe = $details[$keywords][2];//描述

                foreach( $details as $key => $value ) {//相关关键词

                    if( stripos( $details[$key][1], $category ) === false )//$data[1]
                        unset( $details[ $key ] );
                }
                unset($details[$keywords]);

                ?>

                <div class="vc_row project">
                    <div class="vc_wrapper">
                        <div class="currentt">
                            <p><a href="/" style="color: #999;">金蝶管易云官网</a> <small class="j">/</small>
                                <span><?php echo $category;//分类?></span>
                            </p>
                        </div>
                        <div class="project_title">
                            <h1><?php  echo $keywords;?></h1>
                        </div>
                        <div class="project_desc">
                            <p>
                                <?php echo $describe;?>
                            </p>
                        </div>
                        <div class="choose">

                            <?php

//                            for ($i=0;$i<10;$i++){
//
//                                echo '<a target="_blank" href="'.$details[$i][0].'">'.$details[$i].'</a>';
//
//                            }

                            $i = 0;

                            foreach ($details as $k=>$v){
                                if($i < 12){
                                    echo '<a target="_blank" href="'.$details[$k][0].'">'.$k.'</a>';
                                    $i++;
                                }

                            }

                            ?>
                            <div class="clearboth"></div>
                        </div>

                    </div>
                </div>




                <div class="vc_row search_result"><div class="vc_wrapper">
                        <?php
                        $search_pro = $search_case = $search_news = $search_answer = $search_help = '';
                        $have_posts = false;
                        $search_text = $keywords + ' ' + $category;

                        if($_GET['post_type'] == 'products'){
                            $search_pro = new WP_Query("s=$category&post_type=products");
                            $have_posts = $search_pro->have_posts();
                        } else if($_GET['post_type'] == 'cases'){
                            $search_case = new WP_Query("s=$category&post_type=case&showposts=4");
                            $have_posts = $search_case->have_posts();
                        } else if($_GET['post_type'] == 'answer'){
                            $search_answer = new WP_Query("s=$category&post_type=answer&showposts=6");
                            $have_posts = $search_answer->have_posts();
                        } else {
                            /* All Search*/
                            $search_pro = new WP_Query("s=$category&post_type=products");
                            $search_case = new WP_Query("s=$category&post_type=case&showposts=4");
                            $search_help = new WP_Query("s=$category&post_type=help&showposts=6");
                            $search_news = new WP_Query(array(
                                's' => $category,
                                'post_type' => array(
                                    'news',
                                    'trade'
                                ),
                                'showposts' => 6,
                            ));
                            $search_answer = new WP_Query("s=$category&post_type=answer&showposts=6");

                            $have_posts = $search_help->have_posts()||$search_pro->have_posts()||$search_case->have_posts()||$search_news->have_posts()||$search_answer->have_posts();

                        }


                        ?>

                        <?php
                        /* products Search*/
                        if ( $search_pro!='' && $search_pro->have_posts() ):
                            ?>
                            <!-- 相关产品 -->
                            <div class="Related">
                                <div class="Related_title">相关产品</div>
                                <div class="Related_list">
                                    <?php

                                    while ( $search_pro->have_posts() ) :
                                        $search_pro->the_post();
                                        $link = get_post_meta( $post->ID, '_products_link', true );
                                        $desc = get_post_meta( $post->ID, '_products_desc', true );
                                        $full_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true );
                                        ?>
                                        <div class="relevant_ul">
                                            <a href="<?php echo $link; ?>">
                                                <div class="relevant_png">
                                                    <img src="<?php echo $full_image_src[0]; ?>">
                                                </div>
                                                <div class="relevant_cont">
                                                    <p class="relevant_title">
                                                        <?php echo get_the_title(); ?>
                                                    </p>
                                                    <p class="relevant_conte">
                                                        <?php echo $desc; ?>
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        <?php
                        endif;
                        wp_reset_query();
                        ?>

                        <?php
                        /* case Search*/
                        if ( $search_case!='' && $search_case->have_posts() ):
                            ?>
                            <!-- 相关在案例 -->
                            <div class="case_two case_two1">
                                <div class="case_two_title">相关客户案例</div>
                                <div class="case_two_con">
                                    <?php
                                    while ( $search_case->have_posts() ) :
                                        $search_case->the_post();
                                        $full_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true );
                                        ?>
                                        <div class="case_concent">
                                            <a href="<?php echo get_the_permalink(); ?>">
                                                <div class="imgcart"><img src="<?php
                                                    if(has_post_thumbnail()){
                                                        echo $full_image_src[0];
                                                    } else {
                                                        echo '/wp-content/uploads/2019/07/case-default.png';
                                                    }
                                                    ?>"></div>
                                                <div class="ches1"><?php echo get_the_title(); ?></div>
                                                <div class="ches2"><?php echo get_the_excerpt(); ?></div>
                                            </a>
                                        </div>
                                    <?php
                                    endwhile;
                                    ?>
                                    <div class="clearboth"></div>
                                </div>
                                <div class="case_button">
                                    <a href="/cases/" target="_blank">查看更多</a>
                                </div>
                            </div>
                        <?php
                        endif;
                        wp_reset_query();
                        ?>

                        <?php
                        /* news Search*/
                        if ( $search_news!='' && $search_news->have_posts() ):
                            ?>
                            <!-- 相关新闻资讯 -->
                            <div class="relevant relevant1">
                                <div class="rele_title">
                                    相关新闻资讯
                                </div>
                                <div class="relevant_lit">
                                    <?php
                                    while ( $search_news->have_posts() ) :
                                        $search_news->the_post();
                                        $image_width = 240;
                                        $image_height = 130;
                                        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
                                        $image_src = bfi_thumb($image_src_array[0], array(
                                            'width' => $image_width,
                                            'height' => $image_height,
                                            'crop' => true
                                        ));
                                        ?>
                                        <div class="relevant_ul">
                                            <div class="relevant_png">
                                                <?php
                                                if(has_post_thumbnail()) {
                                                    ?>
                                                    <img src="<?php echo mk_thumbnail_image_gen($image_src, $image_width, $image_height); ?>">
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img src="<?php echo catch_that_image(); ?>">
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="relevant_cont">
                                                <p class="relevant_title">
                                                    <a href="<?php echo get_the_permalink()?>"><?php echo get_the_title(); ?></a>
                                                </p>
                                                <p class="relevant_conte">
                                                    <?php
                                                    echo get_the_excerpt()
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                    ?>
                                    <div class="clearboth"></div>
                                </div>
                                <div class="case_button case_button1 ">
                                    <a href="/gyy_news/" target="_blank">查看更多</a>
                                </div>
                            </div>
                        <?php
                        endif;
                        wp_reset_query();
                        ?>

                        <?php
                        /* search answer*/
                        if ( $search_answer!='' && $search_answer->have_posts() ):
                            ?>
                            <!-- 相关问答 -->
                            <div class="xgw xgw1">
                                <div class="link_title">
                                    相关问答
                                </div>
                                <div class="xgw_moent">
                                    <?php
                                    while ( $search_answer->have_posts() ) :
                                        $search_answer->the_post();
                                        ?>
                                        <div class="xgw_left">
                                            <div class="xgw_title"><a href="<?php echo get_the_permalink()?>"><?php echo get_the_title()?></a></div>
                                            <div class="xgw_cont"><?php echo get_the_excerpt()?></div>
                                        </div>
                                    <?php
                                    endwhile;
                                    ?>
                                    <div class="clearboth"></div>
                                </div>
                                <div class="case_button case_button2">
                                    <a href="/product_answers/" target="_blank">查看更多</a>
                                </div>
                            </div>
                        <?php
                        endif;
                        wp_reset_query();
                        ?>

                        <?php
                        /* help search*/
                        if ( $search_help!='' && $search_help->have_posts() ):
                            ?>
                            <!-- 相关产品帮助 -->
                            <div class="xgw xgw1">
                                <div class="link_title">
                                    相关产品帮助
                                </div>
                                <div class="xgw_moent">
                                    <?php
                                    while ( $search_help->have_posts() ) :
                                        $search_help->the_post();
                                        ?>
                                        <div class="xgw_left">
                                            <div class="xgw_title"><a href="<?php echo get_the_permalink()?>"><?php echo get_the_title()?></a></div>
                                            <div class="xgw_cont"><?php echo get_the_excerpt()?></div>
                                        </div>
                                    <?php
                                    endwhile;
                                    ?>
                                    <div class="clearboth"></div>
                                </div>
                                <!--                            <div class="case_button case_button2">-->
                                <!--                                <a href="/product_answers/" target="_blank">查看更多</a>-->
                                <!--                            </div>-->
                            </div>
                        <?php
                        endif;
                        wp_reset_query();
                        ?>

                    </div></div>
            </div>
        </div>
    </div>
    </div>
<?php get_footer(); ?>
    <!--<script type="text/javascript" src="/custom/js/search.js"></script>-->


<?php


//var_dump($details);

//
////相关新闻资讯
//$news = $wpdb->get_results('select * from wp_page_keywords where keywords="'.$keywords.'" and post_type="" ');//case
//
////相关问答
//$answers = $wpdb->get_results('select * from wp_page_keywords where keywords="'.$keywords.'" and post_type="" ');//case
//
////相关产品
//$product = $wpdb->get_results('select * from wp_page_keywords where keywords="'.$keywords.'" and post_type="" ');//case
//
////相关客户案例
//$customer_case = $wpdb->get_results('select * from wp_page_keywords where keywords="'.$keywords.'" and post_type="" ');//case



?>



<?php
get_footer();
