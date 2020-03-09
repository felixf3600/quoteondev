<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="entry-content">				
		<a href="<?php echo get_site_url();?>/<?php the_title();?>"><h2 id="quote-title"> <?php the_title();?> </h2> </a>
			<li id="quote-content"> <?php the_content();?> </li>			
	</div><!-- .entry-content -->
	</header><!-- .entry-header -->

</article><!-- #post-## -->
