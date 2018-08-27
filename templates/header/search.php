<?php if( function_exists('is_woocommerce') ): ?>
	<form method="get" action="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ) ?>" class="form-wrapper">
		<input type="text" name="s" autocomplete="off" class="form-control" placeholder="<?php echo esc_attr__( 'Buscar productos...', 'acl-theme' ) ?>" value="<?php echo !empty( $_GET['s'] ) && !empty( $_GET['post_type'] ) ? esc_attr( $_GET['s'] ) : ''; ?>">
		<input type="hidden" name="post_type" value="product">
		<div class="styled-select">
			<select name="product_cat" class="form-control">
				<option value=""><?php esc_html_e( 'Categorías', 'acl-theme' ); ?></option>
				<?php
				$categories = get_terms( 'product_cat', array( 'parent' => 0 ) );
				if( !empty( $categories ) ){
					foreach( $categories as $category ) {
						echo  '<option value="'.esc_attr( $category->slug ).'">'.$category->name.'</option>';
					}
				}
				?>
			</select>
		</div>
		
		<button type="submit" class="btn">
			<i class="fa fa-search"></i>
		</button>
	</form>
	<ul class="quick-search-results list-unstyled"></ul>
<?php endif; ?>