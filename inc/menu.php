<?php
/**
 * Theme Menu
 *
 * @package MV_MartinVeraUy_Theme
 */

// This theme uses wp_nav_menu() in header.
register_nav_menus(
	array(
		'primary' => __( 'Primary', 'mv_martinverauy_theme' ),
	)
);

// This theme uses wp_nav_menu() in footer.
register_nav_menus(
	array(
		'secondary' => __( 'Secondary', 'mv_martinverauy_theme' ),
	)
);
