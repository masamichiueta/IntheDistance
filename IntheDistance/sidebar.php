<div class="grid3">
	<div class="sidebar">
    <?php if ( is_active_sidebar( 'sidebar' ) ) :
		dynamic_sidebar( 'sidebar' );
		else: ?>
		<div class="widget">
		<h3>No Widget</h3>
		<p>Widgets are not set.</p>
		</div>
	<?php endif; ?>
	</div>
</div>