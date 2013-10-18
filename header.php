<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
	<meta name="keywords" content="Masamichi Ueta, 上田雅道, Masamichi Lab, Inthedistance">
	<meta name="description" content="Masamichi Ueta's Website">
	<meta name="author" content="Masamichi Ueta">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<!-- iPhone icon -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png" />
	<!-- Styles -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" type="text/css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet">
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome-ie7.min.css" type="text/css" rel="stylesheet">
	<![endif]-->
	
	<!--
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	
--><?php wp_head(); ?>

</head>

<body>
<div id="wrapper">
<div class="rainbowDash">
	<div class="blue"></div>
	<div class="yellow"></div>
</div>

<?php echo qtrans_generateLanguageSelectCode('text'); ?>
<div class="clear"></div>

<header class="clearfix">
<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></h1>

<nav>
	<?php wp_nav_menu( array ( 'theme_location' => 'header-navi' ) ); ?>
</nav>
</header>

<hr>