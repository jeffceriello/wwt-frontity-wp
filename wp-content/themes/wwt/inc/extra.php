<?php
// Options page
if( function_exists('acf_add_options_page') ) {
 	// add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'WWT Settings',
		'menu_title' 	=> 'WWT',
        'post_id'       => 'theme-wwt-settings',
        'menu_slug'     => 'theme-wwt-settings',
		'redirect' 		=> false,
		'position'		=> 2,
		'icon_url'		=> 'dashicons-admin-generic'
	));
}


// Google Maps API key
/*function my_acf_init() {	
	acf_update_setting('google_api_key', 'AIzaSyBav7E3czLPLufdZGbBUSsdeW02jwu-Ma4');
}
add_action('acf/init', 'my_acf_init');*/


// excerpt length
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// excerpt read more
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// size format
// add_image_size( 'carousel-size', 300, 300, array( 'center', 'center' ) );