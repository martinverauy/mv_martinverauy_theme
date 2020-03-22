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

<section class="site text-center py-5">
	<div class="container">
		<h4 class="site__title">Perdido?</h4>
		<p>porque no jugas un poco...</p>
		<?php echo do_shortcode('[dinosaur-game]'); ?>
		<p><a href="<?php echo home_url('/'); ?>" class="btn btn-primary">Volver</a></p>
	</div>
</section>
<?php get_footer();
