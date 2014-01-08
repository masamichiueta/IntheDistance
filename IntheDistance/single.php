<?php get_header(); ?>

<div id="blog">
<!-- <h2>Blog</h2> -->
<div class="grid9 first">
	<div class="content">
	<?php
      if(have_posts()) : 
        while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <h3 class="title">
		        <?php $title = get_the_title();
	        		if(strlen($title) == 0){
		        		echo "No title";
	        		}
	        		else{
		        		echo $title;
	        		}
	        	 ?>
	        </h3>
	        <div class="post-info">
	        	<span class="post-date"><i class="fa fa-pencil-square-o"></i> <?php echo get_the_date(); ?></span>
	        	<span class="post-category"><i class="fa fa-list-ul"></i> <?php the_category(','); ?></span> 
	        	<span class="post-comments"><i class="fa fa-comments-o"></i> <?php comments_popup_link('0', '1', '%'); ?></span>
	        	<span class="post-tag"><i class="fa fa-tags"></i> <?php the_tags(''); ?></span>
	        </div>
	        <div class="entry clearfix">
	        <?php if (has_post_thumbnail()) {
				the_post_thumbnail();
				}
			?>
	        <?php the_content(); ?>
	        </div>
	        <?php wp_link_pages('before=<div class="post-page">&after=</div>'); ?>
	        <?php if(have_comments()){ ?>
			<div class="commentarea">
	      	<?php comments_template(); ?>
		  	</div>
		  	<?php } ?>
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