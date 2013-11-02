<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if (is_home() || is_front_page()) :?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<?php else: ?>
	<meta property="og:title" content="<?php the_title(); ?>">
	<?php endif ;?>
	<?php if (is_home() || is_front_page()) :?>
	<meta property="og:url" content="<?php echo home_url(); ?>">
	<?php else: ?>
	<meta property="og:url" content="<?php the_permalink(); ?>">
	<?php endif ;?>
	
	<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" >
    
    <meta name="author" content="<?php the_author_meta('display_name', 1); ?>">
	
	
	<!-- Favicon -->
	<?php if ($favicon = of_get_option('custom_favicon', false) ) { ?>
	<link rel="shortcut icon" href="<?php echo $favicon; ?>">
	<?php } else { ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<?php } ?>
	
	<!-- iPhone icon -->
	<?php if ($apple_touch_icon = of_get_option('apple_touch_icon', false) ) { ?>
	<link rel="apple-touch-icon" href="<?php echo $apple_touch_icon; ?>" />
	<?php } else { ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png" />
	<?php } ?>
	
	<!-- Styles -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" type="text/css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet">
	
	<!--
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	
--><?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<div class="rainbowDash">
	<div class="blue"></div>
	<div class="yellow"></div>
</div>
<?php 
	//Check if qtranslate plugin has been installed
	if(function_exists('qtrans_generateLanguageSelectCode')) :
		echo qtrans_generateLanguageSelectCode('text'); 
	endif;
?>
<div class="clear"></div>

<header class="clearfix">

<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

<!-- When logo image is set -->
<?php if ( of_get_option('logo', false) ) { ?>
	<h1 class="logo-image">
		<img src="<?php echo of_get_option('logo'); ?>" alt="<?php echo bloginfo( 'name' ) ?>" height="59" />
	</h1>

<!-- When logo image is not set -->	
<?php } else {?>
<div class="logo-text clearfix">
<h1>
<?php
	bloginfo( 'name' );
?>
</h1>

<?php }?>
</a>
<?php if ( !of_get_option('logo', false) ) { ?>
	<h2><?php bloginfo( 'description' ); ?></h2>
	</div>
<?php } ?>


<nav>
	<?php wp_nav_menu( array ( 'theme_location' => 'header-navi' ) ); ?>
</nav>
</header>

<hr>