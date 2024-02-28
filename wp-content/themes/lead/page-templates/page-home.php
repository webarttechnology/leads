<?php /* Template Name: Home */ 

   get_header();


   $generalslug = 'site-general-settings';
$generalpageid = get_id_by_slug($generalslug);
?>

<!-- banner -->
    <section class="banner" style="background:url(<?php echo get_field('banner_background_image'); ?>) no-repeat top center; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                         <?php   
                         $bannersliderepeat = CFS()->get( 'home_slide_repeat' );
                         $sldcount = 0;

foreach($bannersliderepeat as $eachbannslide){
    $sldcount++;

?>

                          <div class="swiper-slide">
                            <?php  if($sldcount==1)
                            { ?>
                            <div class="row align-items-center">
                            <?php 
                            }
                            else
                            {
                                ?>
                             <div class="row align-items-center flex-row-reverse">
                          <?php 
                             }

                             ?>
                                <div class="col-md-6">
                                    <?php echo $eachbannslide['slide_text']; ?>
                                    <span><a href="<?php echo $eachbannslide['slide_read_more_link']; ?>" class="btn btn-dark">read more</a></span>
                                </div>
                                <div class="col-md-6 text-center">
                                    <img src="<?php echo $eachbannslide['slide_image']; ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                          </div>

                      <?php } ?>

                    

                        </div>
                      
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
                    <img src="<?php echo CFS()->get('about_us_main_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="headings">
                        <h4 class="text-dark"><?php echo CFS()->get('about_us_title'); ?></h4>
                        <h2 class="mb-3" style="color: var(--primary-dark);"><?php echo CFS()->get('about_us_sub_title'); ?></h2>
                    </div>
                   <?php echo CFS()->get('about_us_text');
                           $smallpoints = CFS()->get( 'about_us_small_points_repeat' );
                        
                    ?>
                    <ul>
                        <?php foreach($smallpoints as $eachsmallpoint){ ?>
                        <li><i class="bi bi-bookmark-check"></i> <?php echo $eachsmallpoint['each_small_point'];  ?></li>
                    <?php } ?>
                        
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <?php $highlightablefeature = CFS()->get('highlightable_features');
                    foreach($highlightablefeature as $eachhighlightable){
              
                 ?>

                <div class="col-md-6">
                    <div class="d-flex box">
                        <span><img src="<?php echo $eachhighlightable['feature_image'];  ?>" alt="" class="img-fluid"></span>
                        <h6><?php echo $eachhighlightable['feature_title']; ?></h6>
                    </div>
                </div>
            <?php } ?>
             
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
    <section class="whyChoose p-v-60" style="background:var(--primary-color); color:var(--bs-white)"> 
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6 text-center">
                    <img src="images/2.png" alt="" class="img-fluid">
                </div> -->
                <div class="col-md-12">
                    <div class="headings mb-3 text-center">
                        <h4 class="text-light"><?php echo CFS()->get('why_choose_title'); ?></h4>
                        <h2 class=" mb-3"><?php echo CFS()->get('why_choose_sub_title'); ?></h2>
                    </div>
                    <div class="row">
                     <?php    $whychooserepeat = CFS()->get('why_choose_us_repeat'); 
                          
                        foreach($whychooserepeat as $whychoose){
                       ?>

                        <div class="mb-3 col-sm-6 col-md-4">
                            <div class="d-flex flex-wrap justify-content-center chooseBox">
                                <span><img src="<?php echo  $whychoose['why_choose_us_image']; ?>" alt="" class="img-fluid"></span>
                                <div class="">
                                   <?php echo  $whychoose['why_choose_us_text']; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product -->
    <section class="p-v-60 product">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="headings mb-3 text-center">
                        <h2 class="mb-3 text-dark"><?php echo CFS()->get('mca_main_title'); ?></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php $mcaleft = CFS()->get('mca_left_repeat'); 
                      foreach($mcaleft as $eachmcaleft){
                     ?>
                    <div class="box mt-3">
                        <?php echo  $eachmcaleft['mca_left_text']; ?>
                    </div>
                <?php } ?>
                 
                </div>
                <div class="col-md-4 text-center">
                    <img src="<?php echo CFS()->get('mca_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-4">

                       <?php $mcarightall = CFS()->get('mca_right_repeat'); 
                          foreach($mcarightall as $mcaright){

                        ?>
                    <div class="box mt-3">
                        <?php echo $mcaright['mca_right_text']; ?>
                    </div>
                <?php } ?>
                   
                </div>
          
                <div class="col-12 mt-3 text-end">
                    <?php $leadpack = get_field('lead_pack');
                   
                     $product = wc_get_product( $leadpack );
                     ?>
                    <center>
                        <h4>Price: <?php echo $product->get_price_html(); ?></h4>
                        <span><a href="<?php echo get_the_permalink($leadpack); ?>" class="btn btn-success mt-3">Buy Now</a></span>
                    </center>
                </div>
            </div>
        </div>
        
    </section>

    <!-- contact -->
    <section class="p-v-60 contact" style="background: #f1f1f1;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="headings mb-5">
                        <h4 class="text-light text-dark"><?php echo get_field('contact_us_main_heading'); ?>
                        </h4>
                        <h2 class="text-dark"><?php echo get_field('contact_us_sub_heading'); ?>
                        </h2>
                    </div>
                </div>
                <div class="col-md-5 mt-3" style="position: relative; z-index: 2;">
             
                    <?php echo do_shortcode('[contact-form-7 id="ad8fa20" title="Home contact form"]'); ?>
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
   get_footer();
?>