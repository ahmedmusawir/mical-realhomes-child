<?php
/*
*  SOUTH FLORIDA CONDO ARCHIVE PAGE
*/

get_header('frontpage');
?>

    <!-- Page Head -->
    <?php get_template_part("banners/default_page_banner"); ?>

    <!-- Content -->
    <div class="container contents single">

    <!--=============================================
    =            Moose Breadcrumbs Block            =
    ==============================================-->

    <section class="frontpage-top-widget row-fluid">

        <article class="span12 text-center">

            <?php
            //if ( ! dynamic_sidebar( 'frontpg-top-widget' ) ) :
            //endif;
            ?>
                
        </article>

    </section>    


        <div class="row">
            <div class="span12 main-wrap" id="FP-HOME-MAIN">
                <!-- Main Content -->
                <div class="main" id="FP-HOME-SINGLE">
                    <header id="frontpg-bird">

                    <div class="inner-wrapper">

                        <h1 class="page-title text-center">South Florida Condos</h1>

                     </header>   
                              
                    <!--========================================
                    =            This is Moose Loop            =
                    =========================================-->
                    
                    <?php 

                        $args = array(
                            'post_type' => 'south-florida-condos',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'post_parent' => 0
                        );
                        $the_query = new WP_Query( $args ); 

                        // print_r( $the_query );

                    ?>

                
                    <article id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>


                            <?php 
                                // The Loop

                                if ( $the_query->have_posts() ) :

                                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                    <!-- <h3 class="post-title"><?php the_title(); ?></h3> -->
                                    <!-- <div class="row-fluid main-loop FLEX-CONTAINER"> -->
                                    <div class="row-fluid main-loop">

                                        <div class="span3">
                                                
                                            <?php if ( has_post_thumbnail() ) : ?> 
                                                
                                                <div class="featured-img">

                                                    <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'custom-post-index', array('class' => 'img-responsive'));  ?></a>

                                                </div>
                                            <?php else : ?> 
                                               
                                                <a href="<?php the_permalink(); ?>" title=""><img class="img-responsive" src="/wp-content/uploads/2016/08/mical-default-img.jpg" alt=""></a>

                                            <?php endif; ?>
                                        
                                        </div>

                                        <div class="span9">

                                            <h3 class="post-title">
                                                <a id="<?php  echo get_the_id(); ?>" class="the-title" href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>
                                            <span class="rope-holder">
                                                <img id="img-<?php  echo get_the_id(); ?>" class="img-responsive" src="http://fortlauderdale-properties.com/wp-content/uploads/2016/12/the-rope-transparent-400.png" alt="">    
                                            </span>
                                            <?php the_excerpt(); ?>     
                                            <span class="btn-holder">
                                                <a class="btn btn-info" href="<?php the_permalink(); ?>" style="text-decoration: none;">SEE ALL CONDOS</a>
                                            </span>
                                        </div>  <!-- END OF SPAN9 -->  

                                        <!--==================================================
                                        =            South Florida Link Variables            =
                                        ===================================================-->
                                        
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
                                             * HOME RENTAL IDX LINKS ACF VARS
                                             *
                                             */ 

                                            $idx_link_text_1 = get_field('idx_link_text_1');
                                            $idx_link_text_2 = get_field('idx_link_text_2');

                                            $idx_url_1 = get_field('idx_url_1');
                                            $idx_url_2 = get_field('idx_url_2');

                                        

                                            /**
                                             *
                                             * HOME RENTAL IDX PRICE LINKS ACF VARS
                                             *
                                             */

                                            $R_idx_price_link_text_1 = get_field('R_idx_price_link_text_1');
                                            $R_idx_price_link_text_2 = get_field('R_idx_price_link_text_2');
                                            $R_idx_price_link_text_3 = get_field('R_idx_price_link_text_3');

                                            $R_idx_price_url_1 = get_field('R_idx_price_url_1');
                                            $R_idx_price_url_2 = get_field('R_idx_price_url_2');
                                            $R_idx_price_url_3 = get_field('R_idx_price_url_3');   


                                            /**
                                             *
                                             * HOME RENTAL IDX PRICE LINKS ACF VARS
                                             *
                                             */

                                            $home_rental_type = get_field('home_rental_type');
                                            $home_rental_type_2 = get_field('home_rental_type_2');
                                            $home_rental_type_3 = get_field('home_rental_type_3');
                                            $home_rental_type_link = get_field('home_rental_type_link');
                                            $home_rental_type_link_2 = get_field('home_rental_type_link_2');
                                            $home_rental_type_link_3 = get_field('home_rental_type_link_3');


                                         ?>
                                        
                                        <!--====  End of South Florida Link Variables  ====-->
                                        
                                            
                                        <div class="span12 FLEX-CONTAINER">
                                        <!--======================================================
                                        =            South Florida Homes Links Block             =
                                        =======================================================-->
                                        <section class="FLEX-ITEM">
                                            <h5 class="text-center">Quick Search For Sale</h5>
                                            <!-- <hr> -->
                                            <div class="search-block search-link-block">
                                                
                                                <article class="idx-link">
                                                    <a href="<?php echo $neighborhood_url_1;  ?>" title=""><?php echo $neighborhood_link_text_1; ?></a>
                                                    <a href="<?php echo $neighborhood_url_6;  ?>" title=""><?php echo $neighborhood_link_text_6; ?></a>
                                                    <a href="<?php echo $neighborhood_url_11;  ?>" title=""><?php echo $neighborhood_link_text_11; ?></a>
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
                                            <div class="idx-block idx-link-block">
                                                
                                                <article class="idx-link">
                                                    <a href="<?php echo $idx_url_3; ?>" title=""><?php echo $idx_link_text_1; ?></a>
                                                </article>
                                                <article class="idx-link">
                                                    <a href="<?php echo $idx_url_4; ?>" title=""><?php echo $idx_link_text_2; ?></a>
                                                </article>

                                            </div>
                                            <!-- <hr> -->
                                            <h5 class="text-center quick-rental-header">Quick Search For Rentals</h5>
                                            <!-- <hr> -->
                                            <div class="idx-block idx-price-block">
                                                <article class="idx-link">
                                                    <a href="<?php echo $R_idx_price_url_1; ?>" title=""><?php echo $R_idx_price_link_text_1; ?></a>
                                                </article>
                                                <article class="idx-link">
                                                    <a href="<?php echo $R_idx_price_url_2; ?>" title=""><?php echo $R_idx_price_link_text_2; ?></a>
                                                </article>
                                                <article class="idx-link">
                                                    <a href="<?php echo $R_idx_price_url_3; ?>" title=""><?php echo $R_idx_price_link_text_3; ?></a>
                                                </article>

                                            </div>                                            
                                            <div class="idx-block idx-type-block">
                                                <article class="idx-link">

                                                    <a href="<?php echo $home_rental_type_link; ?>" title=""><span class="item"><?php echo $home_rental_type; ?></span></a> 
                                                    <a href="<?php echo $home_rental_type_link_2; ?>" title=""><span class="item"><?php echo $home_rental_type_2; ?></span></a> 
                                                    <a href="<?php echo $home_rental_type_link_3; ?>" title=""><span class="item"><?php echo $home_rental_type_3; ?></span></a> 

                                                </article>
                                               
                                            </div>

                                        </section> <!-- END FLEX ITEM -->

                                        </div> <!-- End FLEX-CONTAINER Safari Bugfix-->
                                        

                                        <!--====  End of South-florida-homes Links Block Ends  ====-->
                                        

                                        
                                    </div>  <!-- END ROW FLUID -->      
                                        
                                <?php 
                                    endwhile;

                                endif;

                                // Reset Post Data

                                wp_reset_postdata();

                            ?>


                    </article>

                   
                    </div> <!-- END inner-wrapper -->

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End contents row -->

    </div><!-- End Content -->

    <script type="text/javascript" charset="utf-8">

        jQuery(document).ready(function($) {

            
            $('.the-title').each(function() {
                // alert( this.id );
                // this.id = articleID;

                var articleID = this.id;
                // console.log(articleID);

                anchorID = "#" + articleID;
                console.log(anchorID);

                imageID = "#img-" + articleID;
                console.log(imageID);

                titleLength = $( anchorID ).width() + 90;
                console.log(titleLength + "px");

                $(imageID).width(titleLength); 

            });            
              
        });    

    </script>


<?php get_footer(); ?>






































