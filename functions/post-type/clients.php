<?php 
// clients Custom Post Type
function clients_init() {
    // set up clients labels
    $labels = array(
        'name' => 'clientss',
        'singular_name' => 'clients',
        'add_new' => 'Add New clients',
        'add_new_item' => 'Add New clients',
        'edit_item' => 'Edit clients',
        'new_item' => 'New clients',
        'all_items' => 'All clientss',
        'view_item' => 'View clients',
        'search_items' => 'Search clientss',
        'not_found' =>  'No clientss Found',
        'not_found_in_trash' => 'No clientss found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'clientss',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'clients'),
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
    register_post_type( 'clients', $args );
}
add_action( 'init', 'clients_init' );