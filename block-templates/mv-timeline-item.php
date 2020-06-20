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
$id = 'mv-timeline-item-' . $block['id'];
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
$logo = get_field('logo');
$texto = get_field('texto') ?: 'Texto...';
$destacado = get_field('destacado');
$destacado_subtitulo = get_field('destacado_subtitulo');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <h2 class="site__pretitle">
    	<span><?php echo $year; ?></span>
    	<?php echo $subtitulo; ?>
    </h2>
	<h3 class="site__title site__title--small mb-3">
		<?php echo $puesto; ?>
	</h3>

	<?php if( !empty( $logo ) ) { ?>
		<div class="timeline__company">
			<img class="timeline__image" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
		</div>
	<?php } ?>

	<p><?php echo $texto; ?></p>

	<?php if ( $destacado ) { ?>
		<div class="site__block site__shadow text-center">
			<h5 class="site__title mb-1">
				<?php echo $destacado; ?>
			</h5>
			<h6 class="site__pretitle mb-0">
				<?php echo $destacado_subtitulo; ?>
			</h6>
		</div>
	<?php } ?>

	<?php if( have_rows('aptitudes') ): ?>
		<ul class="list-inline timeline__inline">
		<?php while( have_rows('aptitudes') ): the_row(); 
			$aptitud = get_sub_field('aptitud');
			?>
			<li class="list-inline-item">
				<img class="img--block" src="<?php echo $aptitud['url']; ?>" alt="<?php echo $aptitud['alt'] ?>" />
			</li>
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>
