<?php



function register_pack() {

    $labels = array(
        'name'                  => 'AJ Fasions',
        'singular_name'         => 'AJ Fasion',
        'menu_name'             => 'AJ Fasions',
        'name_admin_bar'        => 'AJ Fasion',
        'archives'              => 'ajfashionArchives',
        'attributes'            => 'Item Attributes',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Items',
        'add_new_item'          => 'Add New Item',
        'add_new'               => 'Add New',
        'new_item'              => 'New Item',
        'edit_item'             => 'Edit Item',
        'update_item'           => 'Update Item',
        'view_item'             => 'View Item',
        'view_items'            => 'View Items',
        'search_items'          => 'Search Item',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list'            => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list'     => 'Filter items list',
    
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
        'label'                 => 'AJ Fasion',
        'description'           => 'Post Type Description',
        'labels'                => $labels,
       // 'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
      //  'taxonomies'            => array( 'fashion_category' ),
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
        'capability_type'       => 'post',
        'supports'              => ['title',
                                    'editor',
                                    'thumbnail'] ,
        'taxonomies'            => array( 'pack_categories' ),
    );
    register_post_type( 'pack_cpt', $args );
} add_action( 'init', 'register_pack');


function pack_taxonomy() {
    register_taxonomy(
        'pack_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'pack_cpt',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'pack categories', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'pack_categories',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
    // print_r(get_object_taxonomies( array( 'post_type' => 'pack_cpt' ) )); exit;
}
add_action( 'init', 'pack_taxonomy');
