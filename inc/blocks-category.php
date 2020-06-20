<?php
/**
 * Add a block category for MV Blocks blocks if it doesn't exist already.
 *
 * @param array $categories Array of block categories.
 *
 * @package MV_MartinVeraUy_Theme
 */
function mv_martinverauy_theme_block_categories( $categories ) {
    $category_slugs = wp_list_pluck( $categories, 'slug' );
    return in_array( 'mvera', $category_slugs, true ) ? $categories : array_merge(
        $categories,
        array(
            array(
                'slug'  => 'mvera',
                'title' => __( 'MV Blocks', 'mvera' ),
                'icon'  => null,
            ),
        )
    );
}
add_filter( 'block_categories', 'mv_martinverauy_theme_block_categories' );
