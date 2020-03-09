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
		<li><p>Quotes on Dev is a project site for the RED Academy Web Developer Professional program. It’s used to experiment with Ajax, WP API, jQuery, and other cool things.&nbsp;<span><i class="fas fa-smile"></i></span></p></li>	
		<li><p>This site&nbsp;is heavily inspired by Chris Coyier’s <a href="http://quotesondesign.com/" target="_blank" rel="noopener noreferrer"><span>Quotes on Design.</span></a></p></li>		
	</div><!-- .entry-content -->
</article><!-- #post-## -->
