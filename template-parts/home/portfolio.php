<?php
/**
 * Template part for displaying portfolio items on the home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */
?>
<section class="portfolio site py-5">
	<div class="container">
		<div class="text-center">
			<h2 class="site__pretitle">Hazte conocido en el mundo</h2>
			<h3 class="site__title">Buscas un sitio web? <br /> #HelloWorld</h3>
		</div>
		<div class="row">

			<?php get_template_part( 'template-parts/portfolio-items' ); ?>

			<div class="col-12 col-md-3 d-flex flex-column">
				<div class="site__block portfolio__block bg--red flex-grow-1">
					<h5 class="site__pretitle color--white">Ver todos mis portfolios.</h5>
					<h4 class="site__title site__title--small">Todos los portfolios</h4>
					<a href="<?php echo home_url('/portfolio'); ?>" class="btn portfolio__button"><span>Ver más</span> <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>

		</div>
	</div>
</section>
