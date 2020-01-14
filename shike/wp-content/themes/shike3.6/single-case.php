<?php
global $post,
$mk_settings;

get_header(); ?>
<!--[if !IE]><!-->
<link rel="stylesheet" href="/custom/css2/swiper.min.css">
<!--<![endif]-->
<!--[if IE]>
<link rel="stylesheet" href="/custom/css2/idangerous.swiper.css">
<![endif]-->
<link rel="stylesheet" href="/custom/css2/single_case.css">

<div id="theme-page" class="theme-page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
	<div class="theme-page-wrapper">
        <div class="theme-content">
            <?php
            the_content();
             endwhile;
            ?>
            <div class="vc_row case_row">
                <div class="vc_wrapper">
                   <div class="fancy-title related-title">相关案例</div>
                        <?php
                        $args = array(
                        'post_type' => 'case',
                        'post__not_in' => array( $post->ID ),
                        'showposts' => '4',
                        );
                        $loop = new WP_Query( $args ); ?>

                    <div class="case-swiper swiper-container"><div class="swiper-wrapper">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();
                            global $post;
                            $full_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true ); ?>
                         <div class="swiper-slide">
                                <div class="case_box">
                                    <div class="case-img"><a href="<?php echo the_permalink(); ?>"><img src="
                                    <?php
                                            if(has_post_thumbnail()){
                                                echo $full_image_src[0];
                                            } else {
                                                echo '/wp-content/uploads/2019/07/case-default.png';
                                            }
                                            ?>"></a></div>
                                    <div class="case-caption">
                                        <a class="case-title" href="<?php echo the_permalink(); ?>"><span><?php echo get_case_category_id($post->ID); ?></span><span class="sep">|</span><span><?php echo get_the_title(); ?></span></a>
                                        <div class="case-desc"><?php echo get_the_excerpt(); ?></div>
                                    </div>
                                </div>
                            </div>

                            <?php    endwhile;
                            wp_reset_query(); ?>
                        </div><div class="pagination"></div>
                    </div>
                    <div class="clearboth"></div>
            </div></div>
        </div>
    </div>

</div>
<?php get_footer(); ?>
<!--[if !IE]><!-->
<script src="/custom/js/swiper.min.js"></script>
<!--<![endif]-->
<!--[if IE]>
<script src="/custom/js/idangerous.swiper.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/custom/js/single_case.js"></script>

