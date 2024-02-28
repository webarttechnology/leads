<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
 
       
            <section class="banner innerbanner" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/parallax.jpg) no-repeat top center; background-size: cover; background-attachment: fixed;">

    
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>
                    <ol class="breadcrumb mt-3"> 
                        <li class="breadcrumb-item"> 
                            <a href="<?php echo get_site_url(); ?>"> 
                              Home 
                            </a> 
                        </li> 
                        <li class="breadcrumb-item"> 
                         <?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?>
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
	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p><h4><?php esc_html_e( 'It looks like nothing was found at this location !!!', 'twentytwentyone' ); ?></h4></p>
			
		</div><!-- .page-content -->
	</div><!-- .error-404 -->
</div>
</div>
</section>
<?php
get_footer();
