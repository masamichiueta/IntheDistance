<?php if( have_comments() ): ?>
<hr>
<h3 id="comments"><?php _e("<!--:en-->Comments<!--:--><!--:ja-->コメント<!--:-->"); ?></h3>
<ul class="commentlist">
<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
</ul>
<?php endif; ?>
<?php comment_form( ); ?>

