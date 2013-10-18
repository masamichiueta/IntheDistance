<?php get_header(); ?>

<div id="blog">
<!-- <h2>Blog</h2> -->
<div class="grid9 first">
	<div class="content">
	<?php
      if(have_posts()) : 
        while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <h3><?php the_title(); ?></h3>
	        <div class="post-info">
	        	<span class="post-date"><i class="icon-pencil"></i> <?php echo get_the_date(); ?></span>
	        	<span class="post-category"><i class="icon-list-ul"></i> <?php the_category(','); ?></span> 
	        	<span class="post-comments"><i class="icon-comments"></i> <?php comments_popup_link('0', '1', '%'); ?></span>
	        </div>
	        <div class="entry clearfix">
	          <?php the_content(); ?>
	        </div>
			<div class="commentarea">
	      	<?php comments_template(); ?>
		  	</div>
		  	</div>
		  	<?php endwhile;?>
	<?php
		else : ?>
	<?php endif; ?>
	<div class="page clearfix">
		<span class="next-entries"><?php next_post_link(); ?></span>
		<span class="previous-entries"><?php previous_post_link(); ?></span>
	</div>
	</div>
</div>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>