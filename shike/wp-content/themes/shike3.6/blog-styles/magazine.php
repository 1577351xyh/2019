<?php

function blog_magazine_style($atts, $i)
{
    global $post;
    extract($atts);

    $image_width = 520;
    $image_height = 300;

    $output = '';

    if ($i == 1):

        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
            $image_src = bfi_thumb($image_src_array[0], array(
                'width' => $image_width,
                'height' => $image_height,
                'crop' => true
            ));

            $output .= '<div class="blog-fist"><a title="' . get_the_title() . '" href="' . get_permalink() . '">';
        if(has_post_thumbnail()){
            $output .= '<img src="' . mk_thumbnail_image_gen($image_src, $image_width, $image_height) . '"/>';
        } else {
            $output .= '<img width="370" height="175" src="' . catch_that_image() . '"/>';
        }
        $output .= '<p>' . get_the_title() . '</p></a></div>';

    else:

        $output .= '<p><a title="' . get_the_title() . '" href="' . get_permalink() . '">' . get_the_title() . '</a></p>';

    endif;

    return $output;

}