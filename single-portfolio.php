<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

<section class="site">
	<div class="site__has-nav">
		<div class="py-5 text-center bg--red">
			<div class="container">
				<h2 class="site__pretitle color--white">Sin hackeos desde 2012</h2>
				<h1 class="site__title"><?php the_title() ?></h1>
			</div>
		</div>
	</div>
	<div class="py-5">
		<div class="container">
			<div class="row">
				<aside class="sidebar col-12 col-md-3 col-lg-2">
					<div class="sidebar--sticky sidebar--opacity">
						<h1 class="site__title site__title--small"><?php the_title() ?></h1>
						<p><?php if( function_exists('wp_applaud') ) wp_applaud(); ?></p>
						<p><a href="" class="btn btn--small btn--red">Ver más</a></p>
					</div>
				</aside>
				<div class="col-12 col-md-6 col-lg-8">
					<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
