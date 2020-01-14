<?php

/**
 * Class and Function List:
 * Function list:
 * - init()
 * - constants()
 * - widgets()
 * - supports()
 * - functions()
 * - language()
 * - add_metaboxes()
 * - admin()
 * - admin_menus()
 * - _load_demo_content_page()
 * - post_types()
 * - theme_enqueue_scripts()
 * - mk_preloader_script()
 * Classes list:
 * - Theme
 */

$theme = new Theme();
$theme->init(array(
    "theme_name" => "Ken",
    "theme_slug" => "TK",
));

class Theme
{
    function init($options) {
        $this->constants($options);
        $this->functions();
        $this->post_types();
        $this->admin();
        
        add_action('init', array(&$this,
            'language'
        ));
        
        add_action('init', array(&$this,
            'add_metaboxes',
        ));
        
        add_action('after_setup_theme', array(&$this,
            'supports',
        ));
        add_action('widgets_init', array(&$this,
            'widgets',
        ));
        
        add_action('admin_menu', array(&$this,
            'admin_menus'
        ));
    }
    
    function constants($options) {
        define("THEME_DIR", get_template_directory());
        define("THEME_DIR_URI", get_template_directory_uri());
        define("THEME_NAME", $options["theme_name"]);

        define("THEME_OPTIONS_BUILD", $options["theme_name"] . '_options_build');
        define("THEME_SLUG", $options["theme_slug"]);
        define("THEME_STYLES", THEME_DIR_URI . "/stylesheet/css");
        define("THEME_IMAGES", THEME_DIR_URI . "/images");
        define("THEME_JS", THEME_DIR_URI . "/js");
        define("THEME_FRAMEWORK", THEME_DIR . "/framework");
        define("THEME_CONTROL_PANEL", THEME_FRAMEWORK . "/control-panel");
        define('THEME_CONTROL_PANEL_ASSETS', THEME_DIR_URI . '/framework/control-panel/assets');
        define("THEME_PHP", THEME_FRAMEWORK . "/php");
        define("THEME_ACTIONS", THEME_FRAMEWORK . "/actions");
        define("THEME_INCLUDES", THEME_FRAMEWORK . "/includes");
        define("THEME_INCLUDES_URI", THEME_DIR_URI . "/framework/includes");
        define('THEME_METABOXES', THEME_PHP . '/metaboxes');
        define('THEME_POST_TYPES', THEME_PHP . '/post-types');
        define('THEME_ADMIN_URI', THEME_DIR_URI . '/framework');
        define('THEME_ADMIN_ASSETS_URI', THEME_DIR_URI . '/framework/assets');
    }
    
    function widgets() {
        
        require_once locate_template("widgets/widgets-contact-form.php");
        require_once locate_template("widgets/widgets-contact-info.php");
        require_once locate_template("widgets/widgets-gmap.php");
        require_once locate_template("widgets/widgets-popular-posts.php");
        require_once locate_template("widgets/widgets-related-posts.php");
        require_once locate_template("widgets/widgets-recent-posts.php");
        require_once locate_template("widgets/widgets-social-networks.php");
        require_once locate_template("widgets/widgets-subnav.php");
        require_once locate_template("widgets/widgets-testimonials.php");
        require_once locate_template("widgets/widgets-twitter-feeds.php");
        require_once locate_template("widgets/widgets-video.php");
        require_once locate_template("widgets/widgets-flickr-feeds.php");
        require_once locate_template("widgets/widgets-recent-portfolio.php");
        require_once locate_template("widgets/widgets-comments.php");
        require_once locate_template("widgets/widgets-tiny-slider.php");
        require_once locate_template("widgets/widgets-instagram.php");
        require_once locate_template("widgets/widgets-login-form.php");
        require_once locate_template("widgets/widgets-blog-tab.php");
        require_once locate_template("widgets/widgets-custom-menu.php");
        require_once locate_template("widgets/widgets-subscription.php");
        
        register_widget("Artbees_Widget_Popular_Posts");
        register_widget("Artbees_Widget_Recent_Posts");
        register_widget("Artbees_Widget_Related_Posts");
        register_widget("Artbees_Widget_Twitter");
        register_widget("Artbees_Widget_Contact_Form");
        register_widget("Artbees_Widget_Contact_Info");
        register_widget("Artbees_Widget_Social");
        register_widget("Artbees_Widget_Sub_Navigation");
        register_widget("Artbees_Widget_Google_Map");
        register_widget("Artbees_Widget_Testimonials");
        register_widget("Artbees_Widget_Video");
        register_widget("Artbees_Widget_Flickr_Feeds");
        register_widget("Artbees_Widget_Recent_Portfolio");
        register_widget("Artbees_WP_Widget_Recent_Comments");
        register_widget("Artbees_Widget_Tiny_Slider");
        register_widget("Artbees_Widget_Instagram_Feeds");
        register_widget("Artbees_Widget_Login_Form");
        register_widget("Artbees_Widget_Blog_Tab");
        register_widget("Artbees_WP_Nav_Menu_Widget");
        register_widget("Artbees_Widget_Subscription_Form");
    }
    
    function supports() {
        global $mk_settings;
        
        if (!isset($content_width)) {
            $content_width = isset($mk_settings['grid-width']) ? $mk_settings['grid-width'] : 1140;
        }
        
        if (function_exists('add_theme_support')) {
            add_theme_support('menus');
            add_theme_support('automatic-feed-links');
            add_theme_support('editor-style');
            
            /* Add Woocmmerce support */
            add_theme_support('woocommerce');
            
            add_theme_support('post-formats', array(
                'image',
                'gallery',
                'video',
                'audio',
                'quote',
                'link'
            ));
            register_nav_menus(array(
                'primary-menu' => 'Primary Navigation',
                'second-menu' => 'Second Navigation',
                'third-menu' => 'Third Navigation',
                'fourth-menu' => 'Fourth Navigation',
                'fifth-menu' => 'Fifth Navigation',
                'sixth-menu' => 'Sixth Navigation',
                'seventh-menu' => 'Seventh Navigation',
            ));
            
            add_theme_support('post-thumbnails');
        }
    }
    
    function functions() {
        require_once (THEME_PHP . '/ReduxCore/framework.php');
        require_once (THEME_PHP . '/ReduxCore/options-config.php');
        
        require_once THEME_PHP . "/general.php";
        require_once THEME_PHP . "/schema-markup.php";
        require_once THEME_PHP . "/send-mail.php";
        require_once THEME_PHP . "/helper.php";
        require_once THEME_PHP . "/woocommerce.php";
        require_once THEME_INCLUDES . "/ajax-search.php";
        
        require_once (THEME_INCLUDES . "/vc-integration.php");
        
        require_once THEME_INCLUDES . "/wp-nav-custom-walker.php";
        require_once THEME_PHP . '/sidebar-generator.php';
        require_once THEME_INCLUDES . "/pagination.php";
        require_once THEME_INCLUDES . "/image-cropping.php";
        require_once THEME_INCLUDES . "/tgm-plugin-activation/request-plugins.php";
        
        require_once THEME_INCLUDES . "/love-this.php";
        require_once THEME_PHP . "/dynamic-styles.php";
        //require_once THEME_PHP . "/theme-skin.php";
        
        require_once THEME_DIR . "/wpml-fix/mk-wpml.php";
        require_once THEME_POST_TYPES . '/portfolio.php';
        
        /*
        Theme elements hooks
        */
        require_once locate_template("framework/actions/header.php");
        require_once locate_template("framework/actions/posts.php");
        require_once locate_template("framework/actions/general.php");
        
        /* Portfolio styles */
        require_once locate_template("portfolio-styles/masonry.php");
        require_once locate_template("portfolio-styles/grid.php");
        require_once locate_template("portfolio-styles/flip.php");
        require_once locate_template("portfolio-styles/scroller.php");
        require_once locate_template("portfolio-styles/standard.php");
        require_once locate_template("portfolio-styles/ajax-portfolio.php");
        
        /* Blog Styles @since V1.0 */
        require_once locate_template("blog-styles/classic.php");
        require_once locate_template("blog-styles/masonry.php");
        
        /* Blog Styles @since V1.4 */
        require_once locate_template("blog-styles/list.php");
        require_once locate_template("blog-styles/magazine.php");
        require_once locate_template("blog-styles/thumb.php");
        require_once locate_template("blog-styles/tile.php");
        require_once locate_template("blog-styles/scroller.php");
        require_once locate_template("blog-styles/slideshow.php");
        require_once locate_template("blog-styles/modern.php");

    }
    
    function language() {
        load_theme_textdomain('mk_framework', get_stylesheet_directory() . '/languages');
    }

    function add_metaboxes() {
        require_once THEME_PHP . '/metabox-generator.php';
        require_once THEME_METABOXES . '/metabox-layout.php';
        require_once THEME_METABOXES . '/metabox-posts.php';
        require_once THEME_METABOXES . '/metabox-portfolios.php';
        require_once THEME_METABOXES . '/metabox-pages.php';
        include_once THEME_METABOXES . '/metabox-skinning.php';
        require_once THEME_METABOXES . '/metabox-application.php';
        require_once THEME_METABOXES . '/metabox-product.php';
        require_once THEME_METABOXES . '/metabox-training.php';
        require_once THEME_METABOXES . '/metabox-recruit.php';
    }

    function admin() {
        if (is_admin()) {

            require_once THEME_PHP . '/admin.php';
            require_once THEME_INCLUDES . '/mega-menu.php';

            require_once (THEME_CONTROL_PANEL . "/logic/functions.php");
        }
    }


    function admin_menus() {

        add_menu_page(THEME_NAME, THEME_NAME, 'edit_posts', THEME_NAME, array(&$this,
            'theme_register'
        ) , 'dashicons-star-filled', 3);
        add_submenu_page(THEME_NAME, __('Register Product', 'mk_framework') , __('Register Product', 'mk_framework') , 'edit_theme_options', THEME_NAME, array(&$this,
            'theme_register'
        ));
        add_submenu_page(THEME_NAME, __('Support', 'mk_framework') , __('Support', 'mk_framework') , 'edit_posts', 'theme-support', array(&$this,
            'theme_support'
        ));
        add_submenu_page(THEME_NAME, __('Install Templates', 'mk_framework') , __('Install Templates', 'mk_framework') , 'edit_theme_options', 'theme-templates', array(&$this,
            'theme_templates'
        ));
        add_submenu_page(THEME_NAME, __('System Status', 'mk_framework') , __('System Status', 'mk_framework') , 'edit_theme_options', 'theme-status', array(&$this,
            'theme_status'
        ));
        add_submenu_page(THEME_NAME, __('Icon Library', 'mk_framework') , __('Icon Library', 'mk_framework') , 'edit_posts', 'icon-library', array(&$this,
            'icon_library'
        ));
    }

    function theme_options() {
        $page = include_once (THEME_ADMIN . '/theme-options/masterkey.php');
        new Mk_Options_Framework($page['options']);
    }
    function icon_library() {
        require_once THEME_PHP . '/icon-library.php';
    }

    function theme_status() {
        include_once (THEME_CONTROL_PANEL . '/logic/theme-status.php');
    }


    function theme_templates() {
        include_once (THEME_CONTROL_PANEL . '/logic/theme-templates.php');
    }

    function theme_support() {
        include_once (THEME_CONTROL_PANEL . '/logic/theme-support.php');
    }

    function theme_register() {
        include_once (THEME_CONTROL_PANEL . '/logic/theme-register.php');
    }

    function post_types() {
        require_once THEME_POST_TYPES . '/testimonials.php';
        require_once THEME_POST_TYPES . '/employee.php';
        require_once THEME_POST_TYPES . '/pricing.php';
        require_once THEME_POST_TYPES . '/clients.php';
        require_once THEME_POST_TYPES . '/edge-slider.php';
        require_once THEME_POST_TYPES . '/tab-slider.php';
        require_once THEME_POST_TYPES . '/animated-columns.php';
    }


}

/////////////////////////////////////////////////////

//去除 embeds
function disable_embeds_init() {
global $wp;
$wp->public_query_vars = array_diff( $wp->public_query_vars, array( 'embed', ) );
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
add_filter( 'embed_oembed_discover', '__return_false' );
remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );
add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' ); }
add_action( 'init', 'disable_embeds_init', 9999 );
function disable_embeds_tiny_mce_plugin( $plugins ) { return array_diff( $plugins, array( 'wpembed' ) ); }
function disable_embeds_rewrites( $rules ) { foreach ( $rules as $rule => $rewrite ) { if ( false !== strpos( $rewrite, 'embed=true' ) ) { unset( $rules[ $rule ] ); } }
return $rules; }
function disable_embeds_remove_rewrite_rules() { add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' ); flush_rewrite_rules(); }
register_activation_hook( __FILE__, 'disable_embeds_remove_rewrite_rules' );
function disable_embeds_flush_rewrite_rules() { remove_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' ); flush_rewrite_rules(); }
register_deactivation_hook( __FILE__, 'disable_embeds_flush_rewrite_rules' );

add_filter('rest_enabled', '__return_false');
add_filter('rest_jsonp_enabled', '__return_false');

//去除工具条
add_filter('show_admin_bar', '__return_false');

/////////////////////////////////////////////////////
///修改链接
add_filter('post_type_link', 'custom_single_custompost_link', 1, 3);
function custom_single_custompost_link( $link, $post = 0 ){
    $custom_posts = array(
        'design_tech',
        'product_news',
        'training',
        'industry_news',
    );
    $no_link_posts = array(
        'product',
        'customer',
    );
    foreach( $custom_posts as $k ){
        if ( $post->post_type == $k ){
            return home_url( $k. '/' . $post->ID .'.html' );
        }
    }
    foreach( $no_link_posts as $v ){
        if ( $post->post_type == $v ){
            return home_url( '/' );
        }
    }
    return $link;

}
///修改链接规则
add_action( 'init', 'custom_single_custom_rewrites_init' );
function custom_single_custom_rewrites_init($post){
    $types = array(
        'design_tech',
        'product_news',
        'training',
        'industry_news',
    );
    foreach( $types as $k ){
        add_rewrite_rule(

            $k . '/([0-9]+)?.html$',

            'index.php?post_type='. $k .'&p=$matches[1]',

            'top' );
    }
}

/////////////////////////////////////////////////////
///
/**
 * 文章模板 single.php 获取当前文章所属的分类名称
 * https://www.wpdaxue.com/get-post-category.html
 */
function get_case_category_id($post_ID){
    global $wpdb;
    $sql="SELECT `term_taxonomy_id` FROM $wpdb->term_relationships WHERE `object_id`='".$post_ID."';";
    $cat_id=$wpdb->get_results($sql);
    foreach($cat_id as $catId){
        $output=$catId->term_taxonomy_id;
    }
    $myCatId=intval($output);//这里就获得当前文章所属分类的分类ID
    $term = get_term( $myCatId, 'case_category' );//taxonomy_name为自己定义的或者默认的
    echo $term->name;//得到当前文章所属分类的分类名称
}
function get_trade_category_id($post_ID){
    global $wpdb;
    $sql="SELECT `term_taxonomy_id` FROM $wpdb->term_relationships WHERE `object_id`='".$post_ID."';";
    $cat_id=$wpdb->get_results($sql);
    foreach($cat_id as $catId){
        $output=$catId->term_taxonomy_id;
    }
    $myCatId=intval($output);//这里就获得当前文章所属分类的分类ID
    $term = get_term( $myCatId, 'trade_category' );//taxonomy_name为自己定义的或者默认的
    return $term->name;//得到当前文章所属分类的分类名称
}

//加载css到头部
function headCss(){

    $url = get_template_directory_uri();
    // 注册样式表
    $styles = array(
        'custom-common' => '/custom/css/common.min.css',
        'custom-header' => '/custom/css/header.css',
        'custom-footer' => '/custom/css/footer.min.css',
    );
    if ( !is_admin() ) { /** Load Scripts and Style on Website Only */
        foreach( $styles as $k => $v ){
            wp_register_style( $k, $v, false, null );
            wp_enqueue_style( $k);
        }
    }

}
add_action( 'init', 'headCss' );

//加载js到底部
function footerScript() {

    $url = get_template_directory_uri();
    // 注册js表
    $jss = array(
        'custom-zipto' => '/custom/js/zepto.min.js',
        'custom-common' => '/custom/js/common.js',
    );
    if ( !is_admin() ) {
        /** Load Scripts and Style on Website Only */
        foreach( $jss as $k => $v ){
            if($k == 'custom-zipto'){
                wp_register_script( $k, $v, false, null, false );
            } else {
                wp_register_script( $k, $v, false, null, true );
            }
            wp_enqueue_script( $k );
        }
    }

}
add_action( 'init', 'footerScript' );

//短码-二级菜单
add_shortcode('menu_bar', 'menu_bar');
function menu_bar ($atts) {
    extract(shortcode_atts(array( // 使用 extract 函数解析标签内的参数
        "menu" => 'about-menu',
    ), $atts));

    echo wp_nav_menu( array('menu' => $menu,) );
}

//短码-里程碑
add_shortcode('milepost_slider', 'milepost_slider');
function milepost_slider ($atts) {
    extract(shortcode_atts(array( // 使用 extract 函数解析标签内的参数
        "active" => 7,
    ), $atts));

    $args = array(
        'post_type' => 'milepost',
        'order' => 'asc',
        'showposts' => '-1',
    );
    $loop = new WP_Query( $args );

    echo '<ul id="milepost_line" class="milepost_line">';

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;

        echo '<li><div class="milepost_year">'.get_the_title().'</div><div class="milepost_bot"><span class="milepost_dot"></span></div></li>';

    endwhile;

    echo '<div class="clearboth"></div></ul>';
    echo '<div class="milepost_arrow"><span class="milepost_left_arrow"></span><span class="milepost_right_arrow"></span></div>';
    echo '<div class="clearboth"></div>';
    echo '<div class="milepost-swiper swiper-container">';
    echo '<div class="swiper-wrapper">';

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;

        echo '<div class="swiper-slide">
            <div class="milepost_box">
                <div class="milepost_title">'.get_the_title().'年</div>
                <div class="milepost_text">'.get_the_content().'</div>
            </div>
        </div>';

    endwhile;
    wp_reset_query();

    echo '</div>';
    echo '</div>
<!--[if !IE]><!--> 
<script src="/custom/js/swiper.min.js"></script>
<!--<![endif]-->
<!--[if IE]>
<script src="/custom/js/idangerous.swiper.min.js"></script>
<![endif]-->
<script>
$(document).ready(function(){
    var milepostActive = '.$active.';
    var milepostSwiper = new Swiper(\'.milepost-swiper\',{
        loop: false,
        speed: 1000,
        autoplay: false,
        allowTouchMove: false,
        initialSlide: milepostActive,
          on:{
            slideNextTransitionEnd: function(){
              milepostActive = this.activeIndex
              $("#milepost_line li").removeClass("milepost_active").eq(milepostActive).addClass("milepost_active");
            },
            slidePrevTransitionEnd: function(){
              milepostActive = this.activeIndex
              $("#milepost_line li").removeClass("milepost_active").eq(milepostActive).addClass("milepost_active");
            },
          },
        navigation: {
          nextEl: \'.milepost_right_arrow\',
          prevEl: \'.milepost_left_arrow\',
        },

    });
    
    $("#milepost_line li").eq(milepostActive).addClass("milepost_active");
    $("#milepost_line li").bind("click",function(){
        if(milepostActive != $(this).index()){
            milepostSwiper.slideTo($(this).index(), 1000, false);
            milepostActive = $(this).index()
            $("#milepost_line li").removeClass("milepost_active").eq(milepostActive).addClass("milepost_active");
        }
    })
    
    

})
</script>
';

}

//短码-领域应用
add_shortcode('application_list', 'application_list');
function application_list() {
    $args = array(
        'post_type' => 'application',
        'order' => 'asc',
        'showposts' => '-1',
    );
    $loop = new WP_Query( $args );

    echo '<ul class="app_list">';

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;

        $title_en = get_post_meta( $post->ID, '_app_en', true );
        $app = get_post_meta( $post->ID, '_app_application', true );
        $pro = get_post_meta( $post->ID, '_app_product', true );
        $full_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true );

        echo '<li><div class="app_box"><a href="'.get_the_permalink().'" class="app_title">'.get_the_title().'</a><div class="app_en">'.$title_en.'</div><div class="clearboth"></div>';
        if(has_post_thumbnail()){
            echo '<a href="'.get_the_permalink().'" class="app_img"><img src="'.$full_image_src[0].'"/></a>';
        }
        echo '<div class="cont_box"><div class="cont_title">Product產品:</div><div class="cont_text">'.$app.'</div></div>';
        echo '<div class="cont_box"><div class="cont_title">Application應用:</div><div class="cont_text">'.$pro.'</div></div></div></li>';

    endwhile;
    wp_reset_query();
}

//短码-焦点文章轮播
add_shortcode('focus_slider', 'focus_slider');
function focus_slider($atts) {
    extract(shortcode_atts(array( // 使用 extract 函数解析标签内的参数
        "post_type" => "design_tech",
        "cat" => "focus_tech_post",
        "width" => 1600,
        "height" => 460,
    ), $atts));

    $args = array(
        'post_type' => $post_type,
        'order' => 'desc',
        'showposts' => '5',
        'post_status' => array(
            'publish',                      // - a published post or page.
        ),
    );

    if($post_type == 'post'){
        $args["category_name"] = $cat;
    } else {
        $args["tax_query"] = array(
            array(
                'taxonomy' => $post_type.'_category',
                'field' => 'slug',
                'terms' => $cat
            )
        );
    }

    $loop = new WP_Query( $args );

    echo '<div class="focus-swiper swiper-container"><div class="swiper-wrapper">';

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;

        $image_width = $width;
        $image_height = $height;
        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
        $image_src = bfi_thumb($image_src_array[0], array(
            'width' => $image_width,
            'height' => $image_height,
            'crop' => true
        ));
        $image = '';
        if(has_post_thumbnail()) {
            $image = mk_thumbnail_image_gen($image_src, $image_width, $image_height);
        } else {
            $image = "/wp-content/uploads/2019/11/res_focus.jpg";
        }

        echo '<div class="swiper-slide">
            <a class="focus_box" href="'.get_the_permalink().'">
                <div class="focus_img"><img src="'.$image.'"/></div>
                <div class="focus_title">'.get_the_title().'</div>
            </a>
        </div>';

    endwhile;
    wp_reset_query();

    echo '</div><div class="focus-pagination"></div></div>
<!--[if !IE]><!--> 
<script src="/custom/js/swiper.min.js"></script>
<!--<![endif]-->
<!--[if IE]>
<script src="/custom/js/idangerous.swiper.min.js"></script>
<![endif]-->
<script type="text/javascript">
$(document).ready(function(){
    var focusSwiper = new Swiper(\'.focus-swiper\',{
        // watchOverflow: true,//因为仅有1个slide，swiper无效
        loop: true,
        speed: 1000,
        pagination: {
            el: \'.focus-pagination\',
        },
        autoplay: {
            delay: 7000,
        },
    });
})
</script>
';

}

//短码-技术文章 分页
add_shortcode('tech_posts', 'tech_posts');
function tech_posts() {

    $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);

    $args = array(
        'post_type' => "design_tech",
        'order' => 'desc',
        'post_status' => array(
            'publish',                      // - a published post or page.
        ),
        'posts_per_page' => '6',
        'paged' => $paged,
    );
    $loop = new WP_Query( $args );

    echo '<div class="blog_list">';

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;

        $image_width = 228;
        $image_height = 260;
        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
        $image_src = bfi_thumb($image_src_array[0], array(
            'width' => $image_width,
            'height' => $image_height,
            'crop' => true
        ));
        $image = '';
        if(has_post_thumbnail()) {
            $image = mk_thumbnail_image_gen($image_src, $image_width, $image_height);
        } else {
            $image = "/wp-content/uploads/2019/11/res_img.jpg";
        }

        echo '<div class="blog_item"><div class="blog_box">
            <a class="blog_img" href="'.get_the_permalink().'">
                <img src="'.$image.'"/>
            </a>
            <div class="blog_right">
                <div class="blog_title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></div>
                <div class="blog_excerpt">'.get_the_excerpt().'</div>
                <div class="blog_caption">
                    <span class="blog_date">'.get_the_time("Y-m-d").'</span>
                    <span class="blog_view">';
                    the_views();
                    echo '</span>
                </div>
            </div>
            <div class="clearboth"></div>
        </div></div>';

    endwhile;

    echo '<div class="clearboth"></div></div>';
    echo mk_theme_blog_pagenavi('上一页', '下一页', $loop, $paged);

    wp_reset_query();
}

//短码-产品表格
add_shortcode('productTable', 'productTable');
function productTable(){
    require_once THEME_DIR . '/table.php';
}

//短码-培训活动 分页
add_shortcode('training_posts', 'training_posts');
function training_posts() {

    $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);

    $args = array(
        'post_type' => "training",
        'order' => 'desc',
        'post_status' => array(
            'publish',                      // - a published post or page.
        ),
        'posts_per_page' => '4',
        'paged' => $paged,
    );
    $loop = new WP_Query( $args );

    echo '<div class="blog_list">';

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;

        $image_width = 380;
        $image_height = 260;
        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
        $image_src = bfi_thumb($image_src_array[0], array(
            'width' => $image_width,
            'height' => $image_height,
            'crop' => true
        ));
        $image = '';
        $time = get_post_meta( $post->ID, '_train_time', true );
        $addr = get_post_meta( $post->ID, '_train_addr', true );
        $link = get_post_meta( $post->ID, '_train_link', true );

        if(has_post_thumbnail()) {
            $image = mk_thumbnail_image_gen($image_src, $image_width, $image_height);
        } else {
            $image = "/wp-content/uploads/2019/11/res_img3.jpg";
        }

        echo '<div class="blog_item"><div class="blog_box">
            <div class="blog_img" >
                <img src="'.$image.'"/>
            </div>
            <div class="blog_right">
                <a class="blog_title" href="'.get_the_permalink().'">'.get_the_title().'</a>
                <div class="blog_excerpt">'.get_the_excerpt().'</div>
                <div class="blog_date">时间：'.$time.'</div>
                <div class="blog_addr">地点：'.$addr.'</div>
            </div>
            <div class="clearboth"></div>
        </div></div>';

    endwhile;

    echo '<div class="clearboth"></div></div>';
    echo mk_theme_blog_pagenavi('上一页', '下一页', $loop, $paged);

    wp_reset_query();
}

//短码-新闻 分页
add_shortcode('news_posts', 'news_posts');
function news_posts() {

    $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);

    $args = array(
        'post_type' => "post",
        'order' => 'desc',
        'post_status' => array(
            'publish',                      // - a published post or page.
        ),
        'posts_per_page' => '6',
        'paged' => $paged,
    );
    $loop = new WP_Query( $args );

    echo '<div class="blog_list">';

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;

        $image_width = 380;
        $image_height = 260;
        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
        $image_src = bfi_thumb($image_src_array[0], array(
            'width' => $image_width,
            'height' => $image_height,
            'crop' => true
        ));
        $image = '';
        if(has_post_thumbnail()) {
            $image = mk_thumbnail_image_gen($image_src, $image_width, $image_height);
        } else {
            $image = "/wp-content/uploads/2019/11/news_img.jpg";
        }

        echo '<div class="blog_item"><div class="blog_box">
            <a class="blog_img" href="'.get_the_permalink().'">
                <img src="'.$image.'"/>
            </a>
            <div class="blog_right">
                <div class="blog_title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></div>
                <div class="blog_excerpt">'.get_the_excerpt().'</div>
                <div class="blog_caption">
                    <span class="blog_date">'.get_the_time("Y-m-d").'</span>
                    <span class="blog_view">';
        the_views();
        echo '</span>
                </div>
            </div>
            <div class="clearboth"></div>
        </div></div>';

    endwhile;

    echo '<div class="clearboth"></div></div>';
    echo mk_theme_blog_pagenavi('上一页', '下一页', $loop, $paged);

    wp_reset_query();
}

//短码-行业新闻
add_shortcode('industry_news_list', 'industry_news_list');
function industry_news_list() {

    $args = array(
        'post_type' => "industry_news",
        'order' => 'desc',
        'post_status' => array(
            'publish',                      // - a published post or page.
        ),
        'showposts' => '8',
    );
    $loop = new WP_Query( $args );
    echo '<div class="right_ind">
<div class="ind_title_row">
<div class="right_title">行业新聞</div>
<div class="right_title_en">Industry news</div>
</div>';
    echo '<ul>';

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;

        echo '<li><a href="'.get_permalink().'" title="'.get_the_title().'">
                <div class="ind_time">'.get_the_time("Y/m/d").'</div>
                <div class="ind_title"><span>'.get_the_title().'</span></div>
        </a></li>';

    endwhile;

    echo '</ul></div>';

    wp_reset_query();
}

//短码-最新产品
add_shortcode('product_news_list', 'product_news_list');
function product_news_list() {

    $args = array(
        'post_type' => "product_news",
        'order' => 'desc',
        'post_status' => array(
            'publish',                      // - a published post or page.
        ),
        'showposts' => '5',
    );
    $loop = new WP_Query( $args );
    echo '<div class="right_pro">
<div class="pro_title_row">
<div class="right_title">最新产品</div>
<div class="right_title_en">Latest products</div>
</div>';
    echo '<ul>';

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;

        $image_width = 140;
        $image_height = 75;
        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
        $image_src = bfi_thumb($image_src_array[0], array(
            'width' => $image_width,
            'height' => $image_height,
            'crop' => true
        ));
        $image = '';
        if(has_post_thumbnail()) {
            $image = mk_thumbnail_image_gen($image_src, $image_width, $image_height);
        } else {
            $image = "/wp-content/uploads/2019/11/SOD-882.png";
        }


        echo '<li>
                <div class="pro_img"><a href="'.get_permalink().'" title="'.get_the_title().'"><img src="'.$image.'"/></a></div>
                <div class="pro_title"><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></div>
                <div class="pro_time">'.get_the_time("Y/m/d").'</div>
        </li>';

    endwhile;

    echo '</ul></div>';

    wp_reset_query();
}

//短码-客户
add_shortcode('client_posts', 'client_posts');
function client_posts() {

    $cat_args = array(
        'type' => 'customer',
        'child_of' => 0,
        'parent' => '',
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => 1,
        'hierarchical' => 1,
        'exclude' => '',
        'include' => '',
        'number' => '',
        'taxonomy' => 'customer_category',
        'pad_counts' => false
    );

    $categories = get_categories( $cat_args );

    foreach ($categories as $c) {

        echo '<div class="cat_title">' . $c->name . '</div>';

        $args = array(
            'post_type' => "customer",
            'order' => 'asc',
            'post_status' => array(
                'publish',                      // - a published post or page.
            ),
            'tax_query' => array(
                array(
                    'taxonomy' => 'customer_category',
                    'field' => 'slug',
                    'terms' => $c->slug
                )
            )
        );
        $loop = new WP_Query( $args );

        echo '<ul>';

        while ( $loop->have_posts() ) : $loop->the_post();
            global $post;

            $full_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);

            echo '<li><div class="c_box">
                <div class="c_logo"><img src="'. $full_image_src[0] .'"></div>
                <div class="c_text">'. get_the_content() .'</div>
        </div></li>';

        endwhile;
        wp_reset_query();

        echo '<div class="clearboth"></div></ul>';

    }


}


//ajax人才招聘
function recruit() {
    $args = array(
        'post_type' => 'recruit',
        'order' => 'desc',
        'post_status' => array(
            'publish',                      // - a published post or page.
        ),
    );

    if(!empty($s)) {
        $args['s'] = $s;
    }

    $loop = new WP_Query( $args );


    echo '{"data":[';
    $count = 0;

    while ( $loop->have_posts() ) : $loop->the_post();
        global $post;
        //职位图片
        $text1 = get_post_meta( $post->ID, '_enter_logo', true );
        //工作地点
        $text2 = get_post_meta( $post->ID, '_app_en', true );
        //学历
        $text3 = get_post_meta( $post->ID, '_app_xue', true );
        //发布日期
        $text4 = get_post_meta( $post->ID, '_app_time', true );
        //申请职位
        $text5 = get_post_meta( $post->ID, '_app_zhi', true );



        $count++;
        if($count == 1){
            echo '{';
        } else {
            echo ',{';
        }

        echo '"title":"'.get_the_title().'",';
        echo '"content":'.json_encode(get_the_content()).',';
        echo '"text1":"'.$text1.'",';
        echo '"text2":"'.$text2.'",';
        echo '"text3":"'.$text3.'",';
        echo '"text4":"'.$text4.'",';
        echo '"text5":"'.$text5.'"';
        echo '}';
    endwhile;
    wp_reset_query();
    echo ']}';
    wp_die();
}

add_action( 'wp_ajax_recruit', 'recruit' );
add_action( 'wp_ajax_nopriv_recruit', 'recruit' );