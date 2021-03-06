<?php
/*
*    Template Name: Home Rental Parent Template
*/

get_header();
?>

    <!-- Page Head -->
    <?php get_template_part("banners/default_page_banner"); ?>
<!-- <h1>Home Parent (Home city Template)</h1> -->
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

            <div class="span9 main-wrap">
                <!-- Main Content -->
                <div class="main">

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

                        <hr>                 
                    <!--========================================
                    =            This is Moose Loop            =
                    =========================================-->
                    
                    <?php 

                        $args = array(
                            'post_type' => 'rental-homes',
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

                                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <hr/>   
                                                                       
                                            <?php the_excerpt(); ?>     
                                            <a class="btn btn-primary pull-right" href="<?php the_permalink(); ?>" style="text-decoration: none;">SEE ALL RENTAL HOMES</a>
                                        </div>  


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

            </div> <!-- End span9 -->
            <?php get_sidebar('homes'); ?>
            

        </div><!-- End contents row -->

    </div><!-- End Content -->

<?php get_footer(); ?>