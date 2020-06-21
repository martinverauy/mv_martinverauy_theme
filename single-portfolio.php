<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

bbb

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
				<div class="col-12 col-md-3 col-lg-2">
					<div class="sidebar">
						<div class="sidebar--opacity">
							<h1 class="site__title site__title--small"><?php the_title() ?></h1>
							<a href="" class="btn btn--small">Ver más</a>
							<hr />
							<p class="help-block">8.6K</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-8">
					
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('', array('class' => 'img--block'));
					}
					?>
					<?php get_template_part( 'template-parts/content' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
