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
            <div id="home-heading">
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
        <div id="home-content">
        <h1>Recent Updates</h1>
        <ul class="recent-updates">
            <?php query_posts('posts_per_page=5'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                <p><?php the_time( get_option( 'date_format')); ?></p>

            </li>
            <?php endwhile; endif; ?>
            	<?php wp_reset_query(); ?>
        </ul>


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
        </div><!-- home-content-->
</div><!-- container-inner-->
</div><!-- container-outer-->
<?php get_footer(); ?>