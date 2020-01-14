<?php

function mk_portfolio_grid_loop( &$r, $atts, $current ) {
	global $post, $mk_settings;
	extract( $atts );




	if ( $column > 5) {
		$column = 5;
	}

	switch ( $column ) {
			case 1 :
			if ( $layout=='full' ) {
				$width = round($grid_width - 15);
			}else {
				$width = round((($content_width / 100) * $grid_width) - 15);
			}
			$mk_column_css = 'one-column';
		break;

		case 2 :
			if ( $layout=='full' ) {
				$width = round($grid_width/2 - 15);
			}else {
				$width = round((($content_width / 100) * $grid_width)/2 - 15);
			}
			$mk_column_css = 'two-column';
		break;

		case 3 :
			$width = $grid_width/3 - 15;
			$mk_column_css = 'three-column';
		break;

		case 4 :
			$width = $grid_width/4 - 15;
			$mk_column_css = 'four-column';
		break;

		case 5 :
			$width = $grid_width/5 - 9;
			$mk_column_css = 'five-column';
		break;

		default :
			$width = $grid_width/3 - 15;
			$mk_column_css = 'three-column';
		break;
	}



	$output = $parallax_class = $parallax_data = '';

	$post_type = get_post_format( get_the_id());
	$item_logo = get_post_meta( get_the_ID(), '_portfolio_item_logo', true );

	if(empty($post_type)) {
		$post_type = 'image';
	}


	$height = !empty( $height ) ? $height : 400;


	$link_to = get_post_meta( get_the_ID(), '_portfolio_permalink', true );
	$permalink  = '';
	if ( !empty( $link_to ) ) {
		$link_array = explode( '||', $link_to );
		switch ( $link_array[ 0 ] ) {
		case 'page':
			$permalink = get_page_link( $link_array[ 1 ] );
			break;
		case 'cat':
			$permalink = get_category_link( $link_array[ 1 ] );
			break;
		case 'portfolio':
			$permalink = get_permalink( $link_array[ 1 ] );
			break;
		case 'post':
			$permalink = get_permalink( $link_array[ 1 ] );
			break;
		case 'manually':
			$permalink = $link_array[ 1 ];
			break;
		}
	}

	if($ajax == 'true' || empty( $permalink )) {
		$permalink = get_permalink();
	}

	if($hover_style == 'parallax') {
		$parallax_class = 'layer';
		$parallax_data = 'data-depth="0.50"';
	}


	switch ($image_size) {
        case 'full':
            $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
            $image_src = $image_src_array[0];
            break;
        case 'crop':
            $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
            $image_src = bfi_thumb($image_src_array[0], array(
                'width' => $width * $image_quality,
                'height' => $height * $image_quality
            ));
            break;            
        case 'large':
            $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large', true);
            $image_src = $image_src_array[0];
            break;
        case 'medium':
            $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium', true);
            $image_src = $image_src_array[0];
            break;        
        default:
            $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
            $image_src = bfi_thumb($image_src_array[0], array(
                'width' => $width * $image_quality,
                'height' => $height * $image_quality
            ));
         break;
    }

    $link = get_post_meta( $post->ID, '_case_link', true );

	$output .='<article class="grid-portfolio-item"><a href="'.$link.'" class="item-holder" target="_blank">';
//    $output .='<article class="grid-portfolio-item"><a href="#" class="item-holder">';


	$output .= '<div class="featured-image">';
	$output .='<img alt="'.get_the_title().'" class="item-featured-image" title="'.get_the_title().'" src="'.mk_thumbnail_image_gen($image_src, $width*$image_quality, $height*$image_quality).'"/></div>';
	if($hover_style == 'parallax'){
		$output .='<div class="portfolio-meta">';
		if($plus_icon == 'true') {
			$output .='<a href="'.$image_src_array[ 0 ].'" title="'.get_the_title().'" data-fancybox-group="portfolio-loop" class="mk-lightbox portfolio-plus-icon"><i class="mk-theme-icon-plus"></i></a>';
		}
		if($permalink_icon == 'true') {
			$output .='<a class="project-load portfolio-permalink" data-post-id="'.get_the_ID().'" href="'.$permalink.'"><i class="mk-theme-icon-next-big"></i></a>';
		}
		$output .='</div>';
	}

	if ($hover_style == 'classic'){
		$output .='<div class="border-tb masonry-border"></div>';
		$output .='<div class="border-tr masonry-border"></div>';
		$output .='<div class="border-bt masonry-border"></div>';
		$output .='<div class="border-bl masonry-border"></div>';
	}

	if($hover_style != 'parallax') {
//	$output .='<div class="hover-overlay"></div>';

		$output .='<div class="portfolio-meta">';

        $output .='<div class="portfolio-cats">'. implode( ', ', mk_get_portfolio_tax($post->ID, false) ) .' | <span>'.get_the_title().'</span></div>';
        $desc = get_post_meta( $post->ID, '_case_desc', true );

        $output .='<div class="portfolio-title">'.$desc.'</div>';



		$output .='</div>';
	}
	


	$output .='</a></article>';


	return $output;

}





