<?php

$config  = array(
  'title' => '案例配置',
  'id' => 'mk-metaboxes-cases',
  'pages' => array(
    'case',
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
        "type" => "textarea"
    ),

    array(
        "name" => __( "Banner文字描述", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_banner_desc",
        "type" => "textarea"
    ),

    array(
        "name" => __( "视频链接", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_banner_title",
        "type" => "textarea"
    ),

    array(
        "name" => __( "视频配图", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_banner_title",
        "type" => "textarea"
    ),

  array(
    "name" => __( "企业简介", "mk_framework" ),
    "subtitle" => __( "", "mk_framework" ),
    "desc" => __( "", "mk_framework" ),
    "id" => "_banner_title",
    "type" => "textarea"
  ),

    array(
        "name" => __( "解决方案", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_banner_desc",
        "type" => "textarea"
    ),

    array(
        "name" => __( "客户证言", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_banner_desc",
        "type" => "textarea"
    ),

);
new mk_metaboxesGenerator( $config, $options );
