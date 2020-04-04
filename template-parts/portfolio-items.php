<?php
/**
 * Template part for displaying portfolio items
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
<?php 
if (is_front_page()){
	$args = array (
		'post_type'              => 'portfolio',
		'order'                  => 'DESC',
		'posts_per_page'         => '3',
		'meta_query' => array(
			array(
				'key' => 'destacado',
				'compare' => '==',
				'value' => '1'
			)
		)
	);
	$columns = 'col-md-3';
} else {
	$args = array (
		'post_type'              => 'portfolio',
		'order'                  => 'DESC',
		'posts_per_page'         => 999999,
	);
	$columns = 'col-md-4';
}

$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
		<div class="col-12 <?php echo $columns; ?> d-flex flex-column">
			<div class="site__block portfolio__block flex-grow-1" style="background-image: url(<?php the_post_thumbnail_url( );?>);">
				<h5 class="site__pretitle"><?php the_category(', ') ?></h5>
				<h4 class="site__title site__title--small"><?php the_title() ?></h4>
				<a href="<?php the_permalink(); ?>" class="btn portfolio__button"><span>Ver</span> <i class="fas fa-chevron-right"></i></a>
			</div>
		</div>
		<?php
	}
}
wp_reset_postdata(); ?>	
