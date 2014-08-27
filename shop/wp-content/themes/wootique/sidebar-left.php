<?php 
	// Don't display sidebar if full width
	global $woo_options;
	if ( $woo_options[ 'woo_layout' ] != "layout-full" ) :
?>	
<div id="sidebar-left" class="col-left">

	<?php if ( woo_active_sidebar( 'left' ) ) : ?>
    <div class="left">
		<?php woo_sidebar( 'left' ); ?>		           
	</div>        
	<?php endif; ?>  
	
</div><!-- /#sidebar -->

<?php endif; ?>