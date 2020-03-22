<?php
/**
 * Template Name: Home Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

<?php get_template_part( 'template-parts/home/top' ); ?>
<?php get_template_part( 'template-parts/home/bullets' ); ?>

<section class="yo site py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4">
				<h2 class="site__title">Buscas un <b>sitio web?</b></h2>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/home/news' ); ?>

<?php get_footer();
