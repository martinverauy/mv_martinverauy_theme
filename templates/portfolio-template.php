<?php
/**
 * Template Name: Portfolio Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

<section class="about site">
	<div class="site__has-nav">
		<div class="py-5">
		<div class="container text-center">
			<h2 class="site__pretitle">Sin hackeos desde 2012</h2>
			<h3 class="site__title"><?php the_title() ?></h3>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php get_template_part( 'template-parts/portfolio-items' ); ?>
		</div>
	</div>
</section>

<?php get_footer();
