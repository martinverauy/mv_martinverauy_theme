<?php
/**
 * Template part for displaying bullets in the home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
<section class="bullets site py-5">
	<div class="container">
		<div class="text-center">
			<h2 class="site__pretitle">Hazte conocido en el mundo</h2>
			<h3 class="site__title">Buscas un sitio web? <br /> #HelloWorld</h3>
		</div>
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
