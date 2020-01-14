<?php

function blog_list_style($atts)
{
    global $post;
    extract($atts);

    $image_width = 380;
    $image_height = 180;

    $output = '';


    $output .= '<div class="blog"><span></span><a title="' . get_the_title() . '" href="' . get_permalink() . '">' . get_the_title() . '</a></div>';


    return $output;
    
}