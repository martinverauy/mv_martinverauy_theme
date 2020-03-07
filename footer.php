<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
	<?php get_template_part( 'template-parts/newsletter' ); ?>
	<footer class="footer-site">
		<div class="container">
			<?php get_template_part( 'template-parts/list-social' ); ?>
		</div>	
		<?php do_action( 'before_footer_close_tag' ); ?>
	</footer>
	<?php wp_footer(); ?>
	<?php do_action( 'before_body_close_tag' ); ?>
</body>
</html>
