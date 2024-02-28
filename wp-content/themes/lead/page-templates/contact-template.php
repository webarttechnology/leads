<?php /* Template Name: Contact Template */

get_header();



           $generalslug = 'site-general-settings';
$generalpageid = get_id_by_slug($generalslug);

         

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

             while(have_posts()):the_post();

            ?>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1><?php the_title(); ?></h1>
                    <ol class="breadcrumb mt-3"> 
                        <li class="breadcrumb-item"> 
                            <a href="<?php echo get_site_url(); ?>"> 
                              Home 
                            </a> 
                        </li> 
                        <li class="breadcrumb-item"> 
                            <?php the_title(); ?>
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

    <!-- contact -->
    <section class="p-v-60 contact no_after">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="headings mb-5">
                        <h4 class="text-light text-dark"><?php the_title(); ?>
                        </h4>
                        <h2 class="mb-3 text-dark"><?php echo get_field('do_you_have_any_questions'); ?>
                        </h2>
                    </div>
                </div>
                <div class="col-md-5 mt-3" style="position: relative; z-index: 2;">
                 
                    <?php echo do_shortcode('[contact-form-7 id="3d54bfd" title="Contact page form"]'); ?>
                </div>
                <div class="col-md-6 mt-3 address">
                    <h4><?php echo get_field('office_location_title'); ?>
                    </h4>
                    <hr>
                    <p><i class="bi bi-pin-map"></i> <?php echo get_field('office_address',$generalpageid); ?></p>
                    <h4><?php echo get_field('phone_title'); ?></h4>  
                    <hr>
                    <p><i class="bi bi-telephone"></i> <a href="tel:<?php echo get_field('phone',$generalpageid); ?>"><?php echo get_field('phone',$generalpageid); ?></a></p>  
                    <h4><?php echo get_field('email_title'); ?></h4><hr>
                    <p><i class="bi bi-envelope"></i> <a href="mailto:<?php echo get_field('email',$generalpageid); ?>"><?php echo get_field('email',$generalpageid); ?></a></p>
                </div>
            </div>
        </div>
    </section>

<?php
endwhile;
get_footer();

?>