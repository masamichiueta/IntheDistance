<div class="belt belt-separator">
	<div class="blue"></div>
</div>
<div class="container-outer" id="footer">
<div class="container-inner clearfix">
<footer class="clearfix">
	<ul>
        <?php if( $github_account_url = esc_url(of_get_option('github_account_url', false))) : ?>
		<li><a href="<?php echo $github_account_url; ?>"><i class="fa fa-3x fa-github-square"></i></a></li>
		<?php endif; ?>
		<?php if( $twitter_account_url = esc_url(of_get_option('twitter_account_url', false))) : ?>
		<li><a href="<?php echo $twitter_account_url; ?>"><i class="fa fa-3x fa-twitter-square"></i></a></li>
		<?php endif; ?>
		<?php if( $facebook_account_url = esc_url(of_get_option('facebook_account_url', false))) : ?>
		<li><a href="<?php echo $facebook_account_url; ?>"><i class="fa fa-3x fa-facebook-square"></i></a></li>
		<?php endif; ?>
	</ul>
	<p class="copyright">
	<?php if (!$footer = of_get_option('footer_copyright', false) ) { ?>
	<?php _e('Powered by', 'inthedistance'); ?>
		<a href="http://wordpress.org/" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'inthedistance' ); ?>" rel="generator"><?php printf( __( 'WordPress', 'inthedistance' ) ); ?>
		</a> &amp;
		<a href="http://www.uetamasamichi.com"><?php _e('IntheDistance', 'inthedistance'); ?>.</a>
	<?php } else {
	echo stripslashes($footer);
} ?>
	</p>
</footer>
</div><! -- container-inner -->
</div><!-- container-outer -->
</div><!--wrapper-->
<?php wp_footer(); ?>
</body>
</html>