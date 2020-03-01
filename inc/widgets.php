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
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'MV_MartinVeraUy_Theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'MV_MartinVeraUy_Theme' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets for footer here.', 'MV_MartinVeraUy_Theme' ),
			'before_widget' => '<div class="site-footer__widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<span class="d-none">',
			'after_title'   => '</span>',
		)
	);
}

add_action( 'widgets_init', 'mv_martinverauy_theme_widgets_init' );
