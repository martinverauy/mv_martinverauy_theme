<?php

/**
 * Block: Red Item
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
$id = 'mv-red-item-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'site__date bg--red';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$texto = get_field('texto') ?: 'Texto...';
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<?php echo $texto; ?>
</div>
