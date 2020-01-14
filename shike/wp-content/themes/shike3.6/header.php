<!DOCTYPE html>
<html>
<?php
global $mk_settings, $mk_accent_color, $post, $ken_json;
 $post_id = global_get_post_id();
?>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php if ( defined('WPSEO_VERSION') ) {
            wp_title('');
             } else {?><?php wp_title('',true);}?></title>
        <?php if ( $mk_settings['favicon']['url'] ) : ?>
          <link rel="shortcut icon" href="<?php echo $mk_settings['favicon']['url']; ?>"  />
        <?php endif; ?>
         <!--[if lte IE 11]>
         <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/stylesheet/css/ie.css' />
         <![endif]-->

         <!--[if lte IE 9]>
         <script src="<?php echo THEME_JS;?>/html5shiv.js" type="text/javascript"></script>
         <![endif]-->

         <!--[if lte IE 8]>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
         <![endif]-->
    <?php wp_head(); ?>

    </head>
<body>
<?php
  
    
  

if($post_id) {
    $preloader = get_post_meta( $post_id, '_preloader', true );
          if($preloader == 'true') {
              ?><div class="mk-body-loader-overlay">
                  <div style="background-image:url(<?php echo THEME_IMAGES; ?>/empty.png)"></div>
                </div><?php
          }
    }
?>

<?php

$layout_template = $post_id ? get_post_meta($post_id, '_template', true ) : '';

if($layout_template == 'no-header-title' || $layout_template == 'no-header-title-footer' || $layout_template == 'no-header-title-only-footer') return;


if($layout_template != 'no-header' && $layout_template !='no-header-footer') :


?>


<header id="mk-header" class="mk-header">

<?php
   $mk_menu_location = 'primary-menu';

      do_action( 'vertical_navigation', $mk_menu_location );
      do_action( 'main_navigation', $mk_menu_location );

   ?>


    <ul class="header-right">
        <li class="hdr-shop">
            <a href="http://www.s-k.tw/" target="_blank">
                <span class="hdr-i-shop"></span>
                商城
            </a>
        </li>
        <li class="hdr-search search_form">
            <input id="header-search" type="text" maxlength="30" placeholder="例如：SOT-363或SOT"/>
            <button>搜索</button>
        </li>
        <li class="hdr-search-icon"></li>
        <li><?php do_action('wpml_add_language_selector'); ?></li>
        <li class="hdr-tel">
            <a href="tel:<?php echo stripslashes($mk_settings['footer-hotline']); ?>">
                <span class="hdr-i-tel"></span>
                <?php echo stripslashes($mk_settings['footer-hotline']); ?>
            </a>
        </li>
    </ul>

</header>

    <?php /* Resposnive navigation container. will be appended via JS */ ?>
    <div id="res-nav" class="responsive-nav-container"><?php wp_nav_menu( array('menu' => 'main-menu',) ) ?></div>
    <?php /*******/ ?>

<?php endif; ?>

