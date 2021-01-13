<?php



add_action( 'init', 'pack_post_type' );
function pack_post_type() {
    $labels = array(
        'name' => __('pack Images', 'cpt-bootstrap-carousel'),
        'singular_name' => __('pack Image', 'cpt-bootstrap-carousel'),
        'add_new' => __('Add New', 'cpt-bootstrap-carousel'),
        'add_new_item' => __('Add New pack Image', 'cpt-bootstrap-carousel'),
        'edit_item' => __('Edit pack Image', 'cpt-bootstrap-carousel'),
        'new_item' => __('New pack Image', 'cpt-bootstrap-carousel'),
        'view_item' => __('View pack Image', 'cpt-bootstrap-carousel'),
        'search_items' => __('Search pack Images', 'cpt-bootstrap-carousel'),
        'not_found' => __('No pack Image', 'cpt-bootstrap-carousel'),
        'not_found_in_trash' => __('No pack Images found in Trash', 'cpt-bootstrap-carousel'),
        'parent_item_colon' => '',
        'menu_name' => __('pack', 'cpt-bootstrap-carousel')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 21,
        'menu_icon' => 'dashicons-images-alt',
        'supports' => array('title', 'thumbnail', 'editor'),
        'taxonomies' => array( 'category' ),
    );
    register_post_type('pack_cpt', $args);
}