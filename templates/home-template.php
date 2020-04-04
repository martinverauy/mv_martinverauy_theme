<?php
/**
 * Template Name: Home Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

get_header();
get_template_part( 'template-parts/home/top' );
get_template_part( 'template-parts/home/bullets' );
get_template_part( 'template-parts/home/me' );
get_template_part( 'template-parts/home/portfolio' );
get_template_part( 'template-parts/home/news' );
get_footer();
