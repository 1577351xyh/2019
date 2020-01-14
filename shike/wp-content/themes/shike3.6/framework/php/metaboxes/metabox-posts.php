<?php

$config  = array(
  'title' => '新闻配置',
  'id' => 'mk-metaboxes-tabs',
  'pages' => array(
//    'post',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

//  array(
//    "name" => __( "新闻详情页标题", "mk_framework" ),
//    "subtitle" => __( "", "mk_framework" ),
//    "desc" => __( "断行处需加&lt;br&gt;标签，如：安全可靠&lt;br&gt;金蝶天燕实力亮相南京软博会", "mk_framework" ),
//    "id" => "_newsdetail_title",
//    "type" => "textarea"
//  )

);
new mk_metaboxesGenerator( $config, $options );
