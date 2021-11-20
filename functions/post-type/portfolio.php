<?php 
// portfolio Custom Post Type
function portfolio_init() {
    // set up portfolio labels
    $labels = array(
        'name' => 'portfolios',
        'singular_name' => 'portfolio',
        'add_new' => 'Add New portfolio',
        'add_new_item' => 'Add New portfolio',
        'edit_item' => 'Edit portfolio',
        'new_item' => 'New portfolio',
        'all_items' => 'All portfolios',
        'view_item' => 'View portfolio',
        'search_items' => 'Search portfolios',
        'not_found' =>  'No portfolios Found',
        'not_found_in_trash' => 'No portfolios found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'portfolios',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'portfolio'),
        'query_var' => true,
        
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_init' );