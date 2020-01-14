<?php

$config  = array(
  'title' => '内容配置',
  'id' => 'mk-metaboxes-recruit',
  'pages' => array(
    'recruit',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(
     array(
        "name" => __( "职位图片", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "55*65px", "mk_framework" ),
        "id" => "_enter_logo",
        "type" => "upload"
    ),

    array(
        "name" => __( "工作地点", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "id" => "_app_en",
        "type" => "text"
    ),

    array(
      "name" => __( "学历", "mk_framework" ),
      "subtitle" => __( "", "mk_framework" ),
      "desc" => __( "", "mk_framework" ),
      "id" => "_app_xue",
      "type" => "text"
    ),

    array(
        "name" => __( "发布日期", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "id" => "_app_time",
        "type" => "text"
    ),

    array(
        "name" => __( "申请职位", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "id" => "_app_zhi",
        "type" => "text"
    ),

);
new mk_metaboxesGenerator( $config, $options );
