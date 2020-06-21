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
				<p>kfgjflglfgjk lfgjfkjgfgjk</p>
			</div>
		</div>
	</div>
	<div class="py-5">
		<div class="container">
			<div class="row">

				<div class="col-12 col-md-8">

					<?php if ( have_posts() ) : ?>
						<div class="hfeed">
							<?php while ( have_posts() ) : the_post(); ?>
								<article id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
									<?php the_content() ?>
								</article>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

				</div>

				<?php if ( is_active_sidebar( 'right-sidebar' ) ) { ?>
					<aside class="col-12 col-md-4 sidebar">
						<?php dynamic_sidebar('right-sidebar'); ?>
					</aside>
				<?php } ?>

			</div>
		</div>
	</div>
</section>



get_footer();
