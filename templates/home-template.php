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

<section>
	<div class="container">
		<div class="site__small text-center">
			<h2 class="site__title">insete texto aqui</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec arcu molestie lorem ultricies scelerisque. Nam tempus a sem at elementum. Praesent nec lacinia lacus.</p>
		</div>
		<div class="row">
			<div class="col-12 col-md-4">
				<h4>Wordpess</h4>
			</div>
		</div>
</section>

<?php get_template_part( 'template-parts/home/news' ); ?>

<?php get_footer();
