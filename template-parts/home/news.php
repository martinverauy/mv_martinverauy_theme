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
			<div class="site__small">
				<?php
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="news__image">
							<?php the_post_thumbnail('', array('class' => 'img--block')); ?>
						</div>
					<?php } ?>
					<div class="site__block site__block--big news__text-block">
						<h4 class="site__title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title() ?>
							</a>
						</h4>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn">Ver más</a>
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

			
		
