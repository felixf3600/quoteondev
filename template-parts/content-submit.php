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

	<div class="entry-content">
	<form id="submit-form" role="submit" method="post" class="submit-form" >

		<label for="author-field">Author of Quote:</label><br>
			<input type="text" id ="author-field" class="author-field" placeholder="" value="" name="author-field" title="" size="25" maxlenght="50"/><br>
		<label for="quote-field">Quote:	</label><br>
			<!-- <input type="text" id="quote-field" class="quote-field" placeholder="" value="" name="quote-field" title="" size="25" maxlenght="200"><br>		 -->
			<textarea  id="quote-field" class="quote-field"  title="" size="25" maxlenght="200"></textarea><br>
		<label for="book-field">Where did you find the quote? (e.g bookname) </label><br>
			<input type="text" id="book-field" class="book-field" placeholder="" value="" name="book-field" title=""size="25" maxlenght="50"/><br>
		<label for="url-field">	Provide the URL of the quote, if available	</label><br>
			<input type="url" id="url-field" class="url-field" placeholder="" value="" name="url-field" title=""size="25" maxlenght="100"/><br>

		<button id="search-submit" class="search-submit">
			<?php echo esc_html( 'Submit Quote' ); ?>
		</button>
</form>

	<div id="response" class= "response">
	</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
