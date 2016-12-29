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

         <!-- <h3>Verbage Verbage Verbage Verbage Verbage Verbage Verbage Verbage </h3>
         <h3>Verbage Verbage Verbage Verbage Verbage Verbage Verbage Verbage </h3>
         <h3>Verbage Verbage Verbage Verbage </h3> -->
            <!-- Moose Frontpage Top Widget -->
            <?php
            if ( ! dynamic_sidebar( 'frontpg-top-widget' ) ) :
            endif;
            ?>
                
        </article>

    </section>    


        <div class="row">
            <div class="span12 main-wrap">
                <!-- Main Content -->
                <div class="main">
                    <header id="frontpg-bird">
                        <div class="inner-wrapper">
                        <!-- <h1 class="page-title text-center">South Florida Homes</h1> -->
                        <img class="img-responsive hidden-phone" src="http://fortlauderdale-properties.com/wp-content/uploads/2016/12/frontpg-head-lines.png" alt="">
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

                                            <!-- <h3>
                                                Post ID: <?php echo get_the_id(); ?>
                                            </h3> -->

                                            <h3 class="post-title">
                                                <a id="<?php  echo get_the_id(); ?>" class="the-title" href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>
                                            <span class="rope-holder">
                                                <!-- <object id="img-<?php  echo get_the_id(); ?>" data="/wp-content/uploads/2016/12/svg-title-underline-img.svg" type="image/svg+xml"></object> -->
                                                <img id="img-<?php  echo get_the_id(); ?>" class="img-responsive" src="http://fortlauderdale-properties.com/wp-content/uploads/2016/12/NEW-underline-400.jpg" alt="">    
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






































