<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MV_MartinVeraUy_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php do_action( 'after_head_open_tag' ); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<?php do_action( 'before_head_close_tag' ); ?>
	</head>
	<body <?php body_class(); ?> >
		<?php do_action( 'after_body_open_tag' ); ?>

		<header class="header-site">
			<nav class="navbar navbar-expand-lg navbar-light bg-light header-site__navbar">
				<div class="container">
					<?php if ( get_theme_mod( 'mv_martinverauy_theme_logo' ) ) : ?>
						<a href="<?php echo home_url('/'); ?>" class="navbar-brand header-site__logo" rel="home" itemprop="url"><img src="<?php echo get_theme_mod( 'mv_martinverauy_theme_logo' ); ?>" class="custom-logo" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="logo"></a>        
					<?php // add a fallback if the logo doesn't exist
					else : ?>
					<?php the_custom_logo(); ?>
					<?php endif; ?>

					<button class="navbar-toggler header-site__toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'depth'           => 2,
							'container'       => 'false',
							'menu_class'      => 'nav navbar-nav ml-auto header-site__nav',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					);
					?>
				  </div>
				</div>
			</nav>
		</header>
