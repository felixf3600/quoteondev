<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="quotes">
		<div class="entry-content">
			<?php 				
			echo '<li>';
			the_content();
			echo '</li>';
			echo '<li>';
			the_title(); 
			$meta = get_post_meta( get_the_ID(), '_qod_quote_source', TRUE );
			if ($meta):
				echo " , " . "<a href='" . get_permalink() . "'>" . $meta . "</a>";
				echo '</li>';

			endif;?>	
		</div>
		</div>	
		</header><!-- .entry-header -->

	<!-- <div class="entry-summary">	</div>.entry-summary -->
</article><!-- #post-## -->
