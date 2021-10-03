<?php

//FAQ

add_action( 'init', 'faq_register' );   

function faq_register() {   

    $labels = array( 
        'name' => _x('FAQ', 'post type general name'), 
        'singular_name' => _x('FAQ', 'post type singular name'), 
        'add_new' => _x('Add New', 'FAQ'), 
        'add_new_item' => __('Add New FAQ'), 
        'edit_item' => __('Edit FAQ'), 
        'new_item' => __('New FAQ'), 

        'view_item' => __('View FAQ'), 
        'search_items' => __('Search FAQ'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        // 'menu_icon' => get_stylesheet_directory_uri() . '/article16.png', 
        'rewrite' => array( 'slug' => 'faq', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'menu_position' => null, 
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',) 
    );   

    register_post_type( 'faq' , $args ); 

    register_taxonomy( 'categories', array('faq'), array(
        'hierarchical' => true, 
        'label' => 'FAQ Categories', 
        'singular_label' => 'Faq Category', 
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories', 'faq' ); 
}


//Event

add_action( 'init', 'event_register' );   

function event_register() {   

    $labels = array( 
        'name' => _x('Events', 'post type general name'), 
        'singular_name' => _x('Events', 'post type singular name'), 
        'add_new' => _x('Add New', 'Events'), 
        'add_new_item' => __('Add New Event'), 
        'edit_item' => __('Edit Event'), 
        'new_item' => __('New Events'), 

        'view_item' => __('View Event'), 
        'search_items' => __('Search Events'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        // 'menu_icon' => get_stylesheet_directory_uri() . '/article16.png', 
        'rewrite' => array( 'slug' => 'events', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'menu_position' => null, 
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',) 
    );   

    register_post_type( 'events' , $args ); 

    register_taxonomy( 'eventcategories', array('events'), array(
        'hierarchical' => true, 
        'label' => 'Event Categories', 
        'singular_label' => 'Event Category', 
        'rewrite' => array( 'slug' => 'eventcategories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'eventcategories', 'events' ); 
}

//Volunteer

add_action( 'init', 'volunteer_register' );   

function volunteer_register() {   

    $labels = array( 
        'name' => _x('Volunteer', 'post type general name'), 
        'singular_name' => _x('Volunteers', 'post type singular name'), 
        'add_new' => _x('Add New', 'Volunteer'), 
        'add_new_item' => __('Add New Volunteer'), 
        'edit_item' => __('Edit Volunteer'), 
        'new_item' => __('New Volunteer'), 

        'view_item' => __('View Volunteer'), 
        'search_items' => __('Search Volunteers'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        // 'menu_icon' => get_stylesheet_directory_uri() . '/article16.png', 
        'rewrite' => array( 'slug' => 'volunteer', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'menu_position' => null, 
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',) 
    );   

    register_post_type( 'volunteer' , $args ); 

}

//Causes

add_action( 'init', 'causes_register' );   

function causes_register() {   

    $labels = array( 
        'name' => _x('Causes', 'post type general name'), 
        'singular_name' => _x('Causes', 'post type singular name'), 
        'add_new' => _x('Add New', 'Causes'), 
        'add_new_item' => __('Add New Causes'), 
        'edit_item' => __('Edit Causes'), 
        'new_item' => __('New Causes'), 

        'view_item' => __('View Causes'), 
        'search_items' => __('Search Causes'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        // 'menu_icon' => get_stylesheet_directory_uri() . '/article16.png', 
        'rewrite' => array( 'slug' => 'causes', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'menu_position' => null, 
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',) 
    );   

    register_post_type( 'causes' , $args ); 

    register_taxonomy( 'causescategories', array('causes'), array(
        'hierarchical' => true, 
        'label' => 'Causes Categories', 
        'singular_label' => 'Causes Category', 
        'rewrite' => array( 'slug' => 'causescategories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'causescategories', 'causes' ); 
}




//Donations

add_action( 'init', 'donations_register' );   

function donations_register() {   

    $labels = array( 
        'name' => _x('Donations', 'post type general name'), 
        'singular_name' => _x('Donations', 'post type singular name'), 
        'add_new' => _x('Add New', 'Donation'), 
        'add_new_item' => __('Add New Donation'), 
        'edit_item' => __('Edit Donation'), 
        'new_item' => __('New Donation'), 

        'view_item' => __('View Donation'), 
        'search_items' => __('Search Donation'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        // 'menu_icon' => get_stylesheet_directory_uri() . '/article16.png', 
        'rewrite' => array( 'slug' => 'donations', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'menu_position' => null, 
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',) 
    );   

    register_post_type( 'donations' , $args ); 

    register_taxonomy( 'donationscategories', array('donations'), array(
        'hierarchical' => true, 
        'label' => 'Donations Categories', 
        'singular_label' => 'Donations Category', 
        'rewrite' => array( 'slug' => 'donationscategories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'donationscategories', 'donations' ); 
}

?>