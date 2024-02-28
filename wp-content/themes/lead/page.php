<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
while(have_posts()):

      the_post();
            
if(get_field('inner_banner'))
             {
             ?>
    <section class="banner innerbanner" style="background:url(<?php echo get_field('inner_banner'); ?>) no-repeat top center; background-size: cover; background-attachment: fixed;">
        <?php 
            }
        else{
            ?>
            <section class="banner innerbanner" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/parallax.jpg) no-repeat top center; background-size: cover; background-attachment: fixed;">

        <?php
             }

         ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1><?php echo get_the_title(); ?> </h1>
                    <ol class="breadcrumb mt-3"> 
                        <li class="breadcrumb-item"> 
                            <a href="<?php echo get_site_url(); ?>"> 
                              Home 
                            </a> 
                        </li> 
                        <li class="breadcrumb-item"> 
                            <?php echo get_the_title(); ?> 
                        </li> 
                    </ol> 
                </div>
            </div>
        </div>
        <div class="section-separator wave-1 bottom">
            <div class="ss-content">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 310" version="1.1" class="svg replaced-svg">
                <!-- Generator: Sketch 51.1 (57501) - http://www.bohemiancoding.com/sketch -->
               
                <defs></defs>
                <g id="Landing-Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="03_vApp-v3-Copy" transform="translate(0.000000, -554.000000)" fill="#fff">
                    <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="Path-7"></path>
                </g>
                </g>
                </svg>
            </div><!-- .ss-content -->
        </div>
    </section>


    <section class="p-v-60 about">
        <div class="container">
            <div class="row">
                <?php if(get_the_post_thumbnail_url(get_the_ID()))
                { ?>
                <div class="col-md-6 text-center mb-3">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                  <?php the_content(); ?>
                                  
                </div>
            <?php }
            else{
                ?>
                <div class="col-md-12">
                  <?php the_content(); ?>
                                  
                </div>

                <?php 
                }

             ?>
            </div>
        </div>
        
    </section>


<?php
endwhile;

get_footer();
