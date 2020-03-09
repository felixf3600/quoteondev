<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<div class= "quote-marks">
		 	<i class="fas fa-quote-left"></i>
		</div>	
		<main id="main" class="site-main page-about" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<!-- <?php get_template_part( 'template-parts/content', 'about' ); ?> -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<div class= "quote-marks">
			<i class="fas fa-quote-right"></i>
		</div>	
</div><!-- #primary -->

<?php get_footer(); ?>
