<?php get_header(); ?>

<?php
if (have_posts()) : while (have_posts()) : the_post();

the_content();

endwhile; endif;
?>
<div class="commentarea">
<?php comments_template(); ?>
</div>

<?php get_footer(); ?>