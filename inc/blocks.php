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

		// Block: Section Title.
		acf_register_block_type(
			array(
				'name'            => 'mv-section-title',
				'title'           => __( 'MV Section Title' ),
				'description'     => __( 'A MV block for section titles.' ),
				'render_template' => 'block-templates/mv-section-title.php',
				'category'        => 'mvera',
				'icon'            => 'editor-removeformatting',
				'keywords'        => array( 'title', 'subtitle', 'mvera' ),
			)
		);

		// Block: Red Item.
		acf_register_block_type(
			array(
				'name'            => 'mv-red-item',
				'title'           => __( 'MV Red Item' ),
				'description'     => __( 'A MV block for one word.' ),
				'render_template' => 'block-templates/mv-red-item.php',
				'category'        => 'mvera',
				'icon'            => 'editor-removeformatting',
				'keywords'        => array( 'word', 'one', 'mvera' ),
			)
		);

		// Block: Timeline Item.
		acf_register_block_type(
			array(
				'name'            => 'mv-timeline-item',
				'title'           => __( 'MV Timeline Item' ),
				'description'     => __( 'A MV block for timeline items.' ),
				'render_template' => 'block-templates/mv-timeline-item.php',
				'category'        => 'mvera',
				'icon'            => 'editor-removeformatting',
				'keywords'        => array( 'timeline', 'info', 'mvera' ),
			)
		);
	}
}