<?php
/**
 * Template part for displaying bullets in the home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */
if( have_rows('servicios') ): ?>
	<section class="bullets site p-5">
		<div class="container">
			<div class="text-center pb-5">
				<h2 class="site__pretitle">Hazte conocido en el mundo</h2>
				<h3 class="site__title">Buscas un sitio web? <br /> Puedo ayudarte!</h3>
			</div>
			<div class="row">
				<?php while( have_rows('servicios') ): the_row(); 
					$nombre = get_sub_field('nombre');
					$texto = get_sub_field('texto');
					?>
					<div class="col-12 col-md-4 d-flex flex-column">
						<div class="site__block site__shadow flex-grow-1">
							<div class="row">	
								<div class="col-12 col-md-3">
									<div class="site__icon bg--red text-center square"><i class="fas fa-check"></i></div>
								</div>
								<div class="col-12 col-md-9">
									<h4 class="site__subtitle"><?php echo $nombre; ?></h4>
									<p class="mb-0"><?php echo $texto; ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
