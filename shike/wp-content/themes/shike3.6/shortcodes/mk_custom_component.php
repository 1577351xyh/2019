<?php

extract( shortcode_atts( array(
    "animation_speed" => 700,
    "slideshow_speed" => 7000,
    "el_class" => '',
), $atts ) );

$output .= '<div class="content-swiper swiper-container">';
$output .= '<div class="swiper-wrapper">';

$output .= wpb_js_remove_wpautop( $content );

$output .= '</div>';
$output .= '<div class="pagination"></div>';
$output .= '</div>';

echo $output;
