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
				<div class="row">
					<div class="col-12 col-md-3">
						<?php the_post_thumbnail('', array('class' => 'img--block')); ?>
					</div>
					<div class="col-12 col-md-9">
						<h3 class="site__title">Cortita y al pie</h3>
						<?php get_template_part( 'template-parts/content' ); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="py-5">
		<?php get_template_part( 'template-parts/timeline' ); ?>
	</div>
</section>

<?php get_footer();
