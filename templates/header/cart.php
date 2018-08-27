<?php
$cart_content = WC()->cart->get_cart();
?>
<div class="cart">
	<a class="cart-trigger" href="javascript:;" title="<?php _e( 'Ver Cesta', 'acl-theme' ); ?>">
		<div class="cart-icon">
			<span class="fa fa-shopping-cart"></span>
			<span class="cart-count">
				<?php echo WC()->cart->cart_contents_count; ?>
			</span>
		</div>
	</a>
	<div class="cart-content">
		<?php if( !empty( $cart_content ) ): ?>
			<ul class="list-unstyled cart-content-list">
				<?php
				
				foreach( $cart_content as $cart_item_key => $cart_item ) {
					$product = $cart_item['data'];
					?>
					<li>
						<a href="<?php echo get_permalink( $product->get_id() ) ?>" class="product-image">
							<?php 
							if( has_post_thumbnail( $product->get_id() ) ){
								echo get_the_post_thumbnail( $product->get_id(), 'shop_thumbnail' );
							}
							else{
								echo wc_placeholder_img( 'shop_thumbnail' );
							}
							?>
						</a>
						<div class="cart-product-details">
							<div class="cart-item-info">
								<div class="cart-item-quantity">
									<?php
									echo esc_html( $cart_item['quantity'] );
									echo ' - ';
									echo WC()->cart->get_product_price( $product );
									?>
								</div>
								<a href="<?php echo esc_url( wc_get_cart_remove_url( $cart_item_key ) ); ?>" class="remove-from-cart">
									<i class="icon-close"></i>
								</a>
							</div>
							<a href="<?php echo get_permalink( $product->get_id() ) ?>">
								<?php echo esc_html( $product->get_name() ); ?>
							</a>
						</div>
					</li>
					<?php	
				} 
				?>
			</ul>
		<?php else: ?>
			<?php esc_html_e( 'No items in cart', 'acl-theme' ) ?>
		<?php endif; ?>

		<div class="cart-action">
			<a href="<?php echo wc_get_cart_url(); ?>" class="btn">
				<?php esc_html_e( 'View Cart', 'acl-theme' ) ?>
			</a>
			<a href="<?php echo wc_get_checkout_url(); ?>" class="btn">
				<?php esc_html_e( 'Checkout', 'acl-theme' ) ?>
			</a>
		</div>
	</div>
</div>