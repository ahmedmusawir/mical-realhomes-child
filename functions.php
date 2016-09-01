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
 * Adding Cutom Image Size
 *
 */
// add_theme_support( 'post-thumbnails' );
add_image_size( 'custom-post-index', 450, 300, true ); // Hard Crop Mode
// add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
// add_image_size( 'singlepost-thumb', 590, 9999 ); // Unlimited Height Mode


/**
 *
 * OverRiding Sidebars
 *
 */

if ( ! function_exists( 'inspiry_theme_sidebars' ) ) {
	/**
	 * Sidebars, Footer and other Widget areas
	 */
	function inspiry_theme_sidebars() {



		// Location: Sidebar Homes
		register_sidebar( array(
			'name' => __( 'Homes Sidebar', 'framework' ),
			'id' => 'homes-page-sidebar',
			'description' => __( 'Widget area for default homes template sidebar.', 'framework' ),
			'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>'
		) );
	
		// Location: Sidebar Condos
		// register_sidebar( array(
		// 	'name' => __( 'Condos Sidebar', 'framework' ),
		// 	'id' => 'condo-page-sidebar',
		// 	'description' => __( 'Widget area for default condos template sidebar.', 'framework' ),
		// 	'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
		// 	'after_widget' => '</section>',
		// 	'before_title' => '<h3 class="title">',
		// 	'after_title' => '</h3>'
		// ) );

		// Location: Sidebar for contact page
		register_sidebar( array(
			'name' => __( 'Codominium Sidebar', 'framework' ),
			'id' => 'condominium-sidebar',
			'description' => __( 'Widget area for contact page sidebar.', 'framework' ),
			'before_widget' => '<section class="widget clearfix %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>'
		) );

		// Location: Default Sidebar
		register_sidebar( array(
			'name' => __( 'General Sidebar', 'framework' ),
			'id' => 'general-sidebar',
			'description' => __( 'Widget area for default sidebar on news and post pages.', 'framework' ),
			'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>'
		) );		

		// Location: Sidebar Property
		// register_sidebar( array(
		// 	'name' => __( 'Property Sidebar', 'framework' ),
		// 	'id' => 'property-sidebar',
		// 	'description' => __( 'Widget area for property detail page sidebar.', 'framework' ),
		// 	'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
		// 	'after_widget' => '</section>',
		// 	'before_title' => '<h3 class="title">',
		// 	'after_title' => '</h3>'
		// ) );

		// Location: Sidebar Properties Listing
		// register_sidebar( array(
		// 	'name' => __( 'Property Listing Sidebar', 'framework' ),
		// 	'id' => 'property-listing-sidebar',
		// 	'description' => __( 'Widget area for property listing template sidebar.', 'framework' ),
		// 	'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
		// 	'after_widget' => '</section>',
		// 	'before_title' => '<h3 class="title">',
		// 	'after_title' => '</h3>'
		// ) );

		// Location: Sidebar dsIDX
		// register_sidebar( array(
		// 	'name' => __( 'dsIDX Sidebar', 'framework' ),
		// 	'id' => 'dsidx-sidebar',
		// 	'description' => __( 'Widget area for dsIDX related pages.', 'framework' ),
		// 	'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
		// 	'after_widget' => '</section>',
		// 	'before_title' => '<h3 class="title">',
		// 	'after_title' => '</h3>'
		// ) );

		// Location: Footer First Column
		register_sidebar( array(
			'name' => __( 'Footer First Column', 'framework' ),
			'id' => 'footer-first-column',
			'description' => __( 'Widget area for first column in footer.', 'framework' ),
			'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>'
		) );

		// Location: Footer Second Column
		register_sidebar( array(
			'name' => __( 'Footer Second Column', 'framework' ),
			'id' => 'footer-second-column',
			'description' => __( 'Widget area for second column in footer.', 'framework' ),
			'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>'
		) );

		// Location: Footer Third Column
		register_sidebar( array(
			'name' => __( 'Footer Third Column', 'framework' ),
			'id' => 'footer-third-column',
			'description' => __( 'Widget area for third column in footer.', 'framework' ),
			'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>'
		) );

		// Location: Footer Fourth Column
		register_sidebar( array(
			'name' => __( 'Footer Fourth Column', 'framework' ),
			'id' => 'footer-fourth-column',
			'description' => __( 'Widget area for fourth column in footer.', 'framework' ),
			'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>'
		) );


		// Location: Sidebar Agent
		// register_sidebar( array(
		// 	'name' => __( 'Agent Sidebar', 'framework' ),
		// 	'id' => 'agent-sidebar',
		// 	'description' => __( 'Sidebar widget area for agent detail page.', 'framework' ),
		// 	'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
		// 	'after_widget' => '</section>',
		// 	'before_title' => '<h3 class="title">',
		// 	'after_title' => '</h3>'
		// ) );

		// Location: Home Search Area
		// register_sidebar( array(
		// 	'name' => __( 'Home Search Area', 'framework' ),
		// 	'id' => 'home-search-area',
		// 	'description' => __( 'Widget area for only IDX Search Widget. Using this area means you want to display IDX search form instead of default search form.', 'framework' ),
		// 	'before_widget' => '<section id="home-idx-search" class="clearfix %2$s">',
		// 	'after_widget' => '</section>',
		// 	'before_title' => '<h3 class="home-widget-label">',
		// 	'after_title' => '</h3>'
		// ) );

		// Location: Property Search Template
		// register_sidebar( array(
		// 	'name' => __( 'Property Search Sidebar', 'framework' ),
		// 	'id' => 'property-search-sidebar',
		// 	'description' => __( 'Widget area for property search template with sidebar.', 'framework' ),
		// 	'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
		// 	'after_widget' => '</section>',
		// 	'before_title' => '<h3 class="title">',
		// 	'after_title' => '</h3>'
		// ) );

		// Create additional sidebar to use with visual composer if needed
		if ( class_exists( 'Vc_Manager' ) ) {

			// Additional Sidebars
			register_sidebars( 4, array(
				'name' => __( 'Additional Sidebar %d', 'framework' ),
				'description' => __( 'An extra sidebar to use with Visual Composer if needed.', 'framework' ),
				'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h3 class="title">',
				'after_title' => '</h3>'
			) );

		}

	}

	add_action( 'widgets_init', 'inspiry_theme_sidebars' );
}
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
	        'taxonomies'  => array( 'category' ),
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
	        'capability_type' => 'page',
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
