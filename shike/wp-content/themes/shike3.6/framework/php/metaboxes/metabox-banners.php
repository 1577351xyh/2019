<?php

$config  = array(
  'title' => '轮播配置',
  'id' => 'mk-metaboxes-banners',
  'pages' => array(
    'banner',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

  array(
    "name" => __( "Banner标题", "mk_framework" ),
    "subtitle" => __( "", "mk_framework" ),
    "desc" => __( "", "mk_framework" ),
    "id" => "_banner_title",
    "type" => "editor"
  ),

    array(
        "name" => __( "Banner文字描述", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_banner_desc",
        "type" => "editor"
    ),

    array(
        "name" => __( "Banner链接", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_banner_link",
        "type" => "text"
    ),

);
new mk_metaboxesGenerator( $config, $options );
