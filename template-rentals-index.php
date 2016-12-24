<?php
/*
*  Template Name: Rental Index Template
*/

get_header('frontpage');


?>

    <!-- Page Head -->
    <?php get_template_part("banners/default_page_banner"); ?>

    <!-- Content -->
    <div class="container contents single">

    </section>    

<!--===================================
=            Rental Condos            =
====================================-->
        <div class="span12">
            <div class="main-wrap">
                <!-- Main Content -->
                <div id="RENTAL-CONDO-MAIN" class="main">

                    <div id="RENTAL-CONDO" class="inner-wrapper">

                    <h1 class="page-title text-center">Luxury Condos For Rent</h1>

                    <!--========================================
                    =            This is Moose Loop            =
                    =========================================-->
                    
                    <?php 

                        $args = array(
                            'post_type' => 'rental-condos',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'post_parent' => 0
                        );
                        $the_query = new WP_Query( $args ); 

                        // print_r( $the_query );

                    ?>

                
                    <article class="FLEX-CONTAINER" id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>


                            <?php 
                                // The Loop

                                if ( $the_query->have_posts() ) :

                                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                    <!-- <h3 class="post-title"><?php the_title(); ?></h3> -->
                                    <div class="row-fluid main-loop FLEX-ITEM">

                                        <?php

                                            /**
                                             *
                                             * CONDO RENTAL IDX LINKS ACF VARS
                                             *
                                             */ 

                                            $idx_link_text_1 = get_field('idx_link_text_1');
                                            $idx_link_text_2 = get_field('idx_link_text_2');
                                            $idx_link_text_3 = get_field('idx_link_text_3');

                                            $idx_url_1 = get_field('idx_url_1');
                                            $idx_url_2 = get_field('idx_url_2');
                                            $idx_url_3 = get_field('idx_url_3');

                                            /**
                                             *
                                             * CONDO RENTAL IDX PRICE LINKS ACF VARS
                                             *
                                             */

                                            $idx_price_link_text_1 = get_field('idx_price_link_text_1');
                                            $idx_price_link_text_2 = get_field('idx_price_link_text_2');
                                            $idx_price_link_text_3 = get_field('idx_price_link_text_3');

                                            $idx_price_url_1 = get_field('idx_price_url_1');
                                            $idx_price_url_2 = get_field('idx_price_url_2');
                                            $idx_price_url_3 = get_field('idx_price_url_3');   

                                            /**
                                             *
                                             * CONDO RENTAL IDX PRICE LINKS ACF VARS
                                             *
                                             */
                                            $condo_rental_type = get_field('condo_rental_type');
                                            $condo_rental_location = get_field('condo_rental_location');  

                                        ?>                                   

                                        <div class="">

                                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <a class="btn" href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                                Click To See All Luxury High Rise Condos
                                            </a>
                                        </div>  

                                        <div class="idx-block idx-link-block">
                                            
                                            <article class="idx-link">
                                                <a href="<?php echo $idx_url_1; ?>" title=""><?php echo $idx_link_text_1; ?></a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="<?php echo $idx_url_2; ?>" title=""><?php echo $idx_link_text_2; ?></a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="<?php echo $idx_url_3; ?>" title=""><?php echo $idx_link_text_3; ?></a>
                                            </article>
                                        </div>
                                        <div class="idx-block idx-price-block">
                                            <article class="idx-link">
                                                <a href="<?php echo $idx_price_url_1; ?>" title=""><?php echo $idx_price_link_text_1; ?></a>

                                            </article>
                                            <article class="idx-link">
                                                <a href="<?php echo $idx_price_url_2; ?>" title=""><?php echo $idx_price_link_text_2; ?></a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="<?php echo $idx_price_url_3; ?>" title=""><?php echo $idx_price_link_text_3; ?></a>
                                            </article>

                                        </div>
                                        <div class="idx-block idx-type-block">
                                            <article class="idx-link">
                                                <span class="item"><?php echo $condo_rental_type; ?></span> 
                                                <span class="item"><?php echo $condo_rental_location; ?></span> 
                                            </article>
                                           
                                        </div>

                                    </div>  <!-- END ROW FLUID -->      
                                        
                                <?php 
                                    endwhile;

                                endif;

                                // Reset Post Data

                                wp_reset_postdata();

                            ?>


                    </article>

 
                    </div> <!-- END RENTAL-CONDO -->

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End contents row 

<!-====  End of Rental Condos  ====-->


<!--========================================
=            Rental Home Single            =
=========================================-->

        <div class="span12">
            <div class="main-wrap">
                <!-- Main Content -->
                <div id="RENTAL-HOME-SINGLE-MAIN" class="main">

                    <div id="RENTAL-HOME-SINGLE" class="inner-wrapper">

                    <h1 class="page-title text-center">Homes for Rent</h1>

                    <!--========================================
                    =            This is Moose Loop            =
                    =========================================-->
                    
                    <?php 

                        $the_slug = 'east-ft-lauderdale';

                        $args = array(
                            'post_type' => 'rental-homes',
                            'name' => $the_slug,
                            'posts_per_page' => 1,
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'post_parent' => 0
                        );
                        $the_query = new WP_Query( $args ); 

                        // print_r( $the_query );

                    ?>

                
                    <article class="FLEX-CONTAINER" id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>


                            <?php 
                                // The Loop

                                if ( $the_query->have_posts() ) :

                                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                    <!-- <h3 class="post-title"><?php the_title(); ?></h3> -->
                                    <div class="row-fluid main-loop FLEX-ITEM">

                                        <div class="">

                                            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <a class="btn" href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                                Click To See All Luxury High Rise Condos
                                            </a>
                                        </div>  

                                        <h5 class="text-center">Search By Neighborhood</h5>
                                        <hr>
                                        <div class="search-block search-link-block">
                                            
                                            <article class="idx-link">
                                                <a href="#" title="">BeachFront</a>
                                                <a href="#" title="">BeachFront</a>
                                                <a href="#" title="">BeachFront</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">Ocean Access</a>
                                                <a href="#" title="">Ocean Access</a>
                                                <a href="#" title="">Ocean Access</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">Waterfront</a>
                                                <a href="#" title="">Waterfront</a>
                                                <a href="#" title="">Waterfront</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">Deep Water</a>
                                                <a href="#" title="">Deep Water</a>
                                                <a href="#" title="">Deep Water</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">Deep Water</a>
                                                <a href="#" title="">Deep Water</a>
                                                <a href="#" title="">Deep Water</a>
                                            </article>
                                        </div>

                                        <div class="idx-block idx-link-block">
                                            
                                            <article class="idx-link">
                                                <a href="#" title="">BeachFront</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">Ocean Access</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">Waterfront</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">Deep Water</a>
                                            </article>
                                        </div>
                                        <div class="idx-block idx-price-block">
                                            <article class="idx-link">
                                                <a href="#" title="">$2500-3500</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">$2500-3500</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">$2500-3500</a>
                                            </article>

                                        </div>
                                        <div class="idx-block idx-type-block">
                                            <article class="idx-link">
                                                <span class="item">Downtown</span> <span class="item">Condos</span> 
                                            </article>
                                           
                                        </div>

                                    </div>  <!-- END ROW FLUID -->      
                                        
                                <?php 
                                    endwhile;

                                endif;

                                // Reset Post Data

                                wp_reset_postdata();

                            ?>


                    </article>

 
                    </div> <!-- END RENTAL-HOME-SINGLE -->

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End contents row -->

<!--====  End of Rental Home Single  ====-->

<!--========================================
=            Rental Homes The Rest            =
=========================================-->

        <div class="span12">
            <div class="main-wrap">
                <!-- Main Content -->
                <div id="RENTAL-HOME-REST-MAIN" class="main">

                    <div id="RENTAL-HOME-REST" class="inner-wrapper">

                    <!-- <h1 class="page-title text-center">Home Rest For Rent</h1> -->

                    <!--========================================
                    =            This is Moose Loop            =
                    =========================================-->
                    
                    <?php 

                        $ID = 3627;

                        $args = array(
                            'post_type' => 'rental-homes',
                            'post__not_in' => array($ID),
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'post_parent' => 0
                        );
                        $the_query = new WP_Query( $args ); 

                        // print_r( $the_query );

                    ?>

                
                    <article class="FLEX-CONTAINER" id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>


                            <?php 
                                // The Loop

                                if ( $the_query->have_posts() ) :

                                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                    <!-- <h3 class="post-title"><?php the_title(); ?></h3> -->
                                    <div class="row-fluid main-loop FLEX-ITEM">

                                        <div class="">

                                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <a class="btn" href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                                Click To See All Luxury High Rise Condos
                                            </a>
                                        </div>  

                                        <div class="idx-block idx-link-block">
                                            
                                            <article class="idx-link">
                                                <a href="#" title="">BeachFront</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">Ocean Access</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">Waterfront</a>
                                            </article>
                                        </div>
                                        <div class="idx-block idx-price-block">
                                            <article class="idx-link">
                                                <a href="#" title="">$2500-3500</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">$2500-3500</a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="#" title="">$2500-3500</a>
                                            </article>

                                        </div>
                                        <div class="idx-block idx-type-block">
                                            
                                            <article class="idx-link">
                                                <span class="item">Downtown</span> <span class="item">Condos</span> 
                                            </article>
                                            
                                        </div>

                                    </div>  <!-- END ROW FLUID -->      
                                        
                                <?php 
                                    endwhile;

                                endif;

                                // Reset Post Data

                                wp_reset_postdata();

                            ?>


                    </article>

  
                    </div> <!-- END RENTAL-HOME-REST -->

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End contents row -->

<!--====  End of Rental Home Single  ====-->


    </div><!-- End Content -->

<?php get_footer(); ?>