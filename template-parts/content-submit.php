<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<form role="submit" method="post" class="submit-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="submit" class="author-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Author of Quote:" />
		</label>
		<label>
			<input type="submit" class="quote-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Quote:" />
		</label>
		<label>
			<input type="submit" class="name-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<label>
			<input type="submit" class="url-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>

		<button class="search-submit">
			<?php echo esc_html( 'Search' ); ?>
		</button>
	</fieldset>
</form>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
