<?php
/**
* Plugin Name: Icertech - Custom Post Type - Sectors
* Plugin URI: http://fotofire.com
* Description: Create custom post type - Sectors
* Version: 1.0
* Author: Christopher Beck
* Author URI: Author's website
* License: icertech-custom-post-type-sectors
*/

add_action( 'init', 'register_sectors' );

function register_sectors() {

    $labels = array(
        'name' => _x( 'Sectors', 'icertech_sectors' ),
        'singular_name' => _x( 'Sectors', 'icertech_sectors' ),
        'add_new' => _x( 'Add New', 'icertech_sectors' ),
        'add_new_item' => _x( 'Add New Sector', 'icertech_sectors' ),
        'edit_item' => _x( 'Edit Sector', 'icertech_sectors' ),
        'new_item' => _x( 'New Sectors', 'icertech_sectors' ),
        'view_item' => _x( 'View Our Sectors', 'icertech_sectors' ),
        'search_items' => _x( 'Search Our Sectors', 'icertech_sectors' ),
        'not_found' => _x( 'No sectors found', 'icertech_sectors' ),
        'not_found_in_trash' => _x( 'No sectors found in Trash', 'icertech_sectors' ),
        'parent_item_colon' => _x( 'Parent sectors:', 'icertech_sectors' ),
        'menu_name' => _x( 'Our Sectors', 'icertech_sectors' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Our Sectors',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
        'taxonomies' => array( 'category', 'post_tag', 'sectors' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-screenoptions',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'icertech_sectors', $args );
}
