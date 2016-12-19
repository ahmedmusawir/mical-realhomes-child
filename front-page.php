<?php
/*
*  Template Name: 
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

         <h3>Verbage Verbage Verbage Verbage Verbage Verbage Verbage Verbage </h3>
         <h3>Verbage Verbage Verbage Verbage Verbage Verbage Verbage Verbage </h3>
         <h3>Verbage Verbage Verbage Verbage </h3>
            
        </article>

    </section>    


        <div class="row">
            <div class="span12 main-wrap">
                <!-- Main Content -->
                <div class="main">
                    <header id="frontpg-bird">
                        <div class="inner-wrapper">
                        <!-- <h1 class="page-title text-center">South Florida Homes</h1> -->
                        <img class="img-responsive hidden-phone" src="http://fortlauderdale-properties.com/wp-content/uploads/2016/12/frontpg-head-lines-1476x163.jpg" alt="">
                        <img class="img-responsive visible-phone" src="http://fortlauderdale-properties.com/wp-content/uploads/2016/12/frontpg-head-lines-mobile-600.jpg" alt="">

                    </header>
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

                
                    <article id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>


                            <?php 
                                // The Loop

                                if ( $the_query->have_posts() ) :

                                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                    <!-- <h3 class="post-title"><?php the_title(); ?></h3> -->
                                    <div class="row-fluid main-loop">

                                        <div class="span5">
                                                
                                            <?php if ( has_post_thumbnail() ) : ?> 
                                                
                                                <div class="featured-img">
                                                    <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'custom-post-index', array('class' => 'img-responsive'));  ?></a>

                                                </div>
                                            <?php else : ?> 
                                               
                                                    <a href="<?php the_permalink(); ?>" title=""><img class="img-responsive" src="/wp-content/uploads/2016/08/mical-default-img.jpg" alt=""></a>


                                            <?php endif; ?>
                                        
                                        </div>

                                        <div class="span7">

                                            <h3 class="post-title text-center"><a href="<?php the_permalink(); ?>" style="text-decoration: none;"><?php the_title(); ?></a></h3>
                                            <span class="btn-holder">
                                                <img class="img-responsive" src="http://fortlauderdale-properties.com/wp-content/uploads/2016/12/title-underline-img.jpg" alt="">
                                            </span>
                                            <?php the_excerpt(); ?>     
                                            <span class="btn-holder">
                                                <a class="btn btn-info" href="<?php the_permalink(); ?>" style="text-decoration: none;">SEE ALL HOMES</a>
                                            </span>
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