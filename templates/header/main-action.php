<ul class="main-action">
	<?php if( function_exists('is_woocommerce') ): ?>
		<li>
			<a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ?>" title="<?php esc_attr_e('Mi Cuenta', 'acl-theme') ?>">
				<i class="fa fa-user"></i>
			</a>
		</li>
	<?php endif; ?>

	<?php 
	
	if(function_exists('is_woocommerce')): ?>
		<li>			
			<?php include( get_theme_file_path('templates/header/cart.php') ); ?>
		</li>
	<?php endif; ?>

</ul>