<?php

extract( shortcode_atts( array(
			"animation_speed" => 700,
			"slideshow_speed" => 7000,
			"pause_on_hover" => "false",
			'animation' => '',
			"el_class" => '',
    "slideshow_cat" => 'index_banner',
), $atts ) );


$output .= '<div class="banner-swiper swiper-container">';
$output .= '<div class="swiper-wrapper">';

$args = array(
    'post_type' => 'banner',
    'order' => 'asc',
    'orderby' => 'title',
    'numberposts' => '10',
    'tax_query' => array(
        array(
            'taxonomy' => 'banner_category',
            'field' => 'slug',
            'terms' => $slideshow_cat
        )
    )
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    global $post;
    $full_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true );

    $title = get_post_meta( $post->ID, '_banner_title', true );
    $desc = get_post_meta( $post->ID, '_banner_desc', true );
//    $btn = get_post_meta( $post->ID, '_banner_btn_text', true );
    $link = get_post_meta( $post->ID, '_banner_link', true );

    $output .= '<div class="swiper-slide">';
    if($link){
        $output .= '<a target="_blank" href="'.$link.'">';
    }
    $output .= '<div class="swiper-slide-bg" style="background-image:url('. $full_image_src[0] .')"></div>';
//    $output .= '<div class="vc_row"><div class="vc_wrapper">';
//
//    $output .= '<div class="vc_column-inner">';
//
    if(!empty($title) && !empty($desc)){
        $output .= '<div class="banner_text"><div class="banner_title">'. $title .'</div><div class="banner_desc">'. $desc .'</div></div>';

    }

    if($link){
        $output .= '</a>';
    }
//
//    $output .= '</div>';
//    $output .= '<div class="clearboth"></div>';
//    $output .= '</div></div>';
    $output .= '</div>';

endwhile;
wp_reset_query();

$output .= '</div>';
$output .= '<div class="pagination banner-pagination"></div>';
$output .= '</div>';
$output .= '<!--[if !IE]><!--> 
<script src="/custom/js/swiper.min.js"></script>
<!--<![endif]-->
<!--[if IE]>
<script src="/custom/js/idangerous.swiper.min.js"></script>
<![endif]-->
<script type="text/javascript">
  var bannerSwiper = new Swiper(\'.banner-swiper\',{
    loop: true,
	speed:'.$animation_speed.',
	autoplay: '.$slideshow_speed.',
    pagination : \'.banner-pagination\',
    pagination: {
    el: \'.banner-pagination\',
          clickable :true,
  },
    calculateHeight : true,
    resizeReInit : true,
    paginationClickable :true,
    effect : \'fade\',
  }); 
</script>';

echo $output;

