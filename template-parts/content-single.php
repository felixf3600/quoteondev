<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php 				
			echo '<li>';
			the_content();
			echo '</li>';
			echo '<li>- ';
			the_title(); 
			$meta = get_post_meta( get_the_ID(), '_qod_quote_source', TRUE );
			$meta_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', TRUE );
			if ($meta):
				echo " , " . "<a href='" . $meta_url . "'>" . $meta . "</a>";
				echo '</li>';
			endif;?>	
		</div><!-- .entry-content -->			
	<div>
		<button class="more-quotes-button" ><a href="<?php echo get_site_url()?>">Show Me Another!</a></button>
	</div>

</article><!-- #post-## -->
