<?php
/**
 * Create our custom shortcodes
 *
 * @package MV_MartinVeraUy_Theme
 */

/**
 * Add support for shortcodes in widgets
 */
add_filter( 'widget_text', 'do_shortcode' );
