<?php

$config  = array(
  'title' => '荣誉配置',
  'id' => 'mk-metaboxes-videos',
  'pages' => array(
    'honor',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

  array(
    "name" => __( "荣誉描述", "mk_framework" ),
    "subtitle" => __( "", "mk_framework" ),
    "desc" => __( "", "mk_framework" ),
    "id" => "_honor_desc",
    "type" => "textarea"
  ),

);
new mk_metaboxesGenerator( $config, $options );
