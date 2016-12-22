<?php

/**
 *
 * Load Moose Functions
 *
 */

/**
 *
 * Adding Custom Rental post type
 *
 */
add_action( 'init', 'create_rental_post_type' );
function create_rental_post_type() {

	register_post_type(
	    'rental-homes',
	    array(
	        'hierarchical' => true,
	        'capability_type' => 'page',
	        'taxonomies'  => array( 'category' ),
	        'public' => true,
	        'rewrite' => array(
	            'slug'       => 'rental-homes',
	            'with_front' => false,
	        ),
	        'supports' => array(
	            'page-attributes', /* This will show the post parent field */
	            'title',
	            'editor',
	            'thumbnail'
	        ),
		    'labels' => array(
		        'name' => __( 'Rental Homes' ),
		        'singular_name' => __( 'Rental Home' ),
				'parent_item_colon' => '',
		        'parent' => 'Parent'		        
		    ),
		    // 'public' => true,
		    'has_archive' => true,	        
			        // Other arguments
			)
	);

	register_post_type(
	    'rental-condos',
	    array(
	        'hierarchical' => true,
	        'capability_type' => 'page',
	        'taxonomies'  => array( 'category' ),
	        'public' => true,
	        'rewrite' => array(
	            'slug'       => 'rental-condos',
	            'with_front' => false,
	        ),
	        'supports' => array(
	            'page-attributes', /* This will show the post parent field */
	            'title',
	            'editor',
	            'thumbnail'
	        ),
		    'labels' => array(
		        'name' => __( 'Rental Condos' ),
		        'singular_name' => __( 'Rental Condo' ),
				'parent_item_colon' => '',
		        'parent' => 'Parent'		        
		    ),
		    // 'public' => true,
		    'has_archive' => true	        
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

  if ( $queried->post_type === 'rental-condos' ) { // only for this CPT
    // file name per OP requirements
    $file = 'rental-condos_';
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

  if ( $queried->post_type === 'rental-homes' ) { // only for this CPT
    // file name per OP requirements
    $file = 'rental-homes_';
    $file .= $queried->post_parent ? 'child' : 'parent';

    // using `locate_teplate` to be child theme friendly
    return locate_template("{$file}.php") ? : $template;
  }

  return $template;

});
