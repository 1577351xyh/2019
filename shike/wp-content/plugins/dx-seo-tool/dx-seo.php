<?php
/*
Plugin Name: SEO
Plugin URI:
Description: seo插件
Version: 1.0.1
Author:
Author URI:
Copyright:
*/


/**
 * Define constant
 */
define( 'DXSEO_FILE', plugin_basename( __FILE__ ) );	// Plugin basename
define( 'DXSEO_PRE', 'dxseo' );		// Plugin name prefix

/**
 * Require function files
 */

// Settings 
require_once( 'settings/class-settings.php' );

// Seo meta
if( get_option( 'web589seo_switch_meta' ) == 'on' )
    require_once( 'extends/meta/meta.php' );

// Search words
if( get_option( 'web589seo_switch_search_keywords' ) == 'on' && get_option( 'web589seo_switch_meta' ) == 'on' )
    require_once( 'extends/search-words/class-search.php' );

// Image attribute
if( get_option( 'web589seo_image_attr' ) == 'on' )
    require_once( 'extends/image-att/class-image-attr.php' );

// Nofollow
if( get_option( 'dxseo_nofollow' ) == 'on' )
    require_once( 'extends/nofollow/class-nofollow.php' );

// Relative
if( get_option( 'dxseo_relative' ) == 'on' ) {
    require_once( 'extends/relative/relative.php' );
}

// Sitemap
if( get_option( 'dxseo_sitemap' ) == 'on' ) {
    require_once( 'extends/sitemap/sitemap.php' );
}

// Anchor text
if( get_option( 'dxseo_anchor_text' ) == 'on' ) {
    require_once( 'extends/anchor-text/anchor-text.php' );
}


add_filter('post_type_link', 'custom_single_case_link', 1, 3);

function custom_single_case_link($link, $post = 0)
{

    if ($post->post_type == 'case') {

        return home_url('case/' . $post->ID . '.html');

    } else {

        return $link;

    }

}
add_action('init', 'custom_single_case_rewrites_init');//rewrite

function custom_single_case_rewrites_init()
{

    add_rewrite_rule(

        'case/([0-9]+)?.html$',

        'index.php?post_type=case&p=$matches[1]',

        'top');
}


//发布文章检索关键词
add_action('save_post','save_post_set_keywords');

function save_post_set_keywords($post_ID)
{

    global $wpdb;

    $data = get_post($post_ID);

    if($data->post_status=='publish'){

        $check_post_id = $wpdb->get_row('select * from wp_page_keywords where post_id='.$post_ID.' and post_type="'.$data->post_type.'"',ARRAY_A);//

        $keyword = get_option(DXSEO_PRE.'_anchor_text_datas');//关键词

        foreach ($keyword as $k=>$v){
//
            if(strstr($data->post_excerpt,$k)!=null){//文章摘要中检索关键词

                $post_data = [

                    'post_id'=>$post_ID,
                    'content'=>$data->post_excerpt,
                    'post_title'=>$data->post_title,
                    'post_image'=>lxtx_post_images_nums($post_ID,1),
                    'post_url'=>$data->guid,
                    'category'=>$keyword[$k][1],//分类
                    'keywords'=>$k,//关键词
                    'post_type'=>$data->post_type,
                    'created_at'=>$data->post_date,
                    'updated_at'=>$data->post_date

                ];

                if($check_post_id==null){

                    $wpdb->insert('wp_page_keywords',$post_data);

                }else{

                    unset($post_data['created_at']);
                    unset($post_data['post_id']);
                    unset($post_data['category']);
                    unset($post_data['keywords']);

                    $wpdb->update('wp_page_keywords',$post_data,['post_id'=>$post_ID]);

                }

            }

        }

    }

}


function lxtx_post_images_nums($postid=0,$which=0){

    $content = get_post($postid)->post_content;

    preg_match_all('/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim', $content, $strResult, PREG_PATTERN_ORDER);

    if( $which==0 ){

        $output = ( $strResult && isset($strResult[1]) )?count($strResult[1]):0;

    }else if( $which==1 ){
        // 没图时返回默认图片
        $img_url = '';//get_stylesheet_directory_uri().'/images/default.jpg';
        // 没图时返回随机图片，则取消下面2行注释，并在主题根目录images中创建random文件夹，再在random文件夹中放置10张jpg格式的图片且命名为1、2、...、10
        // $random = mt_rand(1, 10);
        // $img_url = get_stylesheet_directory_uri().'/images/random/'.$random.'.jpg';
        $output = ( $strResult && !empty($strResult[1]) && !empty($strResult[1][0]) ) ? $strResult[1][0] : $img_url;
    }

    return $output;
}


//删除文章时触发
add_action('trash_post','delete_page_keywords');

function delete_page_keywords($post_id)
{

    global $wpdb;

    $wpdb->delete('wp_page_keywords',['post_id'=>$post_id]);

}