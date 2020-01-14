<?php

$config  = array(
  'title' => '应用配置',
  'id' => 'mk-metaboxes-application',
  'pages' => array(
    'application',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

    array(
        "name" => __( "英文标题", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "如 LED Lighting", "mk_framework" ),
        "id" => "_app_en",
        "type" => "textarea"
    ),

  array(
    "name" => __( "Product產品", "mk_framework" ),
    "subtitle" => __( "", "mk_framework" ),
    "desc" => __( "", "mk_framework" ),
    "id" => "_app_product",
    "type" => "textarea"
  ),

    array(
        "name" => __( "Application應用", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_app_application",
        "type" => "textarea"
    ),

);
new mk_metaboxesGenerator( $config, $options );
