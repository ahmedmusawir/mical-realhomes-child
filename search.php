<?php
    get_header();

    $banner_image_path = get_default_banner();
?>


    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url('<?php echo esc_url( $banner_image_path ); ?>'); ">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span><?php _e('Search Results', 'framework'); ?></span></h1>
                <p><?php the_search_query(); ?></p>
            </div>
        </div>
    </div><!-- End Page Head -->

    <!-- Content -->
    <div class="container contents blog-page">

     <!--=============================================
        =            Moose Breadcrumbs Block            =
        ==============================================-->    

       <section class="bread-search-block row">

        
            <article class="span12">

                <?php //echo get_search_form(); ?>
                <div class="center-block">
                    <?php echo do_shortcode('[autocomplete-post-search]'); ?>
                </div>
                
            </article>


        </section>    

     <!--=============================================
        =            Moose Breadcrumbs Block  END          =
        ==============================================-->
        <div class="row">
            <div class="span9 main-wrap">
                <!-- Main Content -->
                <div class="main">

                    <div class="inner-wrapper">
                        <?php  get_template_part("loop");  ?>
                    </div>

                </div><!-- End Main Content -->

            </div> <!-- End span9 -->

            <?php get_sidebar(); ?>

        </div><!-- End contents row -->
    </div><!-- End Content -->

<?php get_footer(); ?>