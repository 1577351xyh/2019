<?php

//vc_map(array(
//    "name" => __("Pricing Table", "mk_framework"),
//    "base" => "mk_pricing_table",
//    'icon' => 'icon-mk-pricing-table vc_mk_element-icon',
//    'description' => __( 'Shows Pricing table Posts.', 'mk_framework' ),
//    "category" => __('Loops', 'mk_framework'),
//    "params" => array(
//
//        array(
//            "type" => "dropdown",
//            "heading" => __("Style", "mk_framework"),
//            "param_name" => "style",
//            "value" => array(
//                "Classic" => "classic",
//                "Modern" => "modern"
//            ),
//            "description" => __("", "mk_framework")
//        ),
//        array(
//            "type" => "dropdown",
//            "heading" => __("Skin", "mk_framework"),
//            "param_name" => "skin",
//            "value" => array(
//                "Light" => "light",
//                "Dark" => "dark"
//            ),
//            "description" => __("", "mk_framework")
//        ),
//        array(
//            "type" => "colorpicker",
//            "heading" => __("Pricing Background", "mk_framework"),
//            "param_name" => "modern_bg_color",
//            "value" => "",
//            "description" => __("", "mk_framework"),
//            "dependency" => array(
//                'element' => "style",
//                'value' => array(
//                    'modern'
//                )
//            ),
//        ),
//        array(
//            "type" => "textarea_html",
//            "holder" => "div",
//            "heading" => __("Offers", "mk_framework"),
//            "param_name" => "content",
//            "value" => "",
//            "description" => __("Please add your offers text. Note : List of offers must be an unordered list. If you dont need offers list, leave this textarea empty. The number of the list items should match the number of your pricing items list as well.", "mk_framework")
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("How Many Tables?", "mk_framework"),
//            "param_name" => "table_number",
//            "value" => "4",
//            "min" => "1",
//            "max" => "4",
//            "step" => "1",
//            "unit" => 'table',
//            "description" => __("How many pricing tables would you like to view?", "mk_framework")
//        ),
//        array(
//            "type" => "multiselect",
//            "heading" => __("Tables", "mk_framework"),
//            "param_name" => "tables",
//            "value" => '',
//            "options" => $pricing,
//            "description" => __("", "mk_framework")
//        ),
//
//        array(
//            "heading" => __("Order", 'mk_framework'),
//            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'mk_framework'),
//            "param_name" => "order",
//            "value" => array(
//                __("DESC (descending order)", 'mk_framework') => "DESC",
//                __("ASC (ascending order)", 'mk_framework') => "ASC"
//            ),
//            "type" => "dropdown"
//        ),
//        array(
//            "heading" => __("Orderby", 'mk_framework'),
//            "description" => __("Sort retrieved pricing items by parameter.", 'mk_framework'),
//            "param_name" => "orderby",
//            "value" => $mk_orderby,
//            "type" => "dropdown"
//        ),
//
//        array(
//            "type" => "textfield",
//            "heading" => __("Extra class name", "mk_framework"),
//            "param_name" => "el_class",
//            "value" => "",
//            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework")
//        )
//
//    )
//));
//
//vc_map(array(
//    "name" => __("Employees", "mk_framework"),
//    "base" => "mk_employees",
//    'icon' => 'icon-mk-employees vc_mk_element-icon',
//    "category" => __('Loops', 'mk_framework'),
//    'description' => __( 'Shows Employees posts in multiple styles.', 'mk_framework' ),
//    "params" => array(
//        array(
//            "type" => "dropdown",
//            "heading" => __("Style", "mk_framework"),
//            "param_name" => "style",
//            "width" => 300,
//            "value" => array(
//                __('Column Based (Rounded)', "mk_framework") => "column_rounded",
//                __('Column Based', "mk_framework") => "column",
//                __('grid', "mk_framework") => "grid"
//            ),
//            "description" => __("", "mk_framework")
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("Column", "mk_framework"),
//            "param_name" => "column",
//            "value" => "3",
//            "min" => "1",
//            "max" => "5",
//            "step" => "1",
//            "unit" => 'columns',
//            "dependency" => array(
//                'element' => "style",
//                'value' => array(
//                    'column_rounded',
//                    'column'
//                )
//            ),
//            "description" => __("Defines how many column to be in one row.", "mk_framework")
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("Image Dimension", "mk_framework"),
//            "param_name" => "dimension",
//            "value" => "250",
//            "min" => "100",
//            "max" => "600",
//            "step" => "1",
//            "unit" => 'px',
//            "dependency" => array(
//                'element' => "style",
//                'value' => array(
//                    'grid'
//                )
//            ),
//            "description" => __("This value wil be applied to employee image width & height. Be infomed social network icons will not be displayed in image size less than 200px.", "mk_framework")
//        ),
//        array(
//            "type" => "toggle",
//            "heading" => __("Scroller", "mk_framework"),
//            "param_name" => "scroll",
//            "value" => "true",
//            "dependency" => array(
//                'element' => "style",
//                'value' => array(
//                    'grid'
//                )
//            ),
//            "description" => __("If you enable this option grids will be horizontally scrolled.", "mk_framework")
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("Count", "mk_framework"),
//            "param_name" => "count",
//            "value" => "10",
//            "min" => "-1",
//            "max" => "50",
//            "step" => "1",
//            "unit" => 'employee',
//            "description" => __("How many Employees you would like to show? -1 will means whatever you have chosen in wordpress => reading => posts per page option.", "mk_framework")
//        ),
//        array(
//            "type" => "multiselect",
//            "heading" => __("Select specific Employees", "mk_framework"),
//            "param_name" => "employees",
//            "value" => '',
//            "options" => $employees,
//            "description" => __("", "mk_framework")
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("Offset", "mk_framework"),
//            "param_name" => "offset",
//            "value" => "0",
//            "min" => "0",
//            "max" => "50",
//            "step" => "1",
//            "unit" => 'posts',
//            "description" => __("Number of post to displace or pass over, it means based on your order of the loop, this number will define how many posts to pass over and start from the nth number of the offset.", "mk_framework")
//        ),
//        array(
//            "type" => "toggle",
//            "heading" => __("Description", "mk_framework"),
//            "param_name" => "description",
//            "value" => "true",
//            "description" => __("If you dont want to show Employees description disable this option.", "mk_framework")
//        ),
//
//        array(
//            "heading" => __("Order", 'mk_framework'),
//            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'mk_framework'),
//            "param_name" => "order",
//            "value" => array(
//                __("DESC (descending order)", 'mk_framework') => "DESC",
//                __("ASC (ascending order)", 'mk_framework') => "ASC"
//
//            ),
//            "type" => "dropdown"
//        ),
//        array(
//            "heading" => __("Orderby", 'mk_framework'),
//            "description" => __("Sort retrieved employee items by parameter.", 'mk_framework'),
//            "param_name" => "orderby",
//            "value" => $mk_orderby,
//            "type" => "dropdown"
//        ),
//        array(
//            "type" => "toggle",
//            "heading" => __("Employee Image Stretchability", "mk_framework"),
//            "param_name" => "full_width_image",
//            "value" => "false",
//            "description" => __("Enabling this option will set employee image cover the whole grid area.", "mk_framework")
//        ),
//        array(
//            "type" => "dropdown",
//            "heading" => __("Viewport Animation", "mk_framework"),
//            "param_name" => "animation",
//            "value" => $css_animations,
//            "description" => __("Viewport animation will be triggered when this element is being viewed when you scroll page down. you only need to choose the animation style from this option. please note that this only works in moderns. We have disabled this feature in touch devices to increase browsing speed.", "mk_framework")
//        ),
//        array(
//            "type" => "textfield",
//            "heading" => __("Extra class name", "mk_framework"),
//            "param_name" => "el_class",
//            "value" => "",
//            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework")
//        )
//
//    )
//));
//
//
//vc_map(array(
//    "name" => __("Clients", "mk_framework"),
//    "base" => "mk_clients",
//    'icon' => 'icon-mk-clients vc_mk_element-icon',
//    "category" => __('Loops', 'mk_framework'),
//    'description' => __( 'Shows Clients posts in multiple styles.', 'mk_framework' ),
//    "params" => array(
//
//        array(
//            "heading" => __("Style", 'mk_framework'),
//            "description" => __("Choose clients loop style", 'mk_framework'),
//            "param_name" => "style",
//            "value" => array(
//                __("Column", 'mk_framework') => "column",
//                __("Grid", 'mk_framework') => "grid"
//            ),
//            "type" => "dropdown"
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("How many Columns?", "mk_framework"),
//            "param_name" => "column",
//            "value" => "3",
//            "min" => "1",
//            "max" => "6",
//            "step" => "1",
//            "unit" => 'columns',
//            "description" => __("This option defines how many columns will be set in one row. This option only works for column style", "mk_framework"),
//            "dependency" => array(
//                'element' => "style",
//                'value' => array(
//                    'column'
//                )
//            )
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("Client Item height", "mk_framework"),
//            "param_name" => "item_height",
//            "value" => "180",
//            "min" => "100",
//            "max" => "500",
//            "step" => "1",
//            "unit" => 'px',
//            "description" => __("Defines the client item height. please note that this option only works for column style.", "mk_framework"),
//            "dependency" => array(
//                'element' => "style",
//                'value' => array(
//                    'column'
//                )
//            )
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("Count", "mk_framework"),
//            "param_name" => "count",
//            "value" => "10",
//            "min" => "-1",
//            "max" => "50",
//            "step" => "1",
//            "unit" => 'clients',
//            "description" => __("How many Clients you would like to show? -1 will means whatever you have chosen in wordpress => reading => posts per page option.", "mk_framework")
//        ),
//        array(
//            "heading" => __("Scroller", 'mk_framework'),
//            "description" => __("If you enable this option grids will be horizontally scroller and you can swipe through items.", 'mk_framework'),
//            "param_name" => "scroll",
//            "value" => array(
//                __("Enable", 'mk_framework') => "true",
//                __("Disable", 'mk_framework') => "false"
//            ),
//            "type" => "dropdown",
//            "dependency" => array(
//                'element' => "style",
//                'value' => array(
//                    'grid'
//                )
//            )
//        ),
//        array(
//            "type" => "multiselect",
//            "heading" => __("Select specific Clients", "mk_framework"),
//            "param_name" => "clients",
//            "value" => '',
//            "options" => $clients,
//            "description" => __("", "mk_framework")
//        ),
//
//        array(
//            "heading" => __("Order", 'mk_framework'),
//            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'mk_framework'),
//            "param_name" => "order",
//            "value" => array(
//                __("DESC (descending order)", 'mk_framework') => "DESC",
//                __("ASC (ascending order)", 'mk_framework') => "ASC"
//            ),
//            "type" => "dropdown"
//        ),
//        array(
//            "heading" => __("Orderby", 'mk_framework'),
//            "description" => __("Sort retrieved client items by parameter.", 'mk_framework'),
//            "param_name" => "orderby",
//            "value" => $mk_orderby,
//            "type" => "dropdown"
//        ),
//        array(
//            "type" => "colorpicker",
//            "heading" => __("Box Background Color", "mk_framework"),
//            "param_name" => "bg_color",
//            "value" => "",
//            "description" => __("", "mk_framework")
//        ),
//        array(
//            "type" => "colorpicker",
//            "heading" => __("Box Border Color", "mk_framework"),
//            "param_name" => "border_color",
//            "value" => "",
//            "description" => __("Please note that this option only works for Column style as well as grid style (when scroller is enabled).", "mk_framework")
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("Box Border Width", "mk_framework"),
//            "param_name" => "border_width",
//            "value" => "2",
//            "min" => "0",
//            "max" => "5",
//            "step" => "1",
//            "unit" => 'px',
//            "description" => __("", "mk_framework")
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("Logo Box Dimension", "mk_framework"),
//            "param_name" => "dimension",
//            "value" => "180",
//            "min" => "50",
//            "max" => "600",
//            "step" => "1",
//            "unit" => 'px',
//            "description" => __("This value will be applied to logo box width & height.", "mk_framework"),
//            "dependency" => array(
//                'element' => "style",
//                'value' => array(
//                    'grid'
//                )
//            )
//        ),
//        array(
//            "type" => "toggle",
//            "heading" => __("Fit to Background", "mk_framework"),
//            "description" => __("Scale the background image to be as large as possible so that the background area is completely covered by the background image. Some parts of the background image may not be in view within the background positioning area", "mk_framework"),
//            "param_name" => "cover",
//            "value" => "false"
//        ),
//        array(
//            "type" => "toggle",
//            "heading" => __("Hover State Company Details.", "mk_framework"),
//            "param_name" => "hover_state",
//            "value" => "true"
//        ),
//
//        array(
//            "type" => "dropdown",
//            "heading" => __("Target", "mk_framework"),
//            "param_name" => "target",
//            "width" => 200,
//            "value" => $target_arr,
//            "description" => __("Target for the links.", "mk_framework")
//        ),
//        array(
//            "type" => "textfield",
//            "heading" => __("Extra class name", "mk_framework"),
//            "param_name" => "el_class",
//            "value" => "",
//            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework")
//        )
//
//    )
//));


vc_map(array(
    "name" => __("Blog", "mk_framework"),
    "base" => "mk_blog",
     'icon' => 'icon-mk-blog vc_mk_element-icon',
    "category" => __('Loops', 'mk_framework'),
    'description' => __( 'Blog loops are here.', 'mk_framework' ),
    "params" => array(

        array(
            "heading" => __("Style", 'mk_framework'),
            "description" => __("please select which blog loop style you would like to use.", 'mk_framework'),
            "param_name" => "style",
            "value" => array(
                __("Classic", 'mk_framework') => "classic",
                __("List", 'mk_framework') => "list",
                __("Magazine", 'mk_framework') => "magazine",
//                __("Slideshow", 'mk_framework') => "slideshow",
            ),
            "type" => "dropdown"
        ),

        array(
            "type" => "range",
            "heading" => __("How many Posts in a page?", "mk_framework"),
            "param_name" => "count",
            "value" => "10",
            "min" => "-1",
            "max" => "50",
            "step" => "1",
            "unit" => 'posts',
            "description" => __("How many Posts you would like to show? (-1 means unlimited, please note that unlimited will be overrided the limit you defined at : Wordpress Sidebar > Settings > Reading > Blog pages show at most.)", "mk_framework"),
        ),

        array(
            "type" => "multiselect",
            "heading" => __("Select specific Categories", "mk_framework"),
            "param_name" => "cat",
            "options" => $categories,
            "value" => '',
            "description" => __("", "mk_framework"),
        ),

        array(
            "type" => "multiselect",
            "heading" => __("Select specific Posts", "mk_framework"),
            "param_name" => "posts",
            "options" => $posts,
            "value" => '',
            "description" => __("", "mk_framework"),
        ),

        array(
            "type" => "toggle",
            "heading" => __("Post Meta", "mk_framework"),
            "param_name" => "disable_meta",
            "value" => "true",
            "description" => __("If you dont want to show post meta (author and categories) disable this option.", "mk_framework"),
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'classic',
                )
            )
        ),

        array(
            "type" => "dropdown",
            "heading" => __("Content Type (Classic Style Only)", 'mk_framework'),
            "description" => __("You can show blog full content in classic style loop.", 'mk_framework'),
            "param_name" => "classic_excerpt",
            "value" => array(
                __("Summry (Excerpt)", 'mk_framework') => "excerpt",
                __("Full content", 'mk_framework') => "content"
            ),
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'classic'
                )
            ),
        ),

        array(
            "heading" => __("Order", 'mk_framework'),
            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'mk_framework'),
            "param_name" => "order",
            "value" => array(
                __("DESC (descending order)", 'mk_framework') => "DESC",
                __("ASC (ascending order)", 'mk_framework') => "ASC"
            ),
            "type" => "dropdown"
        ),

        array(
            "type" => "textfield",
            "heading" => __("新增 class", "mk_framework"),
            "param_name" => "el_class",
            "description" => __("填写 class 类名，以空格分隔", "mk_framework")
        )

    )
));


//vc_map(array(
//    "name" => __("Blog Teaser", "mk_framework"),
//    "base" => "mk_blog_teaser",
//    'icon' => 'icon-mk-blog vc_mk_element-icon',
//    "category" => __('Loops', 'mk_framework'),
//    'description' => __( 'Blog teaser style loops are here.', 'mk_framework' ),
//    "params" => array(
//
//        array(
//            "type" => "range",
//            "heading" => __("Images Height", "mk_framework"),
//            "param_name" => "image_height",
//            "value" => "350",
//            "min" => "100",
//            "max" => "1000",
//            "step" => "1",
//            "unit" => 'px'
//        ),
//
//        array(
//            "type" => "multiselect",
//            "heading" => __("Select specific Categories to Appear in slideshow", "mk_framework"),
//            "param_name" => "slideshow_cat",
//            "options" => $categories,
//            "value" => '',
//            "description" => __("", "mk_framework"),
//        ),
//
//         array(
//            "type" => "multiselect",
//            "heading" => __("Select specific Categories to appear as Side Thumbnails", "mk_framework"),
//            "param_name" => "side_thumb_cat",
//            "options" => $categories,
//            "value" => '',
//            "description" => __("", "mk_framework"),
//        ),
//
//        array(
//            "heading" => __("Order", 'mk_framework'),
//            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'mk_framework'),
//            "param_name" => "order",
//            "value" => array(
//                __("DESC (descending order)", 'mk_framework') => "DESC",
//                __("ASC (ascending order)", 'mk_framework') => "ASC"
//            ),
//            "type" => "dropdown"
//        ),
//        array(
//            "heading" => __("Orderby", 'mk_framework'),
//            "description" => __("Sort retrieved Blog items by parameter.", 'mk_framework'),
//            "param_name" => "orderby",
//            "value" => $mk_orderby,
//            "type" => "dropdown"
//        ),
//        array(
//            "type" => "textfield",
//            "heading" => __("Extra class name", "mk_framework"),
//            "param_name" => "el_class",
//            "value" => "",
//            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework")
//        )
//
//    )
//));




vc_map(array(
    "name" => __("Portfolio", "mk_framework"),
    "base" => "mk_portfolio",
    'icon' => 'icon-mk-portfolio vc_mk_element-icon',
    "category" => __('Loops', 'mk_framework'),
    'description' => __( 'Portfolio loops are here.', 'mk_framework' ),
    "params" => array(

        array(
            "type" => "range",
            "heading" => __("How many Posts in a page?", "mk_framework"),
            "param_name" => "count",
            "value" => "10",
            "min" => "-1",
            "max" => "50",
            "step" => "1",
            "unit" => 'posts',
            "description" => __("How many Posts you would like to show? -1 will means whatever you have chosen in wordpress => reading => posts per page option.", "mk_framework")
        ),

        array(
            "type" => "toggle",
            "heading" => __("Sortable?", "mk_framework"),
            "param_name" => "sortable",
            "value" => "true",
            "description" => __("If you dont want sortable filter navigation disable this option.", "mk_framework"),
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'grid',
                    'masonry',
                    'standard',
                    'flip'
                )
            )
        ),
//
//        array(
//            "type" => "range",
//            "heading" => __("Offset", "mk_framework"),
//            "param_name" => "offset",
//            "value" => "0",
//            "min" => "0",
//            "max" => "50",
//            "step" => "1",
//            "unit" => 'posts',
//            "description" => __("Number of post to displace or pass over, it means based on your order of the loop, this number will define how many posts to pass over and start from the nth number of the offset.", "mk_framework")
//        ),


        array(
            "type" => "multiselect",
            "heading" => __("Select specific Posts", "mk_framework"),
            "param_name" => "posts",
            "options" => $portfolio_posts,
            "value" => '',
            "description" => __("", "mk_framework")
        ),

        array(
            "type" => "textfield",
            "heading" => __("Select Specific Categories.", "mk_framework"),
            "param_name" => "categories",
            "value" => '',
            "description" => __("You will need to go to Wordpress Dashboard => Portfolios => Portfolio Categories. In the right hand find Slug column. you will need to add portfolio category slugs in this option. add comma to separate them.", "mk_framework")
        ),



        array(
            "type" => "toggle",
            "heading" => __("Pagination?", "mk_framework"),
            "param_name" => "pagination",
            "value" => "true",
            "description" => __("If you dont want to have pagination for this loop disable this option.", "mk_framework"),
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'grid',
                    'masonry',
                    'standard',
                    'flip'
                )
            )
        ),

        array(
            "heading" => __("Pagination Style", 'mk_framework'),
            "description" => __("please select which pagination style you would like to use on this loop.", 'mk_framework'),
            "param_name" => "pagination_style",
            "value" => array(
                __("Classic Pagination Navigation", 'mk_framework') => "1",
                __("Load more button", 'mk_framework') => "2",
            ),
            "type" => "dropdown",
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'grid',
                    'masonry',
                    'standard',
                    'flip'
                )
            )
        ),

        array(
            "heading" => __("Orderby", 'mk_framework'),
            "description" => __("Sort retrieved Portfolio items by parameter.", 'mk_framework'),
            "param_name" => "orderby",
            "value" => $mk_orderby,
            "type" => "dropdown"
        ),

        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "mk_framework"),
            "param_name" => "el_class",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework")
        ),

    )
));
//if(function_exists( 'is_woocommerce' )) {
//    $categories = get_terms( 'product_cat', array(
//                    'orderby'    => 'count',
//                    'hide_empty' => 0,
//                 ) );
//    $product_cats = array();
//    if(is_array($categories)){
//        foreach($categories as $cats){
//            $product_cats[$cats->slug] = $cats->slug;
//        }
//    }
//vc_map(array(
//    "name" => __("Product Loops", "mk_framework"),
//    "base" => "mk_products",
//    "icon" => 'icon-mk-blog vc_mk_element-icon',
//    "category" => __('Loops', 'mk_framework'),
//    'description' => __( 'Product loops are here.', 'mk_framework' ),
//    "params" => array(
//
//        array(
//            "heading" => __("Style", 'mk_framework'),
//            "description" => __("please select which woocommerce loop style you would like to use.", 'mk_framework'),
//            "param_name" => "style",
//            "value" => array(
//                __("Classic", 'mk_framework') => "classic",
//                __("Modern", 'mk_framework') => "modern",
//            ),
//            "type" => "dropdown"
//        ),
//
//        array(
//            "heading" => __("Display", 'mk_framework'),
//            "description" => __("", 'mk_framework'),
//            "param_name" => "display",
//            "value" => array(
//                __("Recent Products", 'mk_framework') => "recent",
//                __("Featured Products", 'mk_framework') => "featured",
//                __("Top Rated Products", 'mk_framework') => "top_rated",
//                __("Product Category", 'mk_framework') => "product_category",
//                __("Products on Sale", 'mk_framework') => "products_on_sale",
//                __("Best Sellings Products", 'mk_framework') => "best_sellings"
//            ),
//            "type" => "dropdown"
//        ),
//
//        array(
//            "type" => "multiselect",
//            "heading" => __("Select specific Categories", "mk_framework"),
//            "param_name" => "category",
//            "options" => $product_cats,
//            "value" => '',
//            "description" => __("", "mk_framework"),
//            "dependency" => array(
//                'element' => "display",
//                'value' => array(
//                    'product_category',
//                )
//            )
//        ),
//
//        array(
//            "heading" => __("Orderby", 'mk_framework'),
//            "description" => __("Sort retrieved Blog items by parameter.", 'mk_framework'),
//            "param_name" => "orderby",
//            "value" => $mk_product_orderby,
//            "type" => "dropdown"
//        ),
//        array(
//            "heading" => __("Order", 'mk_framework'),
//            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'mk_framework'),
//            "param_name" => "order",
//            "value" => array(
//                __("DESC (descending order)", 'mk_framework') => "DESC",
//                __("ASC (ascending order)", 'mk_framework') => "ASC"
//            ),
//            "type" => "dropdown"
//        ),
//
//        array(
//            "type" => "range",
//            "heading" => __("How many Columns?", "mk_framework"),
//            "param_name" => "column",
//            "value" => "3",
//            "min" => "1",
//            "max" => "4",
//            "step" => "1",
//            "unit" => 'columns',
//            "description" => __("This option defines how many columns will be set in one row.", "mk_framework")
//        ),
//        array(
//            "type" => "range",
//            "heading" => __("How many Product?", "mk_framework"),
//            "param_name" => "product_per_page",
//            "value" => "12",
//            "min" => "4",
//            "max" => "30",
//            "step" => "1",
//            "unit" => 'product',
//            "description" => __("This option defines how many producr will be set in a page.", "mk_framework")
//        ),
//        array(
//            "type" => "toggle",
//            "heading" => __("Pagination", "mk_framework"),
//            "description" => __("", "mk_framework"),
//            "param_name" => "pagination",
//            "value" => "true"
//        ),
//        array(
//            "type" => "textfield",
//            "heading" => __("Extra class name", "mk_framework"),
//            "param_name" => "el_class",
//            "value" => "",
//            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework")
//        )
//    )
//));
//}
//
//vc_map(array(
//    "name" => __("Product Categories Loops", "mk_framework"),
//    "base" => "mk_product_categories",
//    "icon" => 'icon-mk-blog vc_mk_element-icon',
//    "category" => __('Loops', 'mk_framework'),
//    'description' => __( 'Product categories loops are here.', 'mk_framework' ),
//    "params" => array(
//
//        array(
//            "type" => "range",
//            "heading" => __("Number of Product?", "mk_framework"),
//            "param_name" => "number_per_page",
//            "value" => "12",
//            "min" => "1",
//            "max" => "30",
//            "step" => "1",
//            "unit" => 'product',
//            "description" => __("How many product would you like to view?", "mk_framework")
//        ),
//
//        array(
//            "type" => "range",
//            "heading" => __("Number of Product on Row?", "mk_framework"),
//            "param_name" => "columns",
//            "value" => "4",
//            "min" => "1",
//            "max" => "4",
//            "step" => "1",
//            "unit" => 'product',
//            "description" => __("How many product would you like to one row?", "mk_framework")
//        ),
//
//        array(
//            "heading" => __("Orderby", 'mk_framework'),
//            "description" => __("Sort retrieved pricing items by parameter.", 'mk_framework'),
//            "param_name" => "orderby",
//            "value" => $mk_product_categories_orderby,
//            "type" => "dropdown"
//        ),
//
//        array(
//            "heading" => __("Order", 'mk_framework'),
//            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'mk_framework'),
//            "param_name" => "order",
//            "value" => array(
//                __("DESC (descending order)", 'mk_framework') => "DESC",
//                __("ASC (ascending order)", 'mk_framework') => "ASC"
//            ),
//            "type" => "dropdown"
//        ),
//    )
//));
