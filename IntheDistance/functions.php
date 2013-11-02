<?php
//ContentWidth
if ( ! isset( $content_width ) ) $content_width = 900;

//Include Comment Function
require_once ( get_template_directory() . '/functions/comment_functions.php' );
//Include SideBar Function
require_once ( get_template_directory() . '/functions/sidebar_functions.php' );
//Include Theme Option
require_once ( get_template_directory() . '/functions/options-functions.php' );
require_once ( get_template_directory() . '/options.php' );

//Settings
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'editor-style' );
add_editor_style();

?>