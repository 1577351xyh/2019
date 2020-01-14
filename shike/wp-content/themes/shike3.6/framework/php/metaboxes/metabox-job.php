<?php
$cat_addr = $cat_type = $cat_time = array();
$cat_prov = $cat_area = array();

$cat_prov = array(
    'type' => 'job', //自定义分类类型
    'child_of' => 0,
    'parent' => 0,
    'orderby' => 'date',
    'order' => 'asc',
    'hide_empty' => 0, //是否显示没有文章的分类
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'number' => '',
    'taxonomy' => 'job_category', //自定义分类法
    'pad_counts' => false
);

$cat_area = array(
    'type' => 'job', //自定义分类类型
    'child_of' => 0,
    'parent' => 0,
    'orderby' => 'date',
    'order' => 'asc',
    'hide_empty' => 0, //是否显示没有文章的分类
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'number' => '',
    'taxonomy' => 'job_category', //自定义分类法
    'pad_counts' => false
);

$args_addr = array(
    'type' => 'job', //自定义分类类型
    'child_of' => 0,
    'parent' => 31,
    'orderby' => 'date',
    'order' => 'asc',
    'hide_empty' => 0, //是否显示没有文章的分类
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'number' => '',
    'taxonomy' => 'job_category', //自定义分类法
    'pad_counts' => false
);

$args_type = array(
    'type' => 'job', //自定义分类类型
    'child_of' => 0,
    'parent' => 32,
    'orderby' => 'date',
    'order' => 'asc',
    'hide_empty' => 0, //是否显示没有文章的分类
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'number' => '',
    'taxonomy' => 'job_category', //自定义分类法
    'pad_counts' => false
);

$args_time = array(
    'type' => 'job', //自定义分类类型
    'child_of' => 0,
    'parent' => 33,
    'orderby' => 'date',
    'order' => 'asc',
    'hide_empty' => 0, //是否显示没有文章的分类
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'number' => '',
    'taxonomy' => 'job_category', //自定义分类法
    'pad_counts' => false
);

$entries_addr = get_categories($args_addr);
foreach ($entries_addr as $key => $entry) {
    $cat_addr[$entry->name] = $entry->name;
}

$entries_type = get_categories($args_type);
foreach ($entries_type as $key => $entry) {
    $cat_type[$entry->name] = $entry->name;
}

$entries_time = get_categories($args_time);
foreach ($entries_time as $key => $entry) {
    $cat_time[$entry->name] = $entry->name;
}

$config  = array(
  'title' => '职位配置',
  'id' => 'mk-metaboxes-job',
  'pages' => array(
    'job',
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);

$options = array(

//    array(
//        "name" => __( "省", "mk_framework" ),
//        "subtitle" => __( "", "mk_framework" ),
//        "desc" => __( "", "mk_framework" ),
//        "id" => "_job_prov",
//        "width" => 450,
//        "options" => $cat_prov,
//        "type" => "select"
//    ),

//    array(
//        "name" => __( "市", "mk_framework" ),
//        "subtitle" => __( "", "mk_framework" ),
//        "desc" => __( "", "mk_framework" ),
//        "id" => "_job_area",
//        "width" => 450,
//        "options" => $cat_area,
//        "type" => "select"
//    ),

    array(
        "name" => __( "工作地点", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_job_prov",
        "width" => 450,
        "options" => $cat_addr,
        "type" => "select"
    ),

  array(
    "name" => __( "工作地点", "mk_framework" ),
    "subtitle" => __( "", "mk_framework" ),
    "desc" => __( "", "mk_framework" ),
    "id" => "_job_prov",
      "width" => 450,
      "options" => $cat_addr,
      "type" => "select"
  ),

    array(
        "name" => __( "详细地址", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_job_addr",
        "default" => "",
        "type" => "textarea"
    ),

    array(
        "name" => __( "职能类型", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_job_type",
        "width" => 450,
        "options" => $cat_type,
        "type" => "select"
    ),

    array(
        "name" => __( "职位性质", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_job_nature",
        "width" => 450,
        "options" => $cat_time,
        "type" => "select"
    ),

    array(
        "name" => __( "岗位职责", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_job_duty",
        "default" => "",
        "type" => "editor"
    ),

    array(
        "name" => __( "任职要求", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_job_demand",
        "default" => "",
        "type" => "editor"
    ),

    array(
        "name" => __( "申请职位外链", "mk_framework" ),
        "subtitle" => __( "", "mk_framework" ),
        "desc" => __( "", "mk_framework" ),
        "id" => "_job_link",
        "default" => "",
        "type" => "textarea"
    ),

    array(
        "name" => __("急?", "mk_framework"),
        "subtitle" => __("", "mk_framework"),
        "desc" => __("", "mk_framework"),
        "id" => "_job_urgent",
        "default" => 'false',
        "type" => "toggle"
    ),

);
new mk_metaboxesGenerator( $config, $options );
