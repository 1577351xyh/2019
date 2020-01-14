<?php

$config  = array(
  'title' => '培训活动配置',
  'id' => 'mk-metaboxes-training',
  'pages' => array(
    'training',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

  array(
    "name" => __( "活动时间", "mk_framework" ),
    "subtitle" => __( "", "mk_framework" ),
    "desc" => __( "", "mk_framework" ),
    "id" => "_train_time",
    "type" => "textarea"
  ),

    array(
        "name" => __( "活动地点", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_train_addr",
        "type" => "textarea"
    ),

    array(
        "name" => __( "报名链接", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_train_link",
        "type" => "textarea"
    ),

);
new mk_metaboxesGenerator( $config, $options );
