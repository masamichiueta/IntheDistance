<?php
/*
 * Template Name: Single Page
 * Description: Single page template
 */

get_header(); ?>
<div class="container-outer">
<div class="container-inner clearfix">
<?php
if (have_posts()) : while (have_posts()) : the_post();

the_content();

endwhile; endif;
?>
<?php $comments = get_comments();
      if( $comments ) { ?>
<div class="commentarea">
<?php comments_template(); ?>
</div>
<?php } ?>
</div><!-- container-inner -->
</div><!-- container-outer -->
<?php get_footer(); ?>