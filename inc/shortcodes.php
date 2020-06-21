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

/**
*
* Shortcode to output A Content Color Box.
* [mv_redes_sociales] 
* 
*/

function mv_martinverauy_theme_shortcode_redes( $atts ) {
	$params = shortcode_atts(
		array(
			'footer'   => '',
		),
		$atts
	);


	$mv_redes_sociales = '<ul class="list-inline list-social">';

	if ( $params['footer'] ) {
		$mv_redes_sociales.= '<li class="list-inline-item">&copy; ' . date('Y') . '</li><li class="list-inline-item">&#124;</li>';
	}

	$mv_redes_sociales.= '<li class="list-inline-item">Sigueme en</li>';

	$themeOption = get_option('my_theme_option');
	if($themeOption){
		if($themeOption['Behance']){
			$mv_redes_sociales.= '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Behance'].'" target="_blank"><i class="fab fa-behance"></i></a></li>';
		}
		if($themeOption['Facebook']){
			$mv_redes_sociales.= '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Facebook'].'" target="_blank"><i class="fab fa-facebook-f"></i></a></li>';
		}
		if($themeOption['Twitter']){
			$mv_redes_sociales.= '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Twitter'].'" target="_blank"><i class="fab fa-twitter"></i></a></li>';
		}
		if($themeOption['Instagram']){
			$mv_redes_sociales.= '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Instagram'].'" target="_blank"><i class="fab fa-instagram"></i></a></li>';
		}
		if($themeOption['Pinterest']){
			$mv_redes_sociales.= '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Pinterest'].'" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>';
		}
		if($themeOption['Linkedin']){
			$mv_redes_sociales.= '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Linkedin'].'" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>';
		}
	}
	$mv_redes_sociales.= '</ul>';
	return $mv_redes_sociales;
}
add_shortcode('mv_redes_sociales', 'mv_martinverauy_theme_shortcode_redes');
