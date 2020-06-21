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
	<div class="wrap--footer">
		<?php get_template_part( 'template-parts/newsletter' ); ?>
		<footer class="footer-site">
			<div class="container">
				<div class="clearfix">
					<?php echo do_shortcode( '[mv_redes_sociales footer="footer"]' ); ?>
					<?php get_template_part( 'template-parts/go-mobile' ); ?>
				</div>
			</div>	
			<?php do_action( 'before_footer_close_tag' ); ?>
		</footer>
		<?php wp_footer(); ?>
	</div>
	<?php do_action( 'before_body_close_tag' ); ?>
</body>
</html>
