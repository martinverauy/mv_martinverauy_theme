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
		<div class="p-5">
			<div class="container">
				<div class="site__block site__shadow">
					<div class="site__small">
						<div class="row align-items-center">
							<div class="col-12 col-md-4">
								<?php the_post_thumbnail('', array('class' => 'img--block')); ?>
							</div>
							<div class="col-12 col-md-8">
								<h2 class="site__pretitle">Hola mundo</h2>
								<h3 class="site__title">estar donde está<br /> la gente</h3>
							</div>
						</div>
					</div>
				</div>
				<?php get_template_part( 'template-parts/content' ); ?>
			</div>
		</div>
	</div>
	<div class="p-5">
		<?php get_template_part( 'template-parts/timeline' ); ?>
	</div>
</section>

<?php get_footer();
