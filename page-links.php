<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<div class= "quote-marks">
		 	<i class="fas fa-quote-left"></i>
		</div>	
	<main id="main" class="site-main" role="main">
			<h1>Archives</h1>
			<h2>Quote Authors</h2>
			<?php $queryAuthor = new WP_Query( array ( 'orderby' => 'title', 'order' => 'ASC' ,'posts_per_page' => '-1' ) );?>
			<?php if (have_posts()) : 
				while ($queryAuthor ->have_posts()) :
					$queryAuthor->the_post();	?>				
							<?php the_title( sprintf( '<a class="entry-title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
				<?php endwhile; // End of the loop. 
			endif;?>
			<h2>Categories</h2>

			<?php echo wp_list_categories(array('style'=> 'none','separator'=> ' ')); ?>

			<h2>Tags</h2>
			<?php
    			$tags = get_tags();
    			if ( $tags ) :
        			foreach ( $tags as $tag ) : ?>
            		<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>


		</main><!-- #main -->
		<div class= "quote-marks">
			<i class="fas fa-quote-right"></i>
		</div>	
</div><!-- #primary -->

<?php get_footer(); ?>
