<?php

/**
 * Register FAQ Post Type
 */
function faq_post_type()
{

    $labels = array(
        'name'                  => __('FAQ', '_s'),
        'singular_name'         => __('FAQ', '_s'),
        'menu_name'             => __('FAQ', '_s'),
        'name_admin_bar'        => __('FAQ', '_s'),
        'add_new'               => __('Add New', '_s'),
        'add_new_item'          => __('Add New Item', '_s'),
        'new_item'              => __('New item', '_s'),
        'edit_item'             => __('Edit Item', '_s'),
        'view_item'             => __('View Item', '_s'),
        'all_items'             => __('FAQ', '_s'),
        'search_items'          => __('Search Items', '_s'),
        'parent_item_colon'     => __('Parent', '_s'),
        'not_found'             => __('Not Found', '_s'),
        'not_found_in_trash'    => __('Not Found in Trash', '_s'),
        'featured_image'        => __('Featured Image', '_s'),
        'set_featured_image'    => __('Set Featured Image', '_s'),
        'remove_featured_image' => __('Remove Featured Image', '_s'),
        'use_featured_image'    => __('Use Featured Image', '_s'),
        'insert_into_item'      => __('Insert Into Item', '_s'),
        'uploaded_to_this_item' => __('Uploaded To This Item', '_s'),
        'items_list'            => __('Items List', '_s'),
        'items_list_navigation' => __('Items List Navigation', '_s'),
        'filter_items_list'     => __('Filter Items List', '_s'),
    );
    $args = array(
        'label'                 => __('FAQ', '_s'),
        'description'           => __('FAQ Post Type', '_s'),
        'labels'                => $labels,
        'menu_icon'             => 'dashicons-format-status',
        'supports'              => array('title', 'editor', 'excerpt', 'page-attributes', 'author'),
        'taxonomies'            => array('', 'faq_cat'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 3,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => false,
        'query_var'             => true,
        'capability_type'       => 'page',
        'rewrite'               => array('slug' => 'faq'),
    );
    register_post_type('faq', $args);
}
add_action('init', 'faq_post_type', 5);



/**
 * Register Boats Post Type
 */
function boats_post_type()
{

    $labels = array(
        'name'                  => __('Boats', '_s'),
        'singular_name'         => __('Boats', '_s'),
        'menu_name'             => __('Boats', '_s'),
        'name_admin_bar'        => __('Boats', '_s'),
        'add_new'               => __('Add New', '_s'),
        'add_new_item'          => __('Add New Item', '_s'),
        'new_item'              => __('New item', '_s'),
        'edit_item'             => __('Edit Item', '_s'),
        'view_item'             => __('View Item', '_s'),
        'all_items'             => __('Boats', '_s'),
        'search_items'          => __('Search Items', '_s'),
        'parent_item_colon'     => __('Parent', '_s'),
        'not_found'             => __('Not Found', '_s'),
        'not_found_in_trash'    => __('Not Found in Trash', '_s'),
        'featured_image'        => __('Featured Image', '_s'),
        'set_featured_image'    => __('Set Featured Image', '_s'),
        'remove_featured_image' => __('Remove Featured Image', '_s'),
        'use_featured_image'    => __('Use Featured Image', '_s'),
        'insert_into_item'      => __('Insert Into Item', '_s'),
        'uploaded_to_this_item' => __('Uploaded To This Item', '_s'),
        'items_list'            => __('Items List', '_s'),
        'items_list_navigation' => __('Items List Navigation', '_s'),
        'filter_items_list'     => __('Filter Items List', '_s'),
    );
    $args = array(
        'label'                 => __('Boats', '_s'),
        'description'           => __('Boats Post Type', '_s'),
        'labels'                => $labels,
        'menu_icon'             => 'dashicons-flag',
        'supports'              => array('title', 'editor', 'excerpt', 'page-attributes', 'author'),
        'taxonomies'            => array('', 'boats_cat'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 3,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'capability_type'       => 'page',
        'rewrite'               => array('slug' => 'boats'),
    );
    register_post_type('boats', $args);
}
add_action('init', 'boats_post_type', 3);



/**
 * Register Boats Custom taxonomy
 */

function boats_taxonomy()
{
    $labels = array(
        'name'                  => __('Boats Taxonomy', '_s'),
        'singular_name'         => __('Boats Taxonomy', '_s'),
        'search_items'          => __('Search Boats Taxonomy', '_s'),
        'all_items'             => __('Boats Taxonomy', '_s'),
        'parent_item'           => __('Parent', '_s'),
        'parent_item_colon'     => __('Parent Topic:', '_s'),
        'edit_item'             => __('Edit Boats Taxonomy', '_s'),
        'update_item'           => __('update Boats Taxonomy', '_s'),
        'add_new_item'          => __('Add New Boats Taxonomy', '_s'),
        'new_item_name'         => __('New Boats Taxonomy Name', '_s'),
        'menu_name'             => __('Boats Taxonomy', '_s'),
    );

    register_taxonomy('boats_cat', array('boats'), array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => true,
        'public'                => true,
        'show_in_rest'          => true,
    ));
}
add_action('init', 'boats_taxonomy', 3);



/**
 * Register Location Post Type
 */
function location_post_type()
{

    $labels = array(
        'name'                  => __('Location', '_s'),
        'singular_name'         => __('Location', '_s'),
        'menu_name'             => __('Location', '_s'),
        'name_admin_bar'        => __('Location', '_s'),
        'add_new'               => __('Add New', '_s'),
        'add_new_item'          => __('Add New Item', '_s'),
        'new_item'              => __('New item', '_s'),
        'edit_item'             => __('Edit Item', '_s'),
        'view_item'             => __('View Item', '_s'),
        'all_items'             => __('Location', '_s'),
        'search_items'          => __('Search Items', '_s'),
        'parent_item_colon'     => __('Parent', '_s'),
        'not_found'             => __('Not Found', '_s'),
        'not_found_in_trash'    => __('Not Found in Trash', '_s'),
        'featured_image'        => __('Featured Image', '_s'),
        'set_featured_image'    => __('Set Featured Image', '_s'),
        'remove_featured_image' => __('Remove Featured Image', '_s'),
        'use_featured_image'    => __('Use Featured Image', '_s'),
        'insert_into_item'      => __('Insert Into Item', '_s'),
        'uploaded_to_this_item' => __('Uploaded To This Item', '_s'),
        'items_list'            => __('Items List', '_s'),
        'items_list_navigation' => __('Items List Navigation', '_s'),
        'filter_items_list'     => __('Filter Items List', '_s'),
    );
    $args = array(
        'label'                 => __('Location', '_s'),
        'description'           => __('Location Post Type', '_s'),
        'labels'                => $labels,
        'menu_icon'             => 'dashicons-flag',
        'supports'              => array('title', 'editor', 'excerpt', 'page-attributes', 'author'),
        'taxonomies'            => array('', 'location_cat'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 3,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'capability_type'       => 'page',
        'rewrite'               => array('slug' => 'location'),
    );
    register_post_type('location', $args);
}
add_action('init', 'location_post_type', 5);



/**
 * Register Location Custom taxonomy
 */

function location_taxonomy()
{
    $labels = array(
        'name'                  => __('Location Taxonomy', '_s'),
        'singular_name'         => __('Location Taxonomy', '_s'),
        'search_items'          => __('Search Location Taxonomy', '_s'),
        'all_items'             => __('Location Taxonomy', '_s'),
        'parent_item'           => __('Parent', '_s'),
        'parent_item_colon'     => __('Parent Topic:', '_s'),
        'edit_item'             => __('Edit Location Taxonomy', '_s'),
        'update_item'           => __('update Location Taxonomy', '_s'),
        'add_new_item'          => __('Add New Location Taxonomy', '_s'),
        'new_item_name'         => __('New Location Taxonomy Name', '_s'),
        'menu_name'             => __('Location Taxonomy', '_s'),
    );

    register_taxonomy('location_cat', array('location'), array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => true,
        'public'                => true,
        'show_in_rest'          => true,
    ));
}
add_action('init', 'location_taxonomy', 5);
