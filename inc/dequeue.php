<?php
/**
 * Dequeue scripts & styles for theme here
 *
 * @package MV_MartinVeraUy_Theme
 */

/**
 * Gutemberg stylesheet.
 */
function dequeue_gutenberg_theme_css() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_gutenberg_theme_css', 100);
