<?php

require_once(TEMPLATEPATH.'/includes/advanced-custom-fields/acf.php');


// customize ACF path
add_filter('acf/settings/path', function($path) {
	$path = get_stylesheet_directory() . '/includes/advanced-custom-fields/';
	return $path;
});

// customize ACF dir
add_filter('acf/settings/dir', function($dir) {
	$dir = get_stylesheet_directory_uri() . '/includes/advanced-custom-fields/';
	return $dir;
});

// hide ACF admin
// add_filter('acf/settings/show_admin', '__return_false');


/*
 * ACF - Register options
 */

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'theme-footer-settings',
		'capability'	=> 'edit_themes',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Général',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_themes',
		'redirect'		=> false
	));
}