<?php
namespace Helen\WCUS;

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'twentytwenty-style', get_template_directory_uri() . '/style.css', array(), false );
	wp_enqueue_style( 'wcus-2021-style', get_stylesheet_uri(),
        array( 'twentytwenty-style' ),
        time()
    );
} );


function filter_plugins_url( $url, $path ) {
	$file = preg_replace( '/\.\.\//', '', $path );
	return trailingslashit( get_stylesheet_directory_uri() ) . $file;
}


\add_filter( 'plugins_url', __NAMESPACE__ . '\filter_plugins_url', 10, 2 );

require_once \get_stylesheet_directory() . '/blocks/demo/register.php';

remove_filter( 'plugins_url', __NAMESPACE__ . '\filter_plugins_url', 10, 2 );
