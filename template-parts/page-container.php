<?php
/**
 * Template Name: Container Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */
get_header(); ?>
<section class="site">
	<div class="site__has-nav">
		<div class="p-5">
			<div class="container">
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
</section>
<?php
get_footer();
