<?php

/**
 *
 * Load Theme Styles
 *
 */


if ( ! function_exists( 'load_theme_styles' ) ) {
	/**
	 * Load Required CSS Styles
	 */
	function load_theme_styles() {
		if ( ! is_admin() ) {

			// TODO: update google fonts enqueue code
			// enqueue required fonts
			$protocol = is_ssl() ? 'https' : 'http';
			wp_enqueue_style( 'theme-roboto', "$protocol://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic&subset=latin,cyrillic" );
			wp_enqueue_style( 'theme-lato', "$protocol://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" );

			// register styles
			wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '2.2.2', 'all' );
			wp_register_style( 'responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), '2.2.2', 'all' );
			wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.1.0', 'all' );
			wp_register_style( 'pretty-photo-css', get_template_directory_uri() . '/js/prettyphoto/css/prettyPhoto.css', array(), '3.1.6', 'all' );
			wp_register_style( 'swipebox', get_template_directory_uri() . '/js/swipebox/css/swipebox.min.css', array(), '1.3.0', 'all' );
			wp_register_style( 'select2', get_template_directory_uri() . '/js/select2/select2.css', array(), '4.0.2', 'all' );
			wp_register_style( 'main-css', get_template_directory_uri() . '/css/main.css', array(), INSPIRY_THEME_VERSION, 'all' );
			wp_register_style( 'rtl-main-css', get_template_directory_uri() . '/css/rtl-main.css', array(), INSPIRY_THEME_VERSION, 'all' );
			wp_register_style( 'custom-responsive-css', get_template_directory_uri() . '/css/custom-responsive.css', array(), INSPIRY_THEME_VERSION, 'all' );
			wp_register_style( 'rtl-custom-responsive-css', get_template_directory_uri() . '/css/rtl-custom-responsive.css', array(), INSPIRY_THEME_VERSION, 'all' );
			wp_register_style( 'vc-css', get_template_directory_uri() . '/css/visual-composer.css', array(), INSPIRY_THEME_VERSION, 'all' );
			wp_register_style( 'parent-default', get_stylesheet_uri(), array(), INSPIRY_THEME_VERSION, 'all' );
			wp_register_style( 'parent-custom', get_template_directory_uri() . '/css/custom.css', array(), INSPIRY_THEME_VERSION, 'all' );

			// enqueue bootstrap styles
			wp_enqueue_style( 'bootstrap-css' );

			$disable_responsive_styles = get_option( 'theme_disable_responsive' );
			if ( $disable_responsive_styles != "true" ) {
				// enqueue bootstrap responsive styles
				wp_enqueue_style( 'responsive-css' );
			}

			// Font awesome css
			wp_enqueue_style( 'font-awesome' );

			// Flex Slider
			wp_dequeue_style( 'flexslider' );       // dequeue flexslider if it registered by some plugin
			wp_deregister_style( 'flexslider' );    // deregister flexslider if it registered by some plugin
			wp_enqueue_style(
				'flexslider',
				get_template_directory_uri() . '/js/flexslider/flexslider.css',
				array(),
				'2.6.0',
				'all'
			);

			// enqueue Pretty Photo styles
			wp_enqueue_style( 'pretty-photo-css' );

			// enqueue Swipe Box styles
			wp_enqueue_style( 'swipebox' );

			// enqueue select2 styles
			wp_enqueue_style( 'select2' );

			// enqueue Main styles
			wp_enqueue_style( 'main-css' );

			// if rtl is enabled
			if ( is_rtl() ) {
				wp_enqueue_style( 'rtl-main-css' );
			}

			if ( $disable_responsive_styles != "true" ) {
				// enqueue custom responsive styles
				wp_enqueue_style( 'custom-responsive-css' );
				if ( is_rtl() ) {
					wp_enqueue_style( 'rtl-custom-responsive-css' );
				}
			}

			if ( class_exists( 'Vc_Manager' ) ) {  // If visual composer plugin is installed
				wp_enqueue_style( 'vc-css' );
			}

			// default css
			wp_enqueue_style( 'parent-default' );

			// parent theme custom css
			wp_enqueue_style( 'parent-custom' );

			//Load Child Theme stylesheet
			wp_enqueue_style( 'moose-frame-style', get_stylesheet_uri(), '', '3.0' );

		}
	}

	add_action( 'wp_enqueue_scripts', 'load_theme_styles' );
}

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
 * Add Menu Support and register a custom menu
 */
	add_theme_support( 'menus' );
	register_nav_menus(
		array(
			'main-mobile-menu' => __( 'Main Mobile Menu', 'framework' )
		)
	);



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

		//Location: Header Breadcrumbs and Search bar
		register_sidebar( array(
			'name' => __( 'Header Search', 'framework' ),
			'id' => 'header-search',
			'description' => __( 'Widget area for property detail page sidebar.', 'framework' ),
			'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>'
		) );

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
	        'capability_type' => 'page',
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
	        'taxonomies'  => array( 'category' ),
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

	register_post_type(
	    'rentals',
	    array(
	        'hierarchical' => true,
	        'capability_type' => 'page',
	        'taxonomies'  => array( 'category' ),
	        'public' => true,
	        'rewrite' => array(
	            'slug'       => 'rentals',
	            'with_front' => false,
	        ),
	        'supports' => array(
	            'page-attributes', /* This will show the post parent field */
	            'title',
	            'editor',
	            'thumbnail'
	        ),
		    'labels' => array(
		        'name' => __( 'Rentals' ),
		        'singular_name' => __( 'Rental' ),
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

/**
 *
 * Filters for Rentals
 *
 */

add_filter('single_template', function($template) {

  $queried = get_queried_object();

  if ( $queried->post_type === 'rentals' ) { // only for this CPT
    // file name per OP requirements
    $file = 'rentals_';
    $file .= $queried->post_parent ? 'child' : 'parent';

    // using `locate_teplate` to be child theme friendly
    return locate_template("{$file}.php") ? : $template;
  }

  return $template;

});

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