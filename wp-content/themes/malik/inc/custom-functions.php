<?php

// Menu Register Code
    
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

function add_donation($name,$email,$amount,$cause_id)
{
    $post_arr = array(
    'post_type'=>'donations',
    'post_title'   => $name,
    'post_content' => $email,
    'post_status'  => 'publish',
    'post_author'  => get_current_user_id(),
    // 'tax_input'    => array(
    //     'hierarchical_tax'     => $hierarchical_tax,
    //     'non_hierarchical_tax' => $non_hierarchical_terms,
    // ),
    'meta_input'   => array(
        'test_meta_key' => 'value of test_meta_key',
        ),
    );

    $new_donation = wp_insert_post( $post_arr );
    var_dump($new_donation);

    if($new_donation != 0)
    {
        $selector = 'acf-field_60f1bcb94f87a';
        $post_id = $cause_id;
        $value = 
        update_field($selector, $value, $post_id);
    }
}
$donations = get_field('donations', 76);
// array_push($donations, 80);
// var_dump($donations);
// update_field('field_60f1bcb94f87a', $donations, 76);
// $donations = get_field('donations', 76);
// var_dump($donations);


?>