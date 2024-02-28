<?php /* Template Name: Service */ ?>
<?php
   get_header();
?>

<!--------Page Header---------->

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize">Services</h1>
                    <div class="divider mx-auto mb-4"></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>

 <section class="aboutsecty py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="serviceimg">
                    <img src="<?php echo get_field('service_image'); ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="aboutcnty">
                    <h3 class="pb-2"><?php echo get_field('service_title'); ?></h3>
                    <!-- <h5 class="pb-1">Here are the services that we provide :</h5> -->
                    <ul>
						<?php $myservice = CFS()->get('service_loop');
						foreach($myservice as $myserviced) {
						?>
                        <li><i class="bi bi-caret-right pe-2"></i><?php echo $myserviced['servlist'];?></li>
						<?php } ?>
<!--                         <li><i class="bi bi-caret-right pe-2"></i> Confidential HIV/AIDS testing</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Diabetes testing, care and classes</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Family planning/teen clinics</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Pregnancy testing and counseling</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Primary care</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Public health care/education</li>
                        <li><i class="bi bi-caret-right pe-2"></i> TB screening and treatment</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Health education and promotion</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Hypertension care and management</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Immunizations/Laboratory services</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Nutrition services</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Pediatric care</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Referrals to specialists</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Sexually transmitted disease testing</li>
                        <li><i class="bi bi-caret-right pe-2"></i> Substance abuse</li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>

<?php 
   get_footer();
?>