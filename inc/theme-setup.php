<?php
function childhood_setup(){
	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'main-menu' => __('Main Menu'),
		'footer-bottom-menu' => __('Footer Bottom Menu'),
		) 
	);
}

add_action('after_setup_theme', 'childhood_setup');