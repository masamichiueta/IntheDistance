<?php
//SideBar Setting
register_sidebar( array(
'name' => 'Sidebar Widget',
'id' => 'sidebar',
'description' => 'The area of Sidebar Widget',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
) );
add_theme_support( 'menus' );
register_nav_menu( 'header-navi', 'Header Navigation' );
?>