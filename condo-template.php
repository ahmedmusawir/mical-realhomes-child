<?php
/**
 *
 * Template Name: Moose Condo Template
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

                    <div class="inner-wrapper" >
                        
                       <article class="clearfix"> 
                        <div class="row">
                          <div class="span8">
                           <h2>Anything Goes Here</h2>
                            <div class="row">
                              <div class="span4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                              <div class="span4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            </div>
                          </div>
                        </div>
                       </article> 

                        <h1>This is a List of Sub Categories of Florida Homes</h1>
                        <!-- florida-homes -->
                        <?php 


                            $args = array('child_of' => 2818 );
                            $categories = get_categories( $args );
                            // foreach($categories as $category) { 
                            //     echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
                            //     echo '<p> Description:'. $category->description . '</p>';
                            //     echo '<p> Post Count: '. $category->count . '</p>';  
                            // }

                        ?>    
                        
                        <?php foreach($categories as $category): ?>    
                          <a href="<?php echo get_category_link( $category->term_id ); ?> " >
                            <?php //if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>
                            <?php if (function_exists('z_taxonomy_image')) z_taxonomy_image( $category->term_id ); ?>
                          </a>
                            <p>Category: <a href="<?php echo get_category_link( $category->term_id ); ?> " ><?php echo $category->name ?></a> </p>
                            <p> Description: <?php echo $category->description; ?></p>
                            <p> Post Count: <?php echo $category->count; ?></p>  

                        <?php endforeach; ?>               


                    </div>

                </div><!-- End Main Content -->

            </div> <!-- End span9 -->

            <?php get_sidebar('pages'); ?>

        </div><!-- End contents row -->

    </div><!-- End Content -->

<?php get_footer(); ?>