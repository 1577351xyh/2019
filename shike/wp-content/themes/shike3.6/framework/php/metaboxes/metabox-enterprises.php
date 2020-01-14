<?php

$config  = array(
  'title' => '内容配置',
  'id' => 'mk-metaboxes-enterprises',
  'pages' => array(
    'enterprise',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

    array(
        "name" => __( "企业logo", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "300*120px", "mk_framework" ),
        "id" => "_enter_logo",
        "type" => "upload"
    ),

  array(
    "name" => __( "企业标题", "mk_framework" ),
    "subtitle" => __( "", "mk_framework" ),
    "desc" => __( "", "mk_framework" ),
    "id" => "_enter_title",
    "type" => "editor"
  ),

    array(
        "name" => __( "企业描述", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_enter_text",
        "type" => "editor"
    ),

    array(
        "name" => __( "播放视频", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "id" => "_enter_has_video",
        "default" => 'false',
        "type" => "toggle"
    ),

    array(
        "name" => __( "视频地址", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_enter_video",
        "type" => "textarea"
    ),

);
new mk_metaboxesGenerator( $config, $options );
