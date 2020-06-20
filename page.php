<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>
<section class="site">
	<div class="site__has-nav">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			}
		}
		?>
	</div>
</section>
<?php
get_footer();
