<?php
// Define
define("NAME_PROJECT","omotenashi");
// Bỏ kiểu nhập theo khối
add_filter('use_block_editor_for_post', '__return_false');

add_theme_support( 'post-thumbnails', array( 'post', 'page',"book") );
add_filter( 'term_description', 'do_shortcode' );
add_theme_support( 'menus' );
register_nav_menus(array('main-menu'     =>  'Main menu'  ));
register_sidebar( array(
    'name' => __( 'Sidebar', NAME_PROJECT ),
    'id' => 'main-sidebar',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',

) );

/**
 * Get asset uri function to view
 */
if ( ! function_exists( 'asset' ) ) {
    function asset($file, $cache = false)
    {
        $file = "/assets/{$file}";
        echo get_asset($file) . ($cache ? get_filemtime($file) : "");
    }
}

/**
 * Get asset uri function
 */
if ( ! function_exists( 'get_asset' ) ) {
    function get_asset($file)
    {
        return get_template_directory_uri() . "{$file}";
    }
}

/**
 * Get filemtime function: time the file was last modified
 */
if ( ! function_exists( 'get_filemtime' ) ) {
    function get_filemtime($file)
    {
        return "?".filemtime(dirname( __FILE__ ) . $file);
    }
}