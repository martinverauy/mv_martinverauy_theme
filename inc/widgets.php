<?php
/**
 * MV_MartinVeraUy_Theme widgets definitions
 *
 * @package MV_MartinVeraUy_Theme
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mv_martinverauy_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'MV_MartinVeraUy_Theme' ),
			'id'            => 'right-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'MV_MartinVeraUy_Theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget__title">',
			'after_title'   => '</h5>',
		)
	);
}

add_action( 'widgets_init', 'mv_martinverauy_theme_widgets_init' );
