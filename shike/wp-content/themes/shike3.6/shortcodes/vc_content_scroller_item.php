<?php

extract( shortcode_atts( array(
    "bg_image" => '',
), $atts ) );


$output .= '<div class="swiper-slide">';
if($bg_image) {
    $output .= '<div class="swiper-slide-bg" style="background-image:url('. $bg_image .')"></div>';
}

$output .= wpb_js_remove_wpautop( $content );

$output .= '</div>';



echo $output;
