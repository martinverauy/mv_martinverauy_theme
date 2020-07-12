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
				<?php
				if ( has_post_thumbnail() ) {
					echo '<div class="col-12 col-md-6 col-lg-8 offset-md-3 offset-lg-2"><div class="pt-5">';
					the_post_thumbnail('full', array('class' => 'img--block img--border-radius site__shadow wordpress__image'));
					echo '</div></div>';
				}
				?>
			</div>
		</div>
	</div>
	<div class="py-5">
		<div class="container py-5">
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
</section>

<?php
get_footer();
