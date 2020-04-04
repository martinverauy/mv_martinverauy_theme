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
	<body <?php body_class('site'); ?> >
		<?php do_action( 'after_body_open_tag' ); ?>

		<header class="header-site">
			<nav class="navbar navbar-expand-lg navbar-light header-site__navbar">
				<div class="container">
					<?php if ( get_theme_mod( 'mv_martinverauy_theme_logo' ) ) : ?>
						<a href="<?php echo home_url('/'); ?>" class="navbar-brand header-site__logo" rel="home" itemprop="url" style="<?php if ( get_theme_mod( 'mv_martinverauy_theme_logo_width' ) ) { echo 'width: ' . get_theme_mod( 'mv_martinverauy_theme_logo_width' ) . 'px'; } ?>">
							<img src="<?php echo get_theme_mod( 'mv_martinverauy_theme_logo' ); ?>" class="img--block" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="logo">
						</a>        
					<?php endif; ?>
					<?php if ( get_theme_mod( 'mv_martinverauy_theme_small_logo' ) ) : ?>
						<a href="<?php echo home_url('/'); ?>" class="navbar-brand header-site__logo header-site__logo--small" rel="home" itemprop="url">
							<img src="<?php echo get_theme_mod( 'mv_martinverauy_theme_small_logo' ); ?>" class="img--block" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="logo">
						</a>        
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
						<span class="navbar-text">
					      	<?php
					      	$buttonParameters = 'type="button" id="blackMode" onClick="blackMode()" data-toggle="tooltip" data-placement="bottom" title="Black Mode"';
					      	$themeOption = get_option('my_theme_option');
							if ( $themeOption['Black Mode'] == 'Si' ) {
								echo '<button ' . $buttonParameters . ' class="btn--switch btn--active"><i class="fas fa-toggle-on"></i></button>';
							} else {
								echo '<button ' . $buttonParameters . ' class="btn--switch"><i class="fas fa-toggle-off"></i></button>';
							}
					      	?>
					    </span>
					</div>
				</div>
			</nav>
		</header>
