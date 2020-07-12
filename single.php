<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

<section class="site">
	<div class="site__has-nav">
		<div class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 offset-lg-2 offset-md-3">
						<?php
						the_title('<h1 class="site__title">', '</h1>');
						if ( has_post_thumbnail() ) {
							echo '<div class="pb-5">';
							the_post_thumbnail('full', array('class' => 'img--block'));
							echo '</div>';
						}
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
		</div>
	</div>
</section>

<?php 
$args = array (
	'post_type'              => 'post',
	'posts_per_page'         => '3',
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	?>
	<section class="bullets site p-5">
		<div class="container">
			<div class="row">
				<?php
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<div class="col-12 col-md-4 d-flex flex-column">
						<div class="site__block site__shadow flex-grow-1">
							<div class="row align-items-center">	
								<div class="col-12 col-md-2">
									<div class="site__icon bg--red text-center square"><i class="fas fa-check"></i></div>
								</div>
								<div class="col-12 col-md-10">
									<h4 class="site__subtitle"><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
					</div>
					<?php 	
				}
				?>
			</div>
		</div>
	</section>
	<?php
}
wp_reset_postdata(); ?>

<?php
get_footer();
