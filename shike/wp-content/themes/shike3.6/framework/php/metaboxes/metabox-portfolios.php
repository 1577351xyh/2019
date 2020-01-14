<?php

$config  = array(
  'title' => sprintf( '案例配置', THEME_NAME ),
  'id' => 'mk-metaboxes-tabs',
  'pages' => array(
    'portfolio'
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

    array(
        "name" => __( "案例副标题", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "如：家电行业巨头的移动生态只路", "mk_framework" ),
        "id" => "_case_desc",
        "type" => "textarea"
    ),
    array(
        "name" => __( "案例详情链接", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_case_link",
        "type" => "text"
    )

);
new mk_metaboxesGenerator( $config, $options );
