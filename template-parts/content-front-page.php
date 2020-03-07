<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->
	<div class="quotes">
		<div id="quote-entry" class="entry-content">
		<?php $query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '1' ) );?>
		<?php if (have_posts()) : 
			$query->the_post();	?>
			<li id="quote-content"> <?php the_content();?> </li>			
			<li id="quote-title"> <?php the_title();?> 
			<?php $meta = get_post_meta( get_the_ID(), '_qod_quote_source', TRUE );
			$meta_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', TRUE );
			if ($meta):?>
				<?php echo " , " . "<a id='quote-source' href='" . $meta_url . "'>" . $meta . "</a>"; ?>
			</li>
			<?php endif;?>
		<?php else : ?>
			<h2>Not Found</h2>
		<?php endif; ?>
		</div>
		<div >
			<button id="more-quotes-button" class="more-quotes-button" action="">Show Me Another!</button>
		</div> 	
	</div><!-- .entry-content -->
</article><!-- #post-## -->
