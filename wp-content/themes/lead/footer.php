<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$generalslug = 'site-general-settings';
$generalpageid = get_id_by_slug($generalslug);
?>

<!-- footer -->
    <footer style="background: var(--bs-dark);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <center><span><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_field('logo',$generalpageid); ?>" alt="" class="img-fluid"></a></span></center>

                
 <?php wp_nav_menu(array('menu' => 'mainmenu', 'container' => '', 'items_wrap' => '<ul class="d-flex justify-content-center flinks mt-3 mb-3">%3$s</ul>' )); ?>
                    <ul class="d-flex justify-content-center flinks mt-3 mb-3">
                        <li><a href="<?php echo get_field('facebook',$generalpageid); ?>" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="<?php echo get_field('twitter',$generalpageid); ?>" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                        <li><a href="<?php echo get_field('linkedin',$generalpageid); ?>" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                    <hr>
                    <div class="d-flex justify-content-between copyRight">
                        <small>Copyright <?php echo date('Y'); ?> ©cashyewleads.</small>
                    <small>Designed &amp; Developed by <a href="#">Webart Technology</a></small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        });
      </script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>