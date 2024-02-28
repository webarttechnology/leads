<?php /* Template Name: About */ 

   get_header();


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

    <!-- about -->
    <section class="p-v-60 about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-3">
                    <img src="<?php echo get_field('about_first_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="headings">
                        <h4 class="text-dark"><?php the_title(); ?></h4>
                        <h2 class="mb-3" style="color: var(--primary-dark);"><?php echo get_field('about_first_section_sub_heading'); ?></h2>
                    </div>
                   <?php the_content(); ?>
                    
                    <div class="d-flex flex-wrap mission_vission mt-2 align-items-center">
                        <span><i class="bi bi-bullseye"></i></span> <h4><?php echo get_field('first_sub_section_title'); ?></h4>
                        <p><?php echo get_field('first_sub_section_text'); ?></p>
                    </div>
                    <div class="d-flex flex-wrap mission_vission mt-2 align-items-center">
                        <span><i class="bi bi-eye"></i></span> <h4><?php echo get_field('second_sub_section_title'); ?></h4>
                        <p><?php echo get_field('second_subsection_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-separator wave-1 bottom">
            <div class="ss-content">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 310" version="1.1" class="svg replaced-svg">
                <!-- Generator: Sketch 51.1 (57501) - http://www.bohemiancoding.com/sketch -->
               
                <defs></defs>
                <g id="Landing-Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="03_vApp-v3-Copy" transform="translate(0.000000, -554.000000)" fill="var(--primary-color)">
                    <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="Path-7"></path>
                </g>
                </g>
                </svg>
            </div><!-- .ss-content -->
        </div>
    </section>

    <!-- why choose -->
    <section class="whyChoose company p-v-60" style="background:var(--primary-color); color:var(--bs-white)"> 
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="headings mb-3 text-center">
                        <h4 class="text-light"><?php echo get_field('bottom_first_title'); ?></h4>
                        <h2 class=" mb-3"><?php echo get_field('bottom_sub_title'); ?></h2>
                    </div>
                    <div class="row flex-row-reverse">
                        <div class="col-md-6 mt-5 text-center">
                            <img src="<?php echo get_field('bottom_section_image'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 mt-5">
                    <p><?php echo get_field('bottom_section_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
endwhile;
   get_footer();
?>