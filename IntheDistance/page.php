<?php 
/*
 * Template Name: Single Page 
 * Description: Single page template
 */

get_header(); ?>

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

<?php get_footer(); ?>