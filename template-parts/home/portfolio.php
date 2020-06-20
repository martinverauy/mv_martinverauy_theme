<?php
/**
 * Template part for displaying portfolio items on the home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */
?>
<section class="portfolio site py-5">
	<div class="container-fluid">
		<div class="text-center">
			<h2 class="site__pretitle">Hola mundo</h2>
			<h3 class="site__title">estar donde está<br /> la gente</h3>
		</div>
		<div class="row">
			<?php get_template_part( 'template-parts/portfolio-items' ); ?>
		</div>
	</div>
</section>
