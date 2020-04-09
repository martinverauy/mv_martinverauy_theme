<?php
/**
 * Template for displaying the timeline items
 *
 * @package MV_MartinVeraUy_Theme
 */
?>

<div class="text-center">
	<h2 class="site__pretitle">La recompensa es el camino</h2>
	<h3 class="site__title">Experiencia & <br />Educación</h3>
</div>
<div class="timeline site">
	<div class="container">
		<div class="site__small">
  			<div class="timeline__date text-center">Presente</div>

  			<?php 
			$args = array (
				'post_type'              => 'expriencia',
				'order'                  => 'DESC',
				'posts_per_page'         => '99999',
			);
			$number = 0;
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					$number++;
					?>
					<div class="row <?php echo ($number % 2 == 0) ? 'justify-content-start' : 'justify-content-end'; ?>">
			  			<div class="col-12 col-md-6">
			  				<div class="timeline__block">
			  					
				  				<h2 class="site__pretitle"><span><?php echo get_the_date('Y'); ?></span><?php the_field('subtitulo'); ?></h2>
				  				<h3 class="site__title site__title--small mb-3">
					  				<?php if (get_field('puesto')) {
					  					the_field('puesto');
					  				} else {
					  					the_title();
					  				} ?>
				  				</h3>

				  				<?php if ( has_post_thumbnail() ) { ?>
				  					<div class="timeline__company">
				  						<?php the_post_thumbnail('', array('class' => 'timeline__image')); ?>
				  					</div>
				  				<?php } ?>
								
						  		<?php the_content() ?>

						  		<?php if (get_field('block_titulo')) { ?>
					  				<div class="site__block text-center">
					  					<h5 class="site__title mb-1">
					  						<?php the_field('block_titulo'); ?>
					  					</h5>
					  					<?php if (get_field('block_subtitulo')) { ?>
						  					<h6 class="site__pretitle mb-0">
						  						<?php the_field('block_subtitulo'); ?>
						  					</h6>
						  				<?php } ?>
					  				</div>
				  				<?php } ?>

				  				<?php
							    $images = acf_photo_gallery('aptitudes', $post->ID);
							    if( count($images) ):
							    	?>
							    	<ul class="list-inline timeline__inline">
							    	<?php
							        foreach($images as $image):
							            $title = $image['title'];
							            $full_image_url= $image['full_image_url'];
										?>
										<li class="list-inline-item">
											<img class="img--block" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" />
										</li>
									<?php endforeach; ?>
									</ul>
								<?php endif; ?>
						  	</div>
			  			</div>
			  		</div>
					<?php	
				}
			}
			wp_reset_postdata(); ?>	  		

  		</div>
	</div>
</div>
