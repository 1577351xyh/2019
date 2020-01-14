<?php

$config  = array(
  'title' => '产品分类配置',
  'id' => 'mk-metaboxes-product',
  'pages' => array(
    'product',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

    array(
        "name" => __( "VRRM", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "(V)", "mk_framework" ),
        "id" => "_pro_vrrm",
        "type" => "text"
    ),

  array(
    "name" => __( "I(AV)", "mk_framework" ),
    "subtitle" => __( "", "mk_framework" ),
    "desc" => __( "(A)", "mk_framework" ),
    "id" => "_pro_i",
    "type" => "text"
  ),

    array(
        "name" => __( "IFSM", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "(A)", "mk_framework" ),
        "id" => "_pro_ifsm",
        "type" => "text"
    ),

    array(
        "name" => __( "VFM", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "(V)", "mk_framework" ),
        "id" => "_pro_vfm",
        "type" => "text"
    ),

    array(
        "name" => __( "VFM", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "#I(AV) (A)", "mk_framework" ),
        "id" => "_pro_vfm_i",
        "type" => "text"
    ),

    array(
        "name" => __( "IRM at VRRM", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "TA=25℃ (mA)", "mk_framework" ),
        "id" => "_pro_irm_25",
        "type" => "text"
    ),

    array(
        "name" => __( "IRM at VRRM", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "TA=125℃ (mA)", "mk_framework" ),
        "id" => "_pro_irm_125",
        "type" => "text"
    ),

    array(
        "name" => __( "Package Outline", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_pro_package",
        "type" => "text"
    ),

    array(
        "name" => __( "PDF", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_pro_pdf",
        "type" => "upload"
    ),

);
new mk_metaboxesGenerator( $config, $options );
