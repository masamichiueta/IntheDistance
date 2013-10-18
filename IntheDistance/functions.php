<?php
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	
	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
<?php if ( 'div' != $args['style'] ) : ?>
<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
<?php endif; ?>
<div class="comment-author vcard">
<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
</div>
<?php if ($comment->comment_approved == '0') : ?>
<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
<br>
<?php endif; ?>
<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
<?php
printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
?>
</div>
<?php comment_text() ?>
<div class="reply">
<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
<?php if ( 'div' != $args['style'] ) : ?>
</div>
<hr>
<?php endif; ?>
<?php
}
?>
<?php
register_sidebar( array(
'name' => 'Sidebar Widget1',
'id' => 'sidebar-1',
'description' => 'The area of Sidebar Widget',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
) );
add_theme_support( 'menus' );
register_nav_menu( 'header-navi', 'Header Navigation' );
?>