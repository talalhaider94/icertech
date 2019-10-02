<?php
/**
* Plugin Name: Icertech - Custom Post Type - Products
* Plugin URI: http://fotofire.com
* Description: Create custom post type - Products
* Version: 1.0
* Author: Christopher Beck
* Author URI: Author's website
* License: icertech-custom-post-type-sectors
*/


add_action( 'init', 'register_icertech_products' );

function register_icertech_products() {

    $labels = array(
        'name' => _x( 'Icertech Products', 'icertech_products' ),
        'singular_name' => _x( 'Icertech Products', 'icertech_products' ),
        'add_new' => _x( 'Add New', 'icertech_products' ),
        'add_new_item' => _x( 'Add New Product', 'icertech_products' ),
        'edit_item' => _x( 'Edit Product', 'icertech_products' ),
        'new_item' => _x( 'New Product', 'icertech_products' ),
        'view_item' => _x( 'View Our Product', 'icertech_products' ),
        'search_items' => _x( 'Search Our Product', 'icertech_products' ),
        'not_found' => _x( 'No product found', 'icertech_products' ),
        'not_found_in_trash' => _x( 'No products found in Trash', 'icertech_products' ),
        'parent_item_colon' => _x( 'Parent products:', 'icertech_products' ),
        'menu_name' => _x( 'Our Products', 'icertech_products' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Our Products',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
        'taxonomies' => array( 'category', 'post_tag', 'products' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 8,
        'menu_icon' => 'dashicons-list-view',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'icertech_products', $args );
}
