<?php

/**
 * Block: Data Repeater
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
  *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package MV_MartinVeraUy_Theme
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'mv-data-repeater-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'site black-mode';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$titulo = get_field('titulo') ?: 'Titulo...';
$subtitulo = get_field('subtitulo') ?: 'Subtitulo...';
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="py-5">
		<div class="container">
			<h2 class="site__pretitle"><?php echo $subtitulo; ?></h2>
			<div class="row">	
				<div class="col-12 col-md-4">
					<h3 class="site__title"><?php echo $titulo; ?></h3>
				</div>
				<?php if( have_rows('informacion') ): ?>
				    <?php while( have_rows('informacion') ): the_row(); 
				        ?>
				        <div class="col-12 col-md-2 <?php echo ( get_sub_field( 'grande' ) ) ? 'col-12 col-md-4' : 'col-12 col-md-2'; ?>">
							<h4 class="font--big"><?php the_sub_field('data'); ?></h4>
							<h2 class="site__pretitle"><?php the_sub_field('descripcion'); ?></h2>
						</div>
				    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
