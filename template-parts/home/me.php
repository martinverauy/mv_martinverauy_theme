<?php
/**
 * Template part for displaying bullets in the home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
<section class="me site py-5">
	<div class="container">
		<div class="row align-items-center">
			<?php if ( get_field('mi_foto') ) { ?>
				<div class="col-12 col-md-7">
					<img class="img--block" src="<?php echo get_field('mi_foto'); ?>" alt="<?php bloginfo( 'name' ); ?>" />
				</div>
			<?php } ?>
			<div class="col-12 col-md-5">
				<div class="me__title">
					<h3 class="site__title">Bienvenidos <br />a mi web</h3>
				</div>
				<p>Martín «Tincho» Vera, o sea yo, me desempeño hace años como diseñador web y maquetador freelance, con conocimientos en programación PHP, MySQL, Javascript y Jquery y mi especialidad es WordPress.</p>
				<p>Pasen y vean, no molesta que pregunten.</p>
				<hr />
				<a href="" class="btn">Mas de mi</a>
			</div>
		</div>
		
	</div>
</section>
