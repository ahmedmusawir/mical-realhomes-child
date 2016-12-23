<?php
/*
*   Template Name: Condo Rental Parent Template
*/

get_header();
?>

    <!-- Page Head -->
    <?php get_template_part("banners/default_page_banner"); ?>
<!-- <h1>Home Parent (Condo city Template)</h1> -->
    <!-- Content -->
    <div class="container contents single">

    <!--=============================================
    =            Moose Breadcrumbs Block            =
    ==============================================-->

    <section class="bread-search-block row-fluid">

        <article class="span8 text-center">

            <div class="breadcrumbs pull-left" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
            
        </article>
        <article class="span4">

            <?php //echo get_search_form(); ?>
            
            <?php echo do_shortcode('[autocomplete-post-search]'); ?>
      
            
        </article>


    </section>    

    
        <div class="row">
            <?php //get_sidebar('condominium'); ?>

            <div class="span12 main-wrap">
                <!-- Main Content -->
                <div id="sf-condo-parent" class="main">


                    <div class="inner-wrapper">
                    <h1 class="page-title text-center"><?php wp_title(''); ?></h1>
                   
 
                    <!--====================================================
                    =            This is the theme default loop            =
                    =====================================================-->
                    
                        <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post();
                        ?>

                   
                        <?php if ( has_post_thumbnail() ) : ?> 
                            
                            <div class="page-top-img">
                                <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'full', array('class' => 'img-responsive'));  ?></a>

                            </div>

                        <?php endif; ?>

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

 
                    <!--========================================
                    =            This is Moose Loop            =
                    =========================================-->
                    
                    <?php 

                        $args = array(
                            'post_type' => 'rental-condos',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'post_parent' => get_the_ID()
                        );
                        $the_query = new WP_Query( $args ); 

                        // print_r( $the_query );

                    ?>        
                    
                   <article id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>
 
                   <?php 
                        // The Loop

                        if ( $the_query->have_posts() ) :

                            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                        <section class="">
                    
                            <article class="col-md-moose">
                                    <link rel="stylesheet" type="text/css" href="/wp-content/themes/mical-realhomes-child/_masonry-css/style.css">
                                    <link rel="stylesheet" type="text/css" href="/wp-content/themes/mical-realhomes-child/_masonry-css/media_query.css">

                                <div id="masonry-grid" class="">


                                    <div class="grid-sizer"></div>

                                    <div class="grid-item">
                                        <article class="content-block">
                                        
                                            <h3 class="post-title text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                            <!-- <img src="http://lorempixel.com/200/100/city/1" class="img-thumbnail img-responsive"> -->
                                            <?php if ( has_post_thumbnail() ) : ?> 
                                                
                                                <div class="featured-img">
                                                    <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'custom-post-index', array('class' => 'img-responsive'));  ?></a>

                                                </div>
                                            <?php else : ?> 
                                               
                                                    <a href="<?php the_permalink(); ?>" title=""><img class="img-responsive" src="/wp-content/uploads/2016/08/mical-default-img.jpg" alt=""></a>

                                            <?php endif; ?>

                                            <!-- <p> -->

                                                <!-- <hr/>    -->
                                                                           
                                                <?php the_excerpt(); ?>     
                                                <a class="pull-right" href="<?php the_permalink(); ?>">Read More ...</a>     

                                            <!-- </p> -->
                                        </article>
                                    </div>

                       <?php 
                            endwhile;

                        endif;

                        // Reset Post Data

                        wp_reset_postdata();

                    ?>


                                <script src="/wp-content/themes/mical-realhomes-child/_masonry-js/imagesloaded.pkgd.min.js"></script>
                                <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
                                <script src="/wp-content/themes/mical-realhomes-child/_masonry-js/script.js"></script>

                                </div>
                                <!-- End of Masonry Grid  -->
                            </article>


                        </section>                                            

                    </article>                  
   
     

                    </div> <!-- END inner-wrapper -->

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->
            <footer id="footer-wrapper-condos">

                   <!-- <div id="footer" class="container hidden-phone hidden-tablet">

                            <div class="row text-center">

                                    <div class="span3">
                                        <?php if ( ! dynamic_sidebar( 'footer-first-column' ) ) : ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="span3">
                                        <?php if ( ! dynamic_sidebar( 'footer-second-column' ) ) : ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="clearfix visible-tablet"></div>

                                    <div class="span3">
                                        <?php if ( ! dynamic_sidebar( 'footer-third-column' ) ) : ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="span3">
                                        <?php if ( ! dynamic_sidebar( 'footer-fourth-column' ) ) : ?>
                                        <?php endif; ?>
                                    </div>
                            </div>
                           <div class="row text-center">
                                    <div class="span6">
                                        <?php
                                        $copyright_text = get_option( 'theme_copyright_text' );
                                        echo ( $copyright_text ) ? '<p class="copyright">' . $copyright_text . '</p>' : '';
                                        ?>
                                    </div>
                                    <div class="span6">
                                        <?php
                                        $designed_by_text = get_option( 'theme_designed_by_text' );
                                        echo ( $designed_by_text ) ? '<p class="designed-by">' . $designed_by_text . '</p>' : '';
                                        ?>
                                    </div>
                            </div>                

                    </div> -->
                    <div id="footer-bottom" class="row">
                        <div class="span1"></div>
                            <div class="span5">
                                <?php
                                $copyright_text = get_option( 'theme_copyright_text' );
                                echo ( $copyright_text ) ? '<p class="copyright">' . $copyright_text . '</p>' : '';
                                ?>
                            </div>
                            <div class="span5">
                                <?php
                                $designed_by_text = get_option( 'theme_designed_by_text' );
                                echo ( $designed_by_text ) ? '<p class="designed-by">' . $designed_by_text . '</p>' : '';
                                ?>
                            </div>
                        <div class="span1"></div>    
                    </div>                                   

            </footer><!-- End Footer -->


        </div><!-- End contents row -->

    </div><!-- End Content -->

            

