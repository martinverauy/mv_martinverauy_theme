<?php

/**
 * Block: Timeline Item
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
$id = 'mv-timeline-item' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'timeline__block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

// Load values and assign defaults.
$year = get_field('year') ?: 'Año...';
$subtitulo = get_field('subtitulo') ?: 'Subtitulo...';
$puesto = get_field('puesto') ?: 'Puesto...';
$logo = get_field('logo') ?: 295;
$texto = get_field('year') ?: 'Texto...';
$destacado = get_field('destacado') ?: 'Destacado...';
$destacado_subtitulo = get_field('destacado_subtitulo') ?: 'Destacado Subtitulo...';
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <h2 class="site__pretitle">
    	<span><?php echo $year; ?></span>
    	<?php echo $subtitulo; ?>
    </h2>
	<h3 class="site__title site__title--small mb-3">
		<?php echo $puesto; ?>
	</h3>

	<div class="timeline__company">
		<?php echo wp_get_attachment_image( $logo, 'full' ); ?>
	</div>

	<?php echo $texto; ?>

	<div class="site__block text-center">
		<h5 class="site__title mb-1">
			<?php echo $destacado; ?>
		</h5>
		<h6 class="site__pretitle mb-0">
			<?php echo $destacado_subtitulo; ?>
		</h6>
	</div>
</div>
