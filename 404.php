<?php
/**
 * The template for displaying 404 eror page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>
<section class="site">
	<div class="site__has-nav">
		<div class="p-5 text-center">
			<h3 class="site__title">Perdido?</h3>
			<h2 class="site__pretitle">porque no jugas un poco...</h2>
			<?php echo do_shortcode('[dinosaur-game]'); ?>
			<p><a class="btn btn--red" href="<?php echo home_url('/'); ?>" class="btn btn-primary">Inicio</a></p>
		</div>
	</div>
</section>
<?php get_footer();
