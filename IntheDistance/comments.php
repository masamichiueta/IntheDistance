<?php if( have_comments() ): ?>
<hr>
<h3 id="comments">
<?php echo "Comments"?>
</h3>
<ul class="commentlist">
<?php wp_list_comments('type=comment&callback=inthedistance_comment'); ?>
</ul>
<?php endif; ?>
<div class="comment-page clearfix">
<?php paginate_comments_links();?>
</div>
<?php comment_form( ); ?>

