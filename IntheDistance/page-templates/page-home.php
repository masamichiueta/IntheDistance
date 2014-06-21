<?php
/*
 * Template Name: Home
 * Description: Home page template
 */

get_header(); ?>
<div class="container-outer">
<?php if ($homepage_heading_image = of_get_option('homepage_heading_image', false) ) : ?>
    <div id="home-heading-image" style="background-image: url(<?php echo $homepage_heading_image; ?>);">
<?php else : ?>
    <div id="home-heading-image" style="background-color: #62A3C4;">
<?php endif; ?>

        <div class="container-inner clearfix">
            <div id="home-content">
<?php if ($homepage_heading = of_get_option('homepage_heading', false) ) : ?>
		        	<h2><?php echo $homepage_heading; ?></h2>
<?php endif; ?>
<?php if ($homepage_description = of_get_option('homepage_description', false) ) : ?>
    <div id="home-heading-description">
<?php echo $homepage_description; ?>
    </div>
<?php endif; ?>

            </div><!-- home-content-->
    </div><!-- container-innner-->

    </div><!-- home-heading-image-->

</div><!--container-outer-->

<div class="container-outer">
<div class="container-inner">
<?php if ( have_posts() ) while ( have_posts() ){
    the_post();
    the_content();
    } ?>

<?php $comments = get_comments();
if( $comments ) { ?>
<div class="commentarea">
	<?php comments_template(); ?>
</div>
<?php } ?>

</div><!-- container-inner-->
</div><!-- container-outer-->
<?php get_footer(); ?>