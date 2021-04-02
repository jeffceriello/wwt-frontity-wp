<?php 
/*
* Creating a function to create our CPT
*/
 
 // Evets
add_action( 'init', 'create_case_studies' );
function create_case_studies() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => 'Case Studies',
                'singular_name' => 'Case Study',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Case Study',
                'edit' => 'Edit',
                'edit_item' => 'Edit Case Study',
                'new_item' => 'New Case Study',
                'view' => 'View',
                'view_item' => 'View Case Study',
                'search_items' => 'Search Case Studies',
                'not_found' => 'No Case Studies found',
                'not_found_in_trash' => 'No Case Studies found in Trash',
                'parent' => 'Parent Case Study'
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-portfolio',
            'has_archive' => true,
            'show_in_rest' => true
        )
    );
}