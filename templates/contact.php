<?php
/**
 * Template Name: Contact Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

	<section>
		<div class="container">
			<?php
			$themeOption = get_option('my_theme_option');
			if($themeOption['Contact Form 7 Shortcode']){
			?>
				<div id="formulario">
					<?php echo do_shortcode($themeOption['Contact Form 7 Shortcode']); ?>
				</div>
			 <?php } ?>
		</div>
	</section>

<?php get_footer();
