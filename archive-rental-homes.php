<?php
/*
*  Template Name: 
*/

get_header();
?>

    <!-- Page Head -->
    <?php get_template_part("banners/default_page_banner"); ?>

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
            <div class="span12 main-wrap">
                <!-- Main Content -->
                <div class="main">
                    <div class="inner-wrapper">
                        <h1 class="page-title text-center"><?php wp_title(''); ?></h1>
                    <!--========================================
                    =            This is Moose Loop            =
                    =========================================-->
                    
                    <?php 

                        $args = array(
                            'post_type' => 'rental-homes',
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


                    </div>

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End contents row -->

    </div><!-- End Content -->

<?php get_footer(); ?>