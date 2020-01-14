<?php

extract( shortcode_atts( array(
    'el_class' => '',
), $atts ) );

$output .= '<div class="mk-single-component"></div>';

echo $output;
