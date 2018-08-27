<?php

add_action( 'wp_enqueue_scripts', function () {
	/* Animate.css v3.7.0	 */
	wp_register_style( 'animate', THEME_URI . '/css/animate.min.css', array(), '3.7.0', 'screen' );
	/* Bootstrap v4.1.3 */
	wp_register_style( 'bootstrap',  THEME_URI .  '/css/bootstrap.css', array(), '4.1.3' );
	/* Font Awesome v5.2.0 */
	wp_register_style( 'font-awesome', THEME_URI .  '/css/font-awesome.min.css', array(), '5.2.0' );
	/* Theme */
	wp_register_style( 'main-theme', get_stylesheet_uri(), array( 'bootstrap' ), '1.0' );
} );