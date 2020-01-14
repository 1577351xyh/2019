<?php

$output = $m_title = $title = $tab_id = '';
extract(shortcode_atts($this->predefined_atts, $atts));

$output .= "\n\t\t\t" . '<div class="mk-tabs-pane">';
$output .= '<div class="title-mobile">';
if($m_title){
    $output .= $m_title;
} else {
    $output .= $title;
}
$output .= '</div>';
$output .= wpb_js_remove_wpautop($content);
$output .= "\n\t\t\t" . '</div>';

echo $output;
