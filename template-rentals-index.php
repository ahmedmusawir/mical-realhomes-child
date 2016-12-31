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
                                            $condo_rental_type_link = get_field('condo_rental_type_link');
                                            $condo_rental_location = get_field('condo_rental_location'); 
                                            $condo_rental_location_link = get_field('condo_rental_location_link'); 

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
                                                <a href="<?php echo $condo_rental_type_link; ?>" title=""><span class="item"><?php echo $condo_rental_type; ?></span></a> 
                                                <a href="<?php echo $condo_rental_location_link; ?>" title=""><span class="item"><?php echo $condo_rental_location; ?></span></a> 
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

                                    <?php 

                                      /**
                                         *
                                         * HOME RENTAL FT LAUDERDALE NEIGHBORHOOD ACF VARS
                                         *
                                         */
                                        
                                        //LINK SET 1
                                        $neighborhood_link_text_1 = get_field('neighborhood_link_text_1');
                                        $neighborhood_url_1 = get_field('neighborhood_url_1');  

                                        $neighborhood_link_text_6 = get_field('neighborhood_link_text_6');
                                        $neighborhood_url_6 = get_field('neighborhood_url_6');  

                                        $neighborhood_link_text_11 = get_field('neighborhood_link_text_11');
                                        $neighborhood_url_11 = get_field('neighborhood_url_11');  


                                        //LINK SET 2
                                        $neighborhood_link_text_2 = get_field('neighborhood_link_text_2');
                                        $neighborhood_url_2 = get_field('neighborhood_url_2');  

                                        $neighborhood_link_text_7 = get_field('neighborhood_link_text_7');
                                        $neighborhood_url_7 = get_field('neighborhood_url_7');  

                                        $neighborhood_link_text_12 = get_field('neighborhood_link_text_12');
                                        $neighborhood_url_12 = get_field('neighborhood_url_12');  

                                        //LINK SET 3
                                        $neighborhood_link_text_3 = get_field('neighborhood_link_text_3');
                                        $neighborhood_url_3 = get_field('neighborhood_url_3');  

                                        $neighborhood_link_text_8 = get_field('neighborhood_link_text_8');
                                        $neighborhood_url_8 = get_field('neighborhood_url_8');  

                                        $neighborhood_link_text_13 = get_field('neighborhood_link_text_13');
                                        $neighborhood_url_13 = get_field('neighborhood_url_13');  

                                        //LINK SET 4
                                        $neighborhood_link_text_4 = get_field('neighborhood_link_text_4');
                                        $neighborhood_url_4 = get_field('neighborhood_url_4');  

                                        $neighborhood_link_text_9 = get_field('neighborhood_link_text_9');
                                        $neighborhood_url_9 = get_field('neighborhood_url_9');  

                                        $neighborhood_link_text_14 = get_field('neighborhood_link_text_14');
                                        $neighborhood_url_14 = get_field('neighborhood_url_14');  

                                        //LINK SET 5
                                        $neighborhood_link_text_5 = get_field('neighborhood_link_text_5');
                                        $neighborhood_url_5 = get_field('neighborhood_url_5');  

                                        $neighborhood_link_text_10 = get_field('neighborhood_link_text_10');
                                        $neighborhood_url_10 = get_field('neighborhood_url_10');  

                                        $neighborhood_link_text_15 = get_field('neighborhood_link_text_15');
                                        $neighborhood_url_15 = get_field('neighborhood_url_15');  


                                            /**
                                             *
                                             * HOME RENTAL IDX LINKS ACF VARS
                                             *
                                             */ 

                                            $idx_link_text_1 = get_field('idx_link_text_1');
                                            $idx_link_text_2 = get_field('idx_link_text_2');
                                            $idx_link_text_3 = get_field('idx_link_text_3');
                                            $idx_link_text_4 = get_field('idx_link_text_4');

                                            $idx_url_1 = get_field('idx_url_1');
                                            $idx_url_2 = get_field('idx_url_2');
                                            $idx_url_3 = get_field('idx_url_3');
                                            $idx_url_4 = get_field('idx_url_4');

                                            /**
                                             *
                                             * HOME RENTAL IDX PRICE LINKS ACF VARS
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
                                             * HOME RENTAL IDX PRICE LINKS ACF VARS
                                             *
                                             */

                                            $home_rental_type = get_field('home_rental_type');
                                            $home_rental_type_link = get_field('home_rental_type_link');
                                            $home_rental_location = get_field('home_rental_location'); 
                                            $home_rental_location_link = get_field('home_rental_location_link');


                                    ?>

                                        <div class="">

                                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <a class="btn" href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                                Click To See All Luxury High Rise Condos
                                            </a>
                                        </div>  

                                        <h5 class="text-center">Search By Neighborhood</h5>
                                        <hr>
                                        <div class="search-block search-link-block">
                                            
                                            <article class="idx-link">
                                                <a href="<?php echo $neighborhood_url_1;  ?>" title=""><?php echo $neighborhood_link_text_1; ?></a>
                                                <a href="<?php echo $neighborhood_url_6;  ?>" title=""><?php echo $neighborhood_link_text_6; ?></a>
                                                <a href="<?php echo $neighborhood_url_1;  ?>" title=""><?php echo $neighborhood_link_text_1; ?></a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="<?php echo $neighborhood_url_2;  ?>" title=""><?php echo $neighborhood_link_text_2; ?></a>
                                                <a href="<?php echo $neighborhood_url_7;  ?>" title=""><?php echo $neighborhood_link_text_7; ?></a>
                                                <a href="<?php echo $neighborhood_url_12;  ?>" title=""><?php echo $neighborhood_link_text_12; ?></a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="<?php echo $neighborhood_url_3;  ?>" title=""><?php echo $neighborhood_link_text_3; ?></a>
                                                <a href="<?php echo $neighborhood_url_8;  ?>" title=""><?php echo $neighborhood_link_text_8; ?></a>
                                                <a href="<?php echo $neighborhood_url_13;  ?>" title=""><?php echo $neighborhood_link_text_13; ?></a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="<?php echo $neighborhood_url_4;  ?>" title=""><?php echo $neighborhood_link_text_4; ?></a>
                                                <a href="<?php echo $neighborhood_url_9;  ?>" title=""><?php echo $neighborhood_link_text_9; ?></a>
                                                <a href="<?php echo $neighborhood_url_14;  ?>" title=""><?php echo $neighborhood_link_text_14; ?></a>
                                            </article>
                                            <article class="idx-link">
                                                <a href="<?php echo $neighborhood_url_5;  ?>" title=""><?php echo $neighborhood_link_text_5; ?></a>
                                                <a href="<?php echo $neighborhood_url_10;  ?>" title=""><?php echo $neighborhood_link_text_10; ?></a>
                                                <a href="<?php echo $neighborhood_url_15;  ?>" title=""><?php echo $neighborhood_link_text_15; ?></a>
                                            </article>
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
                                            <article class="idx-link">
                                                <a href="<?php echo $idx_url_4; ?>" title=""><?php echo $idx_link_text_4; ?></a>
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
                                                <!-- <span class="item"><?php echo $home_rental_type; ?></span>  -->
                                                <!-- <span class="item"><?php echo $home_rental_location; ?></span>  -->
                                                <a href="<?php echo $home_rental_type_link; ?>" title=""><span class="item"><?php echo $home_rental_type; ?></span></a> 
                                                <a href="<?php echo $home_rental_location_link; ?>" title=""><span class="item"><?php echo $home_rental_location; ?></span></a> 

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
                        // $the_slug = 'east-ft-lauderdale';
                        

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

                                        <?php 

                                            /**
                                             *
                                             * HOME RENTAL IDX LINKS ACF VARS
                                             *
                                             */ 

                                            $idx_link_text_1 = get_field('idx_link_text_1');
                                            $idx_link_text_2 = get_field('idx_link_text_2');
                                            $idx_link_text_3 = get_field('idx_link_text_3');
                                            $idx_link_text_4 = get_field('idx_link_text_4');

                                            $idx_url_1 = get_field('idx_url_1');
                                            $idx_url_2 = get_field('idx_url_2');
                                            $idx_url_3 = get_field('idx_url_3');
                                            $idx_url_4 = get_field('idx_url_4');

                                            /**
                                             *
                                             * HOME RENTAL IDX PRICE LINKS ACF VARS
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
                                             * HOME RENTAL IDX PRICE LINKS ACF VARS
                                             *
                                             */

                                            $home_rental_type = get_field('home_rental_type');
                                            $home_rental_type_link = get_field('home_rental_type_link');
                                            $home_rental_location = get_field('home_rental_location'); 
                                            $home_rental_location_link = get_field('home_rental_location_link');                                            

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
                                            <article class="idx-link">
                                                <a href="<?php echo $idx_url_4; ?>" title=""><?php echo $idx_link_text_4; ?></a>
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
                                                <!-- <span class="item"><?php echo $home_rental_type; ?></span>  -->
                                                <!-- <span class="item"><?php echo $home_rental_location; ?></span>   -->
                                                <a href="<?php echo $home_rental_type_link; ?>" title=""><span class="item"><?php echo $home_rental_type; ?></span></a> 
                                                <a href="<?php echo $home_rental_location_link; ?>" title=""><span class="item"><?php echo $home_rental_location; ?></span></a> 

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