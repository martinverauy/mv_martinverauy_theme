<?php

/**
 * Block: Section Title
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
$id = 'mv-section-title-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'section-title';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$site_pretitle = get_field('site_pretitle');
$site_title = get_field('site_title') ?: 'Titulo';
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<?php if ( $site_pretitle ) { ?>
	<h2 class="site__pretitle"><?php echo $site_pretitle; ?></h2>
		<?php } ?>
	<?php if ( $site_title ) { ?>
		<h3 class="site__title"><?php echo $site_title; ?></h3>
	<?php } ?>
</div>
