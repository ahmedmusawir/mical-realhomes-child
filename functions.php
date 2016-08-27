<?php

/**
 * Proper way to enqueue scripts and styles
 */
function moose_scripts() {
    // wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    // wp_enqueue_style( 'style-name', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );
    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/_js/wow.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-wow', get_stylesheet_directory_uri() . '/_js/wow.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-js', get_stylesheet_directory_uri() . '/_js/script.js', array(), '1.0.0', true );
    wp_enqueue_script( 'boot-js', get_stylesheet_directory_uri() . '/_js/bootstrap.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'moose_scripts' );


/**
 *
 * Adding Custom post type
 *
 */
add_action( 'init', 'create_post_type' );
function create_post_type() {

	register_post_type(
	    'south-florida-homes',
	    array(
	        'hierarchical' => true,
	        // 'capability_type' => 'page',
	        'public' => true,
	        'rewrite' => array(
	            'slug'       => 'south-florida-homes',
	            'with_front' => false,
	        ),
	        'supports' => array(
	            'page-attributes', /* This will show the post parent field */
	            'title',
	            'editor',
	            'thumbnail'
	        ),
		    'labels' => array(
		        'name' => __( 'South Florida Homes' ),
		        'singular_name' => __( 'South Florida Home' ),
				'parent_item_colon' => '',
		        'parent' => 'Parent'		        
		    ),
		    // 'public' => true,
		    'has_archive' => true,	        
			        // Other arguments
			)
	);

	register_post_type(
	    'south-florida-condos',
	    array(
	        'hierarchical' => true,
	        // 'capability_type' => 'page',
	        'public' => true,
	        'rewrite' => array(
	            'slug'       => 'south-florida-condos',
	            'with_front' => false,
	        ),
	        'supports' => array(
	            'page-attributes', /* This will show the post parent field */
	            'title',
	            'editor',
	            'thumbnail'
	        ),
		    'labels' => array(
		        'name' => __( 'South Florida Condos' ),
		        'singular_name' => __( 'South Florida Condo' ),
				'parent_item_colon' => '',
		        'parent' => 'Parent'		        
		    ),
		    // 'public' => true,
		    'has_archive' => true,	        
			        // Other arguments
			)
	);
}

/**
 *
 * Filter for Condos
 *
 */


add_filter('single_template', function($template) {

  $queried = get_queried_object();

  if ( $queried->post_type === 'south-florida-condos' ) { // only for this CPT
    // file name per OP requirements
    $file = 'south-florida-condos_';
    $file .= $queried->post_parent ? 'child' : 'parent';

    // using `locate_teplate` to be child theme friendly
    return locate_template("{$file}.php") ? : $template;
  }

  return $template;

});

/**
 *
 * Filters for Homes
 *
 */

add_filter('single_template', function($template) {

  $queried = get_queried_object();

  if ( $queried->post_type === 'south-florida-homes' ) { // only for this CPT
    // file name per OP requirements
    $file = 'south-florida-homes_';
    $file .= $queried->post_parent ? 'child' : 'parent';

    // using `locate_teplate` to be child theme friendly
    return locate_template("{$file}.php") ? : $template;
  }

  return $template;

});
