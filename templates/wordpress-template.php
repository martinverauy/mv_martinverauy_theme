<?php
/**
 * Template Name: Wordpress Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header();
?>

<section class="wordpress site">
	<div class="site__has-nav">
		<div class="py-5 wordpress__top text-center bg--red">
			<div class="container">
				<h3 class="site__title site__title--big"><?php the_title() ?></h3>
				<p>kfgjflglfgjk lfgjfkjgfgjk</p>
			</div>
		</div>
	</div>
	<div class="py-5">
		<div class="container">
			<?php get_template_part( 'template-parts/content' ); ?>
		</div>
	</div>
</section>

<?php
get_footer();
