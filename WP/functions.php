<?php

add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {

    add_theme_support( 'woocommerce' );

}


add_filter( 'woocommerce_available_variation', 'variations_product_fee' );
function variations_product_fee( $variations )
{
    $variations['product_fee'] = get_post_meta($variations['variation_id'], 'product-fee-amount', true);
    return $variations;


}




add_action('wp_head','add_to_cart_script');
function add_to_cart_script(){
    if(is_product()){
        wp_enqueue_script('wc-add-to-cart-variation');
    }
}







/**
 * @snippet    WooCommerce Show Product Image @ Checkout Page
 */

add_filter( 'woocommerce_cart_item_name', 'ts_product_image_on_checkout', 10, 3 );

function ts_product_image_on_checkout( $name, $cart_item, $cart_item_key ) {

    /* Return if not checkout page */
    if ( ! is_checkout() ) {
        return $name;
    }

    /* Get product object */
    $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

    /* Get product thumbnail */
    $thumbnail = $_product->get_image();

    /* Add wrapper to image and add some css */
    $image = '<div class="ts-product-image" style="width: 52px; height: 80px; display: inline-block; padding-right: 7px; vertical-align: middle;">'
        . $thumbnail .
        '</div>';

    /* Prepend image to name and return it */
    return $image . $name;

}

add_filter( 'woocommerce_product_variation_title_include_attributes', '__return_false' );
add_filter( 'woocommerce_is_attribute_in_product_name', '__return_false' );

add_filter('woocommerce_show_variation_price',      function() { return TRUE;});


add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'change_default_choose_text' );

function change_default_choose_text( $args ) {

    $term                     = wc_attribute_label( $args['attribute'] ); //Get Attribute label
    $args['show_option_none'] = __( 'Choose ' . $term . '  ', 'woocommerce' ); //Modify the Default option value
    return $args;

}

// checkbox field
add_action( 'woocommerce_after_order_notes', 'quadlayers_subscribe_checkout' );

function quadlayers_subscribe_checkout( $checkout ) {
    woocommerce_form_field( 'subscriber', array(
        'type' => 'checkbox',
//'required' => true,
        'class' => array('custom-field form-row-wide'),
        'label' => ' Subscribe to our newsletter.'
    ), $checkout->get_value( 'subscriber' ) );
}



function creer_menu() {
    register_nav_menu('menu_principal', 'Menu principal');
}
add_action('init', 'creer_menu');

register_nav_menus(array(
    'menu_principal' => 'Menu principal'
));



function menu_currency() {
    register_nav_menu('menu_currency', 'Menu currency');
}
add_action('init', 'menu_currency');

register_nav_menus(array(
    'menu_currency' => 'Menu currency'
));



function imk_scripts() {
    wp_enqueue_script(
        'zooming_js',
        get_template_directory_uri() . '/js/zooming.min.js',
        array('jquery'),
        true
    );

    wp_enqueue_script(
        'colcade.js',
        get_template_directory_uri() . '/js/colcade.js',
        array(),
        true
    );

    wp_enqueue_script(
        'script.js',
        get_template_directory_uri() . '/js/script.js',
        array(),
        true
    );




}
add_action( 'wp_enqueue_scripts', 'imk_scripts' );




// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                  => _x( 'about-us', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'about', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'about-us', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'about-us', 'text_domain' ),
        'description'           => __( 'about-us text', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'about-us', $args );

}
add_action( 'init', 'custom_post_type', 0 );




