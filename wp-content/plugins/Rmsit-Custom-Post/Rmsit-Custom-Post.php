<?php
/*
Plugin Name: Rmsit-Custom-Post
Plugin URI: http://www.themeonlab.com
Description: Declares a plugin that will create a custom post type
Version: 1.0
Author: Themeonlab Team
Author URI: http://www.themeonlab.com
License: GPLv2
*/

//=========================================
// Testimonial Post Type
//=========================================	
add_action( 'init', 'register_testimonial_post_type' );
function register_testimonial_post_type() {
   register_post_type( 'testimonial',
		array(
			'labels' => array(
				'name'			=> __('Testimonial',"rms"),
				'singular_name' => __('Testimonial',"rms"),
				'add_new'		=> __('Add Testimonial',"rms"),
				'add_new_item'	=> __('Add Testimonial',"rms"),
				'edit_item'		=> __('Edit Testimonial',"rms"),
				'new_item'		=> __('New Testimonial',"rms"),
				'not_found'		=> __('No Testimonial found',"rms"),
				'not_found_in_trash' => __('No Testimonial found in Trash',"rms"),
				'menu_name'		=> __('Testimonial',"rms"),
			),
			'description' => 'Manipulating with our Client testimonial',
			'public' => true,
			'show_in_nav_menus' => true,
			'supports' => array(
				'title',
				'thumbnail',
				'editor',
				'page-attributes',
			),
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 37,
			'has_archive' => true,
                        'menu_icon' => 'dashicons-testimonial',
			'query_var' => true,
			'rewrite' => array('slug' => 'testimonial'),
			'capability_type' => 'post',
			'map_meta_cap'=>true
			
		)
	);	
}
//=========================================
// Team Post Type
//=========================================	
add_action( 'init', 'register_team_post_type' );
function register_team_post_type() {
   register_post_type( 'team',
		array(
			'labels' => array(
				'name'			=> __('Our Team',"rms"),
				'singular_name' => __('Our Team',"rms"),
				'add_new'		=> __('Add Team Member',"rms"),
				'add_new_item'	=> __('Add Team Member',"rms"),
				'edit_item'		=> __('Edit Team Member',"rms"),
				'new_item'		=> __('New Team Member',"rms"),
				'not_found'		=> __('No Member found',"rms"),
				'not_found_in_trash' => __('No Team Member found in Trash',"rms"),
				'menu_name'		=> __('Our Team',"rms"),
			),
			'description' => 'Manipulating with our team',
			'public' => true,
			'show_in_nav_menus' => true,
			'supports' => array(
				'title',
				'thumbnail',
				'editor',
				'page-attributes',
			),
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 34,
			'has_archive' => true,
                        'menu_icon' => 'dashicons-groups',
			'query_var' => true,
			'rewrite' => array('slug' => 'team'),
			'capability_type' => 'post',
			'map_meta_cap'=>true
			
		)
	);	
}
//=========================================
// Faq Post Type
//=========================================	
add_action( 'init', 'register_faq_post_type' );
function register_faq_post_type() {
   register_post_type( 'faq',
		array(
			'labels' => array(
				'name'			=> __('Faq',"rms"),
				'singular_name' => __('Faq',"rms"),
				'add_new'		=> __('Add Faq',"rms"),
				'add_new_item'	=> __('Add Faq',"rms"),
				'edit_item'		=> __('Edit Faq',"rms"),
				'new_item'		=> __('New Faq',"rms"),
				'not_found'		=> __('No Faq found',"rms"),
				'not_found_in_trash' => __('No Faq found in Trash',"rms"),
				'menu_name'		=> __('Faq',"rms"),
			),
			'description' => 'Manipulating with faq',
			'public' => true,
			'show_in_nav_menus' => true,
			'supports' => array(
				'title',
				'thumbnail',
				'editor',
				'page-attributes',
			),
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 34,
			'has_archive' => true,
            'menu_icon' => 'dashicons-editor-help',
			'query_var' => true,
			'rewrite' => array('slug' => 'faq'),
			'capability_type' => 'post',
			'map_meta_cap'=>true
		)
	);	
}
//=========================================
// Past Event Post Type
//=========================================	
add_action( 'init', 'register_event_post_type' );
function register_event_post_type() {
   register_post_type( 'event',
		array(
			'labels' => array(
				'name'			=> __('Past Event',"rms"),
				'singular_name' => __('Past Event',"rms"),
				'add_new'		=> __('Add Past Event',"rms"),
				'add_new_item'	=> __('Add Past Event',"rms"),
				'edit_item'		=> __('Edit Past Event',"rms"),
				'new_item'		=> __('New Past Event',"rms"),
				'not_found'		=> __('No Past Event found',"rms"),
				'not_found_in_trash' => __('No Past Event found in Trash',"rms"),
				'menu_name'		=> __('Past Event',"rms"),
			),
			'description' => 'Manipulating with faq',
			'public' => true,
			'show_in_nav_menus' => true,
			'supports' => array(
				'title',
				'thumbnail',
				'page-attributes',
			),
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 34,
			'has_archive' => true,
            'menu_icon' => 'dashicons-dashboard',
			'query_var' => true,
			'rewrite' => array('slug' => 'event'),
			'capability_type' => 'post',
			'map_meta_cap'=>true
		)
	);	
}
//=========================================
// Schedule Post Type
//=========================================
function evential_create_post_type() {
    $labels = array( 
        'name' => __( 'Schedule',"rms" ),
        'singular_name' => __( 'Schedule',"rms" ),
        'add_new' => __( 'New Schedule',"rms" ),
        'add_new_item' => __( 'Add New Schedule',"rms" ),
        'edit_item' => __( 'Edit Schedule',"rms" ),
        'new_item' => __( 'New Schedule',"rms" ),
        'view_item' => __( 'View Schedule',"rms" ),
        'search_items' => __( 'Search Schedule',"rms" ),
        'not_found' =>  __( 'No Schedule Found',"rms" ),
        'not_found_in_trash' => __( 'No Schedule found in Trash',"rms" ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt',
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
            'title', 
            'editor', 
            'excerpt'
        ),
    );
    register_post_type( 'schedule', $args );
} 
add_action( 'init', 'evential_create_post_type' );

// register a taxonomy called 'Animal Family'
function evential_register_taxonomy() {
    register_taxonomy( 'schedule_cat', 'schedule',
        array(
            'labels' => array(
                'name'              => 'Schedule Days',
                'singular_name'     => 'Schedule Category',
                'search_items'      => 'Search Schedule Days',
                'all_items'         => 'All Schedule Days',
                'edit_item'         => 'Edit Schedule Days',
                'update_item'       => 'Update Schedule Days',
                'add_new_item'      => 'Add New Schedule Days',
                'new_item_name'     => 'New Schedule Day Name',
                'menu_name'         => 'Schedule Day',
            ),
            'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'rewrite' => array( 'slug' => 'schedule-work' ),
            'show_admin_column' => true
        )
    );
}
add_action( 'init', 'evential_register_taxonomy' );