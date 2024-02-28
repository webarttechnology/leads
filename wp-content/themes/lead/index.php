<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>



<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title" style="text-align: center;"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>
	
	<div class="section mt-5">
<div class="container">
	
		

<div class="row">

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();?>

		<div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              
              <?php if ( has_post_thumbnail() ) :
              $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' ); 
              $content = get_the_content();
              $strpcnt = wp_strip_all_tags($content);
              ?>
              
				<a href="<?php the_permalink(); ?>"><img class="card-img-top mb-2" src="<?php echo $featured_image[0]; ?>" alt="" /></a>
              <?php endif; ?>
              
              <div class="card-body blogText bg-light text-center p-4">
				  <?php the_time('F j, Y') ?>
                <h4 class=""><?php the_title(); ?></h4>
                
                <p><?php echo substr($strpcnt,0,70); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary px-4 mx-auto my-2 btn_color" style="background-color:#d62a29; border: none;"
                  >Read More</a
                >
              </div>
            </div>
          </div>
	<?php }

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

 } 
// else {

// 	 If no content, include the "No posts found" template.
// 	get_template_part( 'template-parts/content/content-none' );

// }?>

</div>
	</div>
	</div>

<?php
get_footer();
?>