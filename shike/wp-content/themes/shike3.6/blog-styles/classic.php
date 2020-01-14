<?php

function blog_classic_style($atts)
{
    global $post;
    extract($atts);

    $image_width = 520;
    $image_height = 300;


    $output = '';

    $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);

    $image_src = bfi_thumb($image_src_array[0], array(
        'width' => $image_width,
        'height' => $image_height,
        'crop' => true
    ));

    $output .= '<div class="blog-container">';

    $output .= '<div class="blog-img"><a href="' . get_permalink() . '">';

    if(has_post_thumbnail()){
        $output .= '<img src="' . mk_thumbnail_image_gen($image_src, $image_width, $image_height) . '"/>';
    } else {
        $output .= '<img width="520" src="' . catch_that_image() . '"/>';
    }

    $output .= '</a></div>';

    $output .= '<div class="blog-caption">';

    $output .= '<div class="blog-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
//    $output .= '<div class="blog-title"><a href="#">' . get_the_title() . '</a></div>';

//    ob_start();
//    mk_excerpt_max_charlength(50);
    $output .= '<div class="blog-excerpt">' . get_the_excerpt() . '</div>';

    $output .= '<div class="blog-time">' . get_the_time('Y-m-d') . '</div>';

    $output .= '</div>';

    $output .= '<div class="clearboth"></div></div>';


    return $output;

}
