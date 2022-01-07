<?php
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );
function child_enqueue_styles() {
	$parenthandle = "twenty-twenty-one-style";
	$theme        = wp_get_theme();
	wp_enqueue_style(
		$parenthandle, get_template_directory_uri() . '/style.css',
		array(), // If the parent theme has a dependency, copy it here.
		// $theme()->parent()->get( 'Version' )
	);
	wp_enqueue_style(
		'child-style', get_stylesheet_uri(),
		array( $parenthandle ),
		// wp_get_theme()->get( 'Version' )
	);
}
