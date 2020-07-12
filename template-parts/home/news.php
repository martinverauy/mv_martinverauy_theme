<?php
/**
 * Template part for displaying news in the home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

?>

<?php 
$args = array (
	'post_type'              => 'post',
	'posts_per_page'         => '1',
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	?>
	<section class="site news text-center pt-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-8 offset-md-3 offset-lg-2">
					<?php
					while ( $query->have_posts() ) {
						$query->the_post();
						?>
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="news__image">
								<?php the_post_thumbnail('', array('class' => 'img--block')); ?>
							</div>
						<?php } ?>
						<div class="site__block site__block--big shadow news__text-block">
							<h4 class="site__title site__title--small">
								<?php the_title() ?>
							</h4>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn btn--red">Ver más</a>
						</div>
						<?php  	
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<?php
}
wp_reset_postdata(); ?>	
