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


        <div class="span12">
            <div class="main-wrap">
                <!-- Main Content -->
                <div id="RENTAL-MAIN" class="main">

                    <div id="RENTAL-CONDO" class="inner-wrapper">

                    <h1 class="page-title text-center">Luxury Condos For Rent</h1>

                    <!--========================================
                    =            This is Moose Loop            =
                    =========================================-->
                    
                    <?php 

                        $args = array(
                            'post_type' => 'south-florida-homes',
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
                                                Downtown
                                            </article>
                                            <article class="idx-link">
                                                Condos
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

                    <!--====================================================
                    =            This is the theme default loop            =
                    =====================================================-->
                    
                        <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>
                                        <?php
                                        $title_display = get_post_meta( $post->ID, 'REAL_HOMES_page_title_display', true );
                                        if( $title_display != 'hide' ){
                                            ?>
                                            <h3 class="post-title"><?php //the_title(); ?></h3>
                                            <hr/>
                                            <?php
                                        }

                                        the_content();

                                        // WordPress Link Pages
                                        wp_link_pages(array('before' => '<div class="pages-nav clearfix">', 'after' => '</div>', 'next_or_number' => 'next'));
                                        ?>
                                </article>
                                <?php
                            endwhile;
                            comments_template();
                        endif;
                        ?>
                    </div>

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End contents row -->

    </div><!-- End Content -->

<?php get_footer(); ?>