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

/**
 *
 * Adding SVG to WP
 *
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg_thumb_display() {
  echo '
    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
      width: 100% !important; 
      height: auto !important; 
    }
  ';
}
add_action('admin_head', 'fix_svg_thumb_display');



/**
 *
 * Changing Excerpt Length
 *
 */
function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*********************************/
/* Change Search Button Text
/**************************************/
 
// Add to your child-theme functions.php
add_filter('get_search_form', 'my_search_form_text');
 
function my_search_form_text($text) {
     $text = str_replace('value="Search"', 'value="SITE SEARCH"', $text); //set as value the text you want
     return $text;
}











































