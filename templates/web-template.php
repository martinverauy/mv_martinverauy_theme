<?php
/**
 * Template Name: Web Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header();
?>

<section class="web site">
	<div class="site__has-nav">
		<div class="py-5 web__top" style="background-image: url(<?php the_post_thumbnail_url( );?>)">
			<div class="container">
				<h3 class="site__title site__title--big"><?php the_title() ?></h3>
				<div class="row">
					<div class="col-12 col-md-4">
						<?php get_template_part( 'template-parts/content' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
