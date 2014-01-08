<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Favicon -->
	<?php if ($favicon = of_get_option('custom_favicon', false) ) { ?>
	<link rel="shortcut icon" href="<?php echo $favicon; ?>">
	<?php }  ?>
	
	<!-- iPhone icon -->
	<?php if ($apple_touch_icon = of_get_option('apple_touch_icon', false) ) { ?>
	<link rel="apple-touch-icon" href="<?php echo $apple_touch_icon; ?>" />
	<?php } ?>
	
	<?php wp_head(); ?>

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

<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

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


<nav class="nav-collapse">
	<?php if(has_nav_menu('primary')){
		      wp_nav_menu( array ( 'theme_location' => 'primary', 'container' => false) );
		  }
		  else{
	?>
	<ul class="menu">
	<?php
		      wp_list_pages('title_li=');
	?>
	</ul>
	<?php
		  }
	?>
</nav>
</header>

<hr>