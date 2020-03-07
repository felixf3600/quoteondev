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
		<div class="entry-content">
		<?php $query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '1' ) );?>
		<?php if (have_posts()) : 
			$query->the_post();	
			echo '<li>';
			the_content();
			echo '</li>';
			echo '<li>-';
			the_title(); 
			$meta = get_post_meta( get_the_ID(), '_qod_quote_source', TRUE );
			if ($meta):
				echo " , " . "<a href='" . get_permalink() . "'>" . $meta . "</a>";
				echo '</li>';
			endif;?>
		<?php else : ?>
			<h2>Not Found</h2>
		<?php endif; ?>
		<div >
			<button id=" more-quotes-button" class="more-quotes-button" action="">Show Me Another!</button>
		</div> 	
	</div><!-- .entry-content -->
</article><!-- #post-## -->
