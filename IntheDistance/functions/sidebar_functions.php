<?php
//SideBar Setting
add_action( 'widgets_init', 'inthedistance_widgets_init' );


function inthedistance_widgets_init() {
	register_sidebar( array(
		'name' => 'Sidebar Widget',
		'id' => 'sidebar',
		'description' => 'The area of Sidebar Widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		
		) );
}
?>