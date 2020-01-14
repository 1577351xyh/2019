<?php

function blog_masonry_style( $atts) {
	global $post;
	extract( $atts );

    if($post->post_type == 'topic'){
        $image_width = 800;
        $image_height = 920;
        $pullup_categories = '<a href="#" onClick="return false;">专题</a>';
    } else if($post->post_type == 'post'){
        $image_width = 1120;
        $image_height = 460;
        $pullup_categories = '<a href="/news">新闻</a>';
    }else if($post->post_type == 'video'){
        $image_width = 560;
        $image_height = 460;
        $pullup_categories = '<a href="/video">视频</a>';
    }else if($post->post_type == 'customer'){
        $image_width = 560;
        $image_height = 460;
        $pullup_categories = '<a href="/cases/goven">客户</a>';
    }

	$output = $blog_heading = $item_cat = '';

	$post_type = (get_post_format( get_the_id()) == '0' || get_post_format( get_the_id()) == '') ? 'image' : get_post_format( get_the_id());

    $categories = get_the_category();

    foreach ($categories as $category) {
        $item_cat .= 'category-' . $category->slug . ' ';
    }
    


	$output .='<article id="entry-'.get_the_ID().'" class="blog-masonry-entry masonry-'.$item_id.' mk-isotop-item '.$mk_column_css.' '.$post_type.'-post-type ' . $item_cat . '">';
	$output .= '<div class="item-holder">';


	/* Blog Heading */
	$blog_heading .= '<div class="blog-entry-heading">';
	$blog_heading .= '<h3 class="blog-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>';

	$blog_heading .= '</div>';
	/***********/

	if($post_type == 'audio') {
		$output .= $blog_heading;
	}



	switch ($post_type) {


		/* Image Post Type */
		case 'image':
		$image_src_array = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true );
		if($cropping == 'true') {
                $image_src = bfi_thumb($image_src_array[0], array(
                'width' => $image_width,
                'height' => $image_height,
                'crop' => true
                ));
            } else {
                $image_src = $image_src_array[0];
            }
		if ( has_post_thumbnail() ) {
			$output .='<div class="featured-image">';
				$output .='<img alt="'.get_the_title().'" class="item-featured-image" width="'.$image_width.'" height="'.$image_height.'" title="'.get_the_title().'" src="'.mk_thumbnail_image_gen($image_src, $image_width, $image_height).'" itemprop="image" />';
			$output .='</div>';
		}
			break;
		/***********/

		case 'aside':
			/* There is nothing to output */
		break;


		/* Gallery Post Type */
		case 'gallery':
			$attachment_ids = get_post_meta( get_the_id(), '_gallery_images', true );
			$output .='<div class="blog-gallery-type">';
			$output .= do_shortcode( '[mk_image_slideshow images="'.$attachment_ids.'" margin_bottom="0" image_width="'.$image_width.'" image_height="'.$image_height.'" direction="horizontal" effect="slide" animation_speed="700" slideshow_speed="7000" pause_on_hover="false" direction_nav="true"]' );
			$output .='<div class="clearboth"></div></div>';

			break;
		/***********/



		/* Video Post Type */
		case 'video' :

		$link = get_post_meta( $post->ID, '_video_url', true );

		if ( $link) {
			global $wp_embed;
			$output .= '<div class="mk-video-wrapper"><div class="mk-video-container">'.$wp_embed->run_shortcode( '[embed]'.$link.'[/embed]' ).'</div></div>';
		}
		break;
		/***********/


		/* Audio Post Type */
		case 'audio' :
		$audio_id = mt_rand( 99, 999 );
		$mp3_file  = get_post_meta( $post->ID, '_mp3_file', true );
		$ogg_file  = get_post_meta( $post->ID, '_ogg_file', true );
		$iframe  = get_post_meta( $post->ID, '_audio_iframe', true );


		if(empty($iframe)) {
		$output .= '<div class="mk-audio">
				        <div id="jquery_jplayer_'.$audio_id.'" data-mp3="'.$mp3_file.'" data-ogg="'.$ogg_file.'" class="jp-jplayer mk-blog-audio"></div>
				        <div id="jp_container_'.$audio_id.'" class="jp-audio">
				            <div class="jp-type-single">
				                    <div class="jp-gui jp-interface">
				                        <ul class="jp-controls">
				                            <li><a href="javascript:;" class="jp-play" tabindex="1"><i class="mk-theme-icon-next-big"></i></a></li>
				                            <li><a href="javascript:;" class="jp-pause" tabindex="1"><i class="mk-icon-pause"></i></a></li>
				                        </ul>
				                        <div class="jp-progress">
				                            <div class="jp-seek-bar">
				                                <div class="jp-play-bar"></div>
				                            </div>
				                        </div>
				                        <div class="js-volume-wrapper">
				                        <div class="jp-volume-bar">
				                            <div class="inner-value-adjust"><div class="jp-volume-bar-value"></div></div>
				                        </div>
				                        </div>
				                       <div class="clearboth"></div>
				                    </div>
				                </div>
            		</div></div>';
        } else {
        	$output .= '<div class="audio-iframe">'.$iframe.'</div>';
        }

		break;

		default :
		$image_src_array = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true );
		if($cropping == 'true') {
                $image_src = bfi_thumb($image_src_array[0], array(
                'width' => $image_width,
                'height' => $image_height,
                'crop' => true
                ));
            } else {
                $image_src = $image_src_array[0];
            }
		if ( has_post_thumbnail() ) {
			$output .='<div class="featured-image"><a href="'.get_permalink().'">';
				$output .='<img alt="'.get_the_title().'" width="'.$image_width.'" class="item-featured-image" height="'.$image_height.'" title="'.get_the_title().'" src="'.$image_src.'" itemprop="image" />';
			$output .='</a></div>';
		}
		break;
	}

	if($post_type != 'audio') {
		$output .= $blog_heading;
	}

    $output .= '<div class="pullup_layer">';
    $output .='<div class="pullup_categories">'.$pullup_categories.'</div>';
    $output .='<h3 class="pullup_title"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>';
    $output .='<a href="'.get_permalink().'" class="pullup_bt">查看详情</a>';
    /***********/
    if($excerpt_length != 0 && $post->post_type == 'video') {
        ob_start();
        mk_excerpt_max_charlength($excerpt_length);
        $output .= '<div class="blog-excerpt">' . ob_get_clean() . '</div>';
    }
    $output .= '</div>';

    $link = get_post_meta( $post->ID, '_homepage_video_link', true );
    if ( $link )
        $output .='<div style="display: none" id="homepage_video_link">' . $link . '</div>';

	$output .='</div></article>';

	return $output;
}
