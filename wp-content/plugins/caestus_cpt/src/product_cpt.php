<?php



add_action( 'init', 'products_cpt_post_type' );
function products_cpt_post_type() {
    $labels = array(
        'name' => __('Product', 'cpt-bootstrap-carousel'),
        'singular_name' => __('Product', 'cpt-bootstrap-carousel'),
        'add_new' => __('Add New', 'cpt-bootstrap-carousel'),
        'add_new_item' => __('Add New Product', 'cpt-bootstrap-carousel'),
        'edit_item' => __('Edit Product ', 'cpt-bootstrap-carousel'),
        'new_item' => __('New Product ', 'cpt-bootstrap-carousel'),
        'view_item' => __('View Product ', 'cpt-bootstrap-carousel'),
        'search_items' => __('Search Product', 'cpt-bootstrap-carousel'),
        'not_found' => __('No Product', 'cpt-bootstrap-carousel'),
        'not_found_in_trash' => __('No Product found in Trash', 'cpt-bootstrap-carousel'),
        'parent_item_colon' => '',
        'menu_name' => __('Product', 'cpt-bootstrap-carousel')
    );
    $args = array(
        'labels' => $labels,
        'exclude_from_search' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'page',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 21,
        'menu_icon' => 'dashicons-editor-video',
        'supports' => ['title',
                'editor',
                'thumbnail'] ,
        'taxonomies'          => array( 'category' ),

    );
    register_post_type('products_cpt', $args);
}





