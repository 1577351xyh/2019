<?php
$config  = array(
    'title' => sprintf('页面配置', THEME_NAME),
    'id' => 'mk-page-metabox',
    'pages' => array(
        'page',
    ),
    'callback' => '',
    'context' => 'normal',
    'priority' => 'core'
);
$options = array(
    array(
        "name" => __("Page Elements", "mk_framework"),
        "subtitle" => __("", "mk_framework"),
        "desc" => __("Depending on your need you can change this page's general layout", "mk_framework"),
        "id" => "_template",
        "default" => '',
        "placeholder" => 'true',
        "width" => 400,
        "options" => array(
          "no-header" => __('Remove Header', "mk_framework"),
          "no-title" => __('Remove Page Title', "mk_framework"),
          "no-header-title" => __('Remove Header & Page Title', "mk_framework"),
          "no-title-footer" => __('Remove Page Title & Footer', "mk_framework"),
          "no-title-sub-footer" => __('Remove Page Title & Sub Footer', "mk_framework"),
          "no-title-footer-sub-footer" => __('Remove Page Title & Footer & Sub Footer', "mk_framework"),
          "no-footer-only" => __('Remove Footer', "mk_framework"),
          "no-sub-footer" => __('Remove Sub Footer', "mk_framework"),
          "no-footer" => __('Remove Footer & Sub Footer', "mk_framework"),
          "no-footer-title" => __('Remove Footer & Page Title', "mk_framework"),
          "no-sub-footer-title" => __('Remove Footer & Sub Footer & Page Title', "mk_framework"),
          "no-header-footer" => __('Remove Header & Footer & Sub Footer', "mk_framework"),
          "no-header-title-only-footer" => __('Remove Header & Page Title & Footer', "mk_framework"),
          "no-header-title-footer" => __('Remove Header & Page Title & Footer & Sub Footer', "mk_framework")
        ),
        "type" => "select"
    ),

//    array(
//        "name" => __("Main Navigation Location", "mk_framework"),
//        "subtitle" => __("Choose which menu location to be used in this page.", "mk_framework"),
//        "desc" => __("If left blank, Primary Menu will be used. You should first <a target='_blank' href='".admin_url( 'nav-menus.php' ) . "'>create menu</a> and then <a target='_blank' href='".admin_url( 'nav-menus.php' ) . "?action=locations'>assign to menu locations</a>", "mk_framework"),
//        "id" => "_menu_location",
//        "default" => '',
//        "placeholder" => 'true',
//        "width" => 400,
//        "options" => array(
//            "primary-menu" => __('Primary Navigation', "mk_framework"),
//            "second-menu" => __('Second Navigation', "mk_framework"),
//            "third-menu" => __('Third Navigation', "mk_framework"),
//            "fourth-menu" => __('Fourth Navigation', "mk_framework"),
//            "fifth-menu" => __('Fifth Navigation', "mk_framework"),
//            "sixth-menu" => __('Sixth Navigation', "mk_framework"),
//            "seventh-menu" => __('Seventh Navigation', "mk_framework")
//        ),
//        "type" => "select"
//    ),

);
new mk_metaboxesGenerator($config, $options);
