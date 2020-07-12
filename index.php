<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

<section class="wordpress site">
	<div class="site__has-nav">
		<div class="py-5 wordpress__top text-center bg--red">
			<div class="container">
				<h3 class="site__title site__title--big">Blog</h3>
			</div>
		</div>
	</div>
	<div class="py-5">
		<div class="container">


					<?php if ( have_posts() ) : ?>
						<div class="hfeed">
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="row align-items-center pb-5">
									<div class="col-12 col-md-5">
										<?php the_post_thumbnail('', array('class' => 'img--block img--border-radius site__shadow')); ?>
									</div>
									<div class="col-12 col-md-7">
										<h2><?php the_title() ?></h2>
										<?php the_excerpt(); ?>
										<p><a href="<?php the_permalink(); ?>" class="btn btn--red">Ver Más</a></p>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();
