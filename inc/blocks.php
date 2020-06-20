<?php
/**
 * Register a custom block type.
 *
 * @package MV_MartinVeraUy_Theme
 */

add_action( 'acf/init', 'mv_martinverauy_theme_blocks_types' );
/**
 * Register a custom block type.
 */
function mv_martinverauy_theme_blocks_types() {

	// Check function exists.
	if ( function_exists( 'acf_register_block_type' ) ) {

		// Block: Timeline Item.
		acf_register_block_type(
			array(
				'name'            => 'mv-timeline-item',
				'title'           => __( 'MV Timeline Item' ),
				'description'     => __( 'A MV block.' ),
				'render_template' => 'block-templates/mv-timeline-item.php',
				'category'        => 'mvera',
				'icon'            => 'editor-removeformatting',
				'keywords'        => array( 'timeline', 'info', 'mvera' ),
			)
		);
	}
}