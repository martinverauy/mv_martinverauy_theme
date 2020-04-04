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
	<div class="site__has-nav">
		<div class="py-5">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-4">
					<h2 class="site__pretitle">Sin hackeos desde 2012</h2>
					<h3 class="site__title">Bienvenidos <br />a mi web</h3>
					<a href="" class="btn">Mas de mi</a>
				</div>
				<div class="col-12 col-md-4">
					<?php the_post_thumbnail('', array('class' => 'img--block')); ?>
				</div>
			</div>
			
		</div>
	</div>
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
