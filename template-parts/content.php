<?php
/**
 * Template part for displaying the content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
			<?php the_content() ?>
		</article>
	<?php endwhile; ?>
<?php endif; ?>
