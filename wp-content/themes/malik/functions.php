<?php

// Theme hooks
require (get_template_directory() . '/inc/theme-hooks.php');

// Custom functions
require (get_template_directory() . '/inc/custom-functions.php');

//Post Types
require (get_template_directory() . '/inc/custom-posttypes.php');

//ACF functions
require (get_template_directory() . '/inc/acf-functions.php');

//User functions
require (get_template_directory() . '/inc/user-functions.php');

//Payment
// require (get_template_directory() . '/inc/payment/paypal.php');
    
/**
 * Post Thumbnail
 */    
 

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_theme_support( 'post-thumbnails' ); 
    add_image_size( 'custom-thumb-cause', 80, 80, true );
    add_image_size( 'custom-thumb-volunteer', 90, 90, true );
    add_image_size( 'custom-thumb-volunteer-side-list', 60, 60, true );
    add_image_size( 'custom-banner-cause', 950, 520, true );
}

// if( !current_user_can( 'administrator' ) ):
function disable_acf_load_field( $field ) {

$field['disabled'] = 1;
var_dump($field); die();
return $field;

}
add_filter('acf/load_field/name=donations', 'disable_acf_load_field');

add_filter( 'https_ssl_verify', '__return_false' );
