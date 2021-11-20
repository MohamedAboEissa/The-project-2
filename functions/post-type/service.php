<?php 
// services Custom Post Type
function services_init() {
    // set up services labels
    $labels = array(
        'name' => 'servicess',
        'singular_name' => 'services',
        'add_new' => 'Add New services',
        'add_new_item' => 'Add New services',
        'edit_item' => 'Edit services',
        'new_item' => 'New services',
        'all_items' => 'All servicess',
        'view_item' => 'View services',
        'search_items' => 'Search servicess',
        'not_found' =>  'No servicess Found',
        'not_found_in_trash' => 'No servicess found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'servicess',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'services'),
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
    register_post_type( 'services', $args );
}
add_action( 'init', 'services_init' );