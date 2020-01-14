<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'offset' => '',
    'border_color' => '',
    'bg_color' => '',
    'css' => '',
    'width' => '1/1',
    'visibility' => ''
), $atts));

$output .= "\n\t".'<div class="vc_column '.$el_class.'">';
$output .= '<div class="vc_column-box">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= '</div>';
$output .= "\n\t".'</div>';

echo $output;