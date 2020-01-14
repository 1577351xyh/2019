<?php
$output = $el_class = '';
extract(shortcode_atts(array(
	'full_width' => 'false',
	'id' => '',
	'padding' =>0,
	'attached' => 'false',
	'visibility' => '',
	'equal_height' => '',
	'content_placement' => '',
	'css' => '',
    'bg_image' => '',
    'el_class' => '',
), $atts));

$fullwidth_start = $output = $fullwidth_end = '';

wp_enqueue_script( 'wpb_composer_front_js' );

$padding_css = ($attached == 'true') ? ' add-padding-'.$padding : '';

$css_classes = array(
	'vc_row',
    $el_class,
	vc_shortcode_custom_css_class( $css ),
);

if($full_width == 'true') {
    $css_classes = array(
        'vc_row_fluid',
        $el_class,
        vc_shortcode_custom_css_class( $css ),
    );
}

if ( ! empty( $equal_height ) ) {
	$flex_row = true;
	$css_classes[] = ' vc_row-o-equal-height';
}


if ( ! empty( $content_placement ) ) {
	$flex_row = true;
	$css_classes[] = ' vc_row-o-content-' . $content_placement;
}

if ( ! empty( $flex_row ) ) {
	$css_classes[] = ' vc_row-flex';
}

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );


$id = $id ? (' id="'.$id.'" ') : '';


$output .= '<div '.$id.' class="'.esc_attr( trim( $css_class ) ).'"';
if($bg_image) {
    $output .= ' style="background:url('.$bg_image.') no-repeat center / cover"';
}
$output .= '>';
$output .= '<div class="vc_wrapper">';
$output .= wpb_js_remove_wpautop($content);
$output .= '<div class="clearboth"></div>';
$output .= '</div>';
$output .= '</div>'.$fullwidth_end . $this->endBlockComment('row');
echo $output;