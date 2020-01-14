<?php 
global $mk_settings;

get_header(); ?>
    <link rel="stylesheet" href="/custom/css/product/categories.min.css">

<div id="theme-page" class="theme-page">
    <div class="theme-page-wrapper mk-grid">
        <div class="theme-content">
            <!--banner-->
            <div class="vc_row banner_row"
                 style="background:url(/wp-content/uploads/2019/11/pro_ban.jpg) no-repeat center / cover">
                <div class="vc_wrapper">
                    <div class="vc_column ">
                        <div class="vc_column-box">
                            <div class="mk-text-block banner_title"><p>产品</p>
                            </div>
                            <div class="mk-text-block banner_en"><p>product</p>
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
                            <div class="mk-text-block bread"><p><a href="/">首页</a> / <a href="/">产品</a> / <span
                                            style="color: #00cdfb;"><?php echo single_term_title('', false); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="vc_column menu_right">
                        <div class="vc_column-box">
                            <?php wp_nav_menu( array('menu' => 'product-menu',) ) ?>
                        </div>
                    </div>
                    <div class="clearboth"></div>
                </div>
            </div>
            <?php
            $cat = get_query_var("product_category");
            $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);
            $args = array(
                'post_type' => "product",
                'order' => 'desc',
                'post_status' => array(
                    'publish',                      // - a published post or page.
                ),
                'posts_per_page' => '10',
                'paged' => 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_category',
                        'field' => 'slug',
                        'terms' => $cat
                    )
                )
            );
//            $loop = new WP_Query( $args );
//            while ( $loop->have_posts() ) : $loop->the_post();
//
//                echo get_the_title()."<br>";
//                $pro_vrrm = get_post_meta( $post->ID, '_pro_vrrm', true );
//                $pro_i = get_post_meta( $post->ID, '_pro_i', true );
////                echo $pro_vrrm;
////                echo $pro_i;
//
//            endwhile;
//            wp_reset_query();

            get_post_meta()
            ?>
        </div>
    <div class="clearboth"></div>
    </div>
</div>
<?php get_footer(); ?>