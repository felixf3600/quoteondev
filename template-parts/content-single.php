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
			<li id="quote-content"> <?php the_content();?> </li>			
			<li id="quote-title"> <?php the_title();?> 
			<?php $meta = get_post_meta( get_the_ID(), '_qod_quote_source', TRUE );
			$meta_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', TRUE );
			if ($meta):?>
				<?php echo " , " . "<a id='quote-source' href='" . $meta_url . "'>" . $meta . "</a>"; ?>
			</li>
			<?php endif;?>
		</div><!-- .entry-content -->			

</article><!-- #post-## -->
