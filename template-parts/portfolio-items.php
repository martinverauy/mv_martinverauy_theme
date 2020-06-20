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
} else {
	$args = array (
		'post_type'              => 'portfolio',
		'order'                  => 'DESC',
		'posts_per_page'         => 999999,
	);
}

$count = 0;
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		$count++;
		?>
		<div class="col-12 <?php echo ($count === 1) ? 'col-md-6' : 'col-md-3'; ?> d-flex flex-column">
			<a href="<?php the_permalink(); ?>">
				<div class="site__block portfolio__block flex-grow-1" style="background-image: url(<?php the_post_thumbnail_url( );?>);">
					<h5 class="site__pretitle">
						<?php 
						foreach((get_the_category()) as $category) { 
						    echo '<span>'.$category->cat_name .'</span>';
						} 
						?>
					</h5>
					<h4 class="site__title site__title--small"><?php the_title() ?></h4>
				</div>
			</a>
		</div>
		<?php
	}
}
wp_reset_postdata(); ?>	
