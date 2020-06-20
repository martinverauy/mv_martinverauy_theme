<?php
/**
 * Template part for displaying the content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="entry-content">
		<?php
		the_content( __( 'Continue reading', 'twentytwenty' ) );
		?>
	</div><!-- .entry-content -->
</article><!-- .post -->