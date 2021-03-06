<?php
/**
 * Template part for displaying bullets in the home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
<section class="me site p-5">
	<div class="container">
		<div class="row align-items-center">
			<?php if ( get_field('mi_foto') ) { ?>
				<div class="col-12 col-md-7">
					<img class="img--block img--border-radius" src="<?php echo get_field('mi_foto'); ?>" alt="<?php bloginfo( 'name' ); ?>" />
				</div>
			<?php } ?>
			<div class="col-12 col-md-5">
				<div class="me__title">
					<h3 class="site__title">Bienvenidos <br />a mi web</h3>
				</div>

				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					}
				}
				?>

				<?php 
				$firma = get_field('firma');
				if( !empty( $firma ) ): ?>
				    <p class="site__firma"><img src="<?php echo esc_url($firma['url']); ?>" alt="<?php echo esc_attr($firma['alt']); ?>" /></p>
				<?php endif; ?>
			</div>
		</div>
		
	</div>
</section>
