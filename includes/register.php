<?php

/*
 * Main theme setup
 */

add_action( 'after_setup_theme', 'blank_theme_setup' );
function blank_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	remove_image_size('large');
}

add_filter('intermediate_image_sizes_advanced', function($sizes) {
    unset( $sizes['large']);
    return $sizes;
});

if(get_role('author')) remove_role('author');
if(get_role('contributor')) remove_role('contributor');