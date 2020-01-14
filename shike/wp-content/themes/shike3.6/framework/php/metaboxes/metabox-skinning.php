<?php

$config  = array(
  'title' => sprintf( 'Logo 配置', THEME_NAME ),
  'id' => 'mk-metaboxes-styling',
  'pages' => array(
    'page',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

  array(
    "name" => __( "Custom Settings", "mk_framework" ),
    "subtitle" => __( "You should enable this option if you want to override global background values defined in Theme Settings. Please note that this option will only apply to background selector and layout selector not other options int this metabox.", "mk_framework" ),
    "id" => "_custom_bg",
    "default" => 'false',
    "type" => "toggle"
  ),

  array(
      "name" => __("Upload Logo (Dark & default)", "mk_framework"),
      "desc" => __("This logo will be used when transparent header is enabled and your header skin is dark.", "mk_framework"),
      "id" => "logo",
      "default" => "",
      "type" => "upload"
  ),
  array(
      "name" => __("Upload Retina Logo (Dark & default)", "mk_framework"),
      "desc" => __("Use this option if you want your logo appear crystal clean in retina devices(eg. macbook retina, ipad, iphone).", "mk_framework"),
      "id" => "logo_retina",
      "default" => "",
      "type" => "upload"
  ),
  array(
      "name" => __("Upload Logo (Light Skin)", "mk_framework"),
      "desc" => __("This logo will be used when transparent header is enabled and your header is light skin.", "mk_framework"),
      "id" => "light_logo",
      "default" => "",
      "type" => "upload"
  ),
  array(
      "name" => __("Upload Retina Logo (Light Skin)", "mk_framework"),
      "desc" => __("Use this option if you want your logo appear crystal clean in retina devices(eg. macbook retina, ipad, iphone).", "mk_framework"),
      "id" => "light_logo_retina",
      "default" => "",
      "type" => "upload"
  ),

);
new mk_metaboxesGenerator( $config, $options );
