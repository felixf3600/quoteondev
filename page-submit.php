<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1>Submit a Quote </h1>
			<?php if (!is_user_logged_in()): ?>
				<p>Sorry you need to be logged in to submit</p>
				<a href="<?php echo get_site_url();?>/wp-login.php">Click here to log in</a>
			<?php else: ?>
				<?php get_template_part( 'template-parts/content', 'submit' ); ?>

			<?php endif;?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
