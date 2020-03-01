<?php
/**
 * Template Name: Home Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

<section class="home-top height--full">
	<div class="container">
		<span class="home-top__pretitle">
			<?php echo esc_attr(get_bloginfo('description', 'display')); ?>
		</span>
		<h2 class="home-top__title">
			<span id="fraseTop">Sitios Web</span>
		</h2>
		
		<?php
		if(get_field('texto_introductorio')){
			echo '<p>'.get_field('texto_introductorio').'</p>';
		}
		if(get_field('link_portfolio')){
			echo '<a href="'.get_field('link_portfolio').'" class="btn btn--degradado">portfolio</a>';
		}
		?>
	</div>
</section>

<?php get_footer();
