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

get_header(); ?>

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize">Blog Details</h1>
                    <div class="divider mx-auto mb-4"></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>
<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	//get_template_part( 'template-parts/content/content-single' );?>
	
<section class="mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( has_post_thumbnail() ) :
              $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' ); ?>
              <img class="card-img-top mb-2 blogImg" src="<?php echo $featured_image[0]; ?> " alt=""  />
              <?php endif; ?>
              <h2 class="mb-3"><?php the_title(); ?></h2>
            <?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
	

<?php	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	//if ( comments_open() || get_comments_number() ) {
		?>
<!-- <div class="container blogsingewl"> -->
	<?php	//comments_template();
		// Previous/next post navigation.
	//$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' );
	//$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' );

	//$twentytwentyone_next_label     = esc_html__( 'Next post', 'twentytwentyone' );
	//$twentytwentyone_previous_label = esc_html__( 'Previous post', 'twentytwentyone' );

	//the_post_navigation(
		//array(
		//	'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p>',
		//	'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p>',
		//)
	//); ?>
<!-- </div> -->
<?php	//}


	
endwhile; // End of the loop.


get_footer(); ?>


