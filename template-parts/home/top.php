<?php
/**
 * Template part for displaying the top home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
<section class="home-top">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-6">
				<div class="home-top__block">
					<span class="home-top__pretitle">
						<?php echo esc_attr(get_bloginfo('description', 'display')); ?>
					</span>
					<h2 class="home-top__title">
						<span id="fraseTop">Sitios Web</span>
					</h2>
					<?php
					if(get_field('texto_introductorio')){
						echo '<p class="mb-5">'.get_field('texto_introductorio').'</p>';
					}
					if(get_field('link_portfolio')){
						echo '<a href="'.get_field('link_portfolio').'" class="btn btn--red">Portfolio</a>';
					}
					if(get_field('link_mi')){
						echo '<a href="'.get_field('link_mi').'" class="btn btn--border">Sobre Mi</a>';
					}
					?>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<?php the_post_thumbnail('', array('class' => 'home-top__image img--block')); ?>
			</div>
		</div>
		
	</div>
</section>
