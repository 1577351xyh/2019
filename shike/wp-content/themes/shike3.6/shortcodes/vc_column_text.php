<?php
$el_class = $width = $el_position = $output = '';

extract(shortcode_atts(array(
	'el_class' => '',
	'animation' => '',
	'responsive_align' => 'center',
	'visibility' => '',
), $atts));

$output .= '<div class="mk-text-block '. $el_class . '">';
$output .= wpb_js_remove_wpautop($content, true);
$output .= '</div> ';

echo $output;
