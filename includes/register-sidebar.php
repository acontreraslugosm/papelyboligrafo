<?php

add_action( 'widgets_init', function () {
	register_sidebar( array(
			'id' => 'main-sidebar',
			'name' => __( 'Main Sidebar', 'acl-theme' ),
			'description' => __( 'Main Sidebar', 'acl-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
	) );
	register_sidebar( array(
			'id' => 'main-navbar',
			'name' => __( 'Main Navbar', 'acl-theme' ),
			'description' => __( 'Main Navbar', 'acl-theme' ),
			'before_widget' => '',
			'after_widget' => '',
	) );
} );