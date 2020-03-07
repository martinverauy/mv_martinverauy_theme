<?php
/**
 * Register customizer options
 *
 * @package MV_MartinVeraUy_Theme
 */

/**
 * Callback for customize_register action.
 *
 * Registers new customizer section and settings
 *
 * @param mixed $wp_customize customize registered parameter.
 */
function mv_martinverauy_theme_customize_register( $wp_customize ) {

	// Adding Setting.
	$wp_customize->add_setting( 'mv_martinverauy_theme_logo' );
	$wp_customize->add_setting( 'mv_martinverauy_theme_logo_width' );

	// Adding Control.
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'mv_martinverauy_theme_logo',
			array(
				'label'    => __( 'Upload Logo', 'mv_martinverauy_theme_logo' ),
				'section'  => 'mv_martinverauy_theme_customizer_section',
				'settings' => 'mv_martinverauy_theme_logo',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mv_martinverauy_theme_logo_width',
			array(
				'label'    => __( 'Logo Width (px)', 'mv_martinverauy_theme_logo_width' ),
				'section'  => 'mv_martinverauy_theme_customizer_section',
				'settings' => 'mv_martinverauy_theme_logo_width',
				'type'     => 'number',
			)
		)
	);

	// Adding Section.
	$wp_customize->add_section(
		'mv_martinverauy_theme_customizer_section',
		array(
			'title'    => __( 'MV_Theme Options', 'starter' ),
			'priority' => 30,
		)
	);
}

add_action( 'customize_register', 'mv_martinverauy_theme_customize_register' );
