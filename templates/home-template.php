<?php
/**
 * Template Name: Home Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header(); ?>

<?php get_template_part( 'template-parts/home/top' ); ?>

<section class="bullets site">
	<div class="container">
		<h2 class="site__title">Buscas un <b>sitio web?</b></h2>
		<div class="site__small bullets__content">
			<?php
		    $images = acf_photo_gallery('servicios', $post->ID);
		    if( count($images) ):
		        ?>
		        <div class="row">	
			        <?php
			        foreach($images as $image):
			            $title = $image['title']; //The title
			            $caption= $image['caption']; //The caption
			            $full_image_url= $image['full_image_url']; //Full size image url
						?>
						<div class="col-12 col-md-6">
							<div class="bullets__item">
								<div class="bullets__icon">
									<img class="img--block" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
								</div>
								<h4 class="site__subtitle"><?php echo $title; ?></h4>
								<p><?php echo $caption; ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>	
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/home/news' ); ?>

<?php get_footer();
