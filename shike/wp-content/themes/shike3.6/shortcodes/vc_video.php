<?php

$title = $link = $size = $el_position = $width = $el_class = '';
extract( shortcode_atts( array(
    'link' => '',
    'el_class' => '',
    'poster' => '',
), $atts ) );

if ( $link == '' ) { return null; }

$output .= "\n\t".'<div class="vc_video-box"><div data-src="'.$link.'" class="vc_video-poster" style="background-image:url('.$poster.')"></div>';

$output .= "\n\t".'<video class="'.$el_class.'" src="" controls="controls" width="100%" poster="'.$poster.'">您的浏览器不支持 video 标签。';
$output .= "\n\t".'</video></div>';
echo $output;
