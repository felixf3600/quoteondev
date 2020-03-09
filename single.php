<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class= "quote-marks">
		 	<i class="fas fa-quote-left"></i>
		</div>	
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>


		<?php endwhile; // End of the loop. ?>
		<div>
		<button class="more-quotes-button" ><a href="<?php echo get_site_url()?>">Show Me Another!</a></button>
		</div>

		</main><!-- #main -->
		<div class= "quote-marks">
			<i class="fas fa-quote-right"></i>
		</div>	

	</div><!-- #primary -->

<?php get_footer(); ?>
