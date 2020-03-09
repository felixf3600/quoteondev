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
		<main id="main" class="site-main" role="main">


				<?php get_template_part( 'template-parts/content', 'front-page' ); ?>

			<div >
			<button id="more-quotes-button" class="more-quotes-button" action="">Show Me Another!</button>
			</div> 	

		</main><!-- #main -->
		<div class= "quote-marks">
			<i class="fas fa-quote-right"></i>
		</div>	
</div><!-- #primary -->

<?php get_footer(); ?>
