<?php

add_action( 'wp_enqueue_scripts', function () {
	/* jQuery v2.2.4 */
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', THEME_URI . '/js/jquery.min.js', array(), '2.2.4', false );
	/* Modernizr v2.8.3 */
	wp_register_script( 'modernizr', THEME_URI . '/js/modernizr.min.js', array(), '2.8.3', false );
	/* Bootstrap v3.3.5 */
	wp_register_script( 'bootstrap', THEME_URI . '/js/bootstrap.min.js', array( 'jquery' ), '4.1.3', false );
} );