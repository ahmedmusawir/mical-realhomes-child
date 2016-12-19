<?php
/**
 *
 * Template Name: Moose Test Template
 *
 */

get_header();
?>

    <!-- Page Head -->
    <?php get_template_part("banners/default_page_banner"); ?>

    <!-- Content -->
    <div class="container contents single">
        <div class="row">
            <div class="span9 main-wrap">
                <!-- Main Content -->
                <div class="main">

                    <div class="inner-wrapper">

<h1>This is a list of all Registered Custom Post Types</h1>                       
<?php
   $args = array(
       'public'   => true,
       '_builtin' => false,
    );

    $output = 'names'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'

    $post_types = get_post_types( $args, $output, $operator ); 

    foreach ( $post_types  as $post_type ) {

       echo '<p>' . $post_type . '</p>';
    }

?>

<hr>
<h1>This is a List of Sub Categories of Florida Homes</h1>
<!-- florida-homes -->
<?php 


    $args = array('child_of' => 2815 );
    $categories = get_categories( $args );
    foreach($categories as $category) { 
        echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
        echo '<p> Description:'. $category->description . '</p>';
        echo '<p> Post Count: '. $category->count . '</p>';  
    }

?>

<h1>This is to get Taxonomy list of a custom post type</h1>

<?php 
$cat_args = array(
    'orderby'       => 'term_id', 
    'order'         => 'ASC',
    'hide_empty'    => true, 
);

$terms = get_terms('home-city', $cat_args);

    foreach($terms as $taxonomy){
         $term_slug = $taxonomy->slug;
         $term_link = get_term_link( $taxonomy->slug, $taxonomy = 'home-city' );


         echo $term_slug;
         echo $term_link;

    // $tax_post_args = array(
    //       'post_type' => 'florida-homes',
    //       'posts_per_page' => 999,
    //       'order' => 'ASC',
    //       'tax_query' => array(
    //             array(
    //                  'taxonomy' => 'home-city',
    //                  'field' => 'slug',
    //                  'terms' => '$term_slug'
    //             )
    //        )
    // );

    // $tax_post_qry = new WP_Query($tax_post_args);

    // if($tax_post_qry->have_posts()) :
    //      while($tax_post_qry->have_posts()) :
    //             $tax_post_qry->the_post();

    //             the_title();

    //       endwhile;

    // else :
    //       echo "No posts";
    // endif;
} //end foreach loop




 ?>
                    </div>

                </div><!-- End Main Content -->

            </div> <!-- End span9 -->

            <?php get_sidebar('pages'); ?>

        </div><!-- End contents row -->

    </div><!-- End Content -->

<?php get_footer(); ?>