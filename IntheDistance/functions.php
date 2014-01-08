<?php
/** Tell WordPress to run inthedistance_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'inthedistance_setup' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override inthedistance_setup() in a child theme, add your own inthedistance_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails, menus, automatic feed links and editor style.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_editor_style() To style the visual editor.
 *
 * @since IntheDistance 0.1
 */

function inthedistance_setup() {
	
	//ContentWidth
	if ( ! isset( $content_width ) ) $content_width = 900;
	
	//Settings
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'editor-style' );
	
	register_nav_menu( 'primary', 'Primary Menu' );
	
	add_editor_style();
}
?>
<?php

//Include Comment Function
require_once ( get_template_directory() . '/functions/comment_functions.php' );
//Include SideBar Function
require_once ( get_template_directory() . '/functions/sidebar_functions.php' );
//Include Theme Option
require_once ( get_template_directory() . '/functions/options-functions.php' );
require_once ( get_template_directory() . '/options.php' );

?>
<?php 
/**
 * Sets up theme styles and scripts.
 *
 */
function inthedistance_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri()."/css/normalize.css");
	wp_enqueue_style( 'fontawesome', get_template_directory_uri()."/lib/font-awesome/css/font-awesome.css");
	wp_enqueue_style( 'responsive-nav', get_template_directory_uri()."/lib/responsive-nav/css/responsive-nav.css");
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style('pc', get_template_directory_uri()."/css/pc.css", array(), false, 'only screen and (min-width: 769px)');
	wp_enqueue_style('tablet', get_template_directory_uri()."/css/tablet.css", array(), false, 'only screen and (min-width:481px) and (max-width:768px)');
	wp_enqueue_style('smartphone', get_template_directory_uri()."/css/smartphone.css", array(), false, 'only screen and (max-width: 480px)');
	wp_enqueue_script('jquery'); // jQuery including by wordpress
	wp_enqueue_script( 'responsive-nav', get_template_directory_uri()."/lib/responsive-nav/js/responsive-nav.min.js");
	if(is_singular()) wp_enqueue_script( "comment-reply" );
	
	//Load in footer
	wp_enqueue_script( 'theme-functions', get_template_directory_uri()."/js/theme-functions.js",'','',true);
}

add_action( 'wp_enqueue_scripts', 'inthedistance_scripts' );
?>