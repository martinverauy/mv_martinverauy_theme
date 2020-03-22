<?php
/**
 * Template Name: About Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

<section class="about site">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4">
				<?php the_title('<h1 class="site_title text-right">', '</h1>') ?>
			</div>
			<div class="col-12 col-md-8">
				<?php get_template_part( 'template-parts/content' ); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
