<?php 
// description Custom Post Type
function description_init() {
    // set up description labels
    $labels = array(
        'name' => 'descriptions',
        'singular_name' => 'description',
        'add_new' => 'Add New description',
        'add_new_item' => 'Add New description',
        'edit_item' => 'Edit description',
        'new_item' => 'New description',
        'all_items' => 'All descriptions',
        'view_item' => 'View description',
        'search_items' => 'Search descriptions',
        'not_found' =>  'No descriptions Found',
        'not_found_in_trash' => 'No descriptions found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'descriptions',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'description'),
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
    register_post_type( 'description', $args );
}
add_action( 'init', 'description_init' );