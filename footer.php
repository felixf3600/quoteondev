<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="navigation-container">
						<div class="page-navigation">
							<a href="<?php echo get_site_url();?>/about/"><p>About</p></a>
						</div>
						<div class="page-navigation">
							<a href="<?php echo get_site_url();?>/links/"><p>Archives</p></a>
						</div>
						<div class="page-navigation">
							<a href="<?php echo get_site_url();?>/submit/"><p>Submit a Quote</p></a>					
						</div>
					</div>
					<div class="red-academy">
					<p>Brought to you by <a href="www.redacademy.com">Red Academy</p></a>					
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
