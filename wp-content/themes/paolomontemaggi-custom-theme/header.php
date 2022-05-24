<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paolomontemaggi-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<div class="body-wrapper">
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
			<div id="page" class="site">
				<header id="masthead" class="site-header main-column">
					<div class="header-wrap">
							<h1 class="header-title"><?= get_the_title(); ?></h1>
						<nav id="site-navigation" class="main-navigation">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
							?>
						</nav><!-- #site-navigation -->
						<div class="toggle-menu">
							<svg id="Menu" class="ham-menu-right" xmlns="http://www.w3.org/2000/svg" width="26" height="22" viewBox="0 0 26 22">
								<path id="Menu-2" data-name="Menu" d="M0,22V18.856H16.251V22Zm0-9.428V9.428H26v3.144ZM0,3.144V0H26V3.144Z" fill="#98a9a5"/>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="close-menu-right" width="26" height="22" viewBox="0 0 20.607 20.606">
								<g id="Menu" transform="translate(-2.696 -0.697)">
									<path id="Menu-2"  data-name="Menu" d="M13,13.222,4.919,21.3,2.7,19.081,10.778,11,2.7,2.919,4.919.7,13,8.777,21.081.7,23.3,2.919,15.223,11,23.3,19.081,21.081,21.3Z"/>
								</g>
							</svg>
						</div>
					</div>
				</header><!-- #masthead -->
				<div class="page-spacer">
				</div>
				<div class="svg-circle-line">
				<svg xmlns="http://www.w3.org/2000/svg" class="parallax--translateY" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="120" viewBox="0 0 48 299">
							<defs>
								<linearGradient id="linear-gradient" x1="0.5" y1="0.759" x2="0.5" y2="-0.773" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#cee6e4"/>
								<stop offset="1" stop-color="#636363"/>
								</linearGradient>
							</defs>
							<g id="Raggruppa_3018" data-name="Raggruppa 3018" transform="translate(-936 -957)">
								<line id="Linea_1" data-name="Linea 1" y2="219" transform="translate(960 988.5)" fill="none" stroke="#8f8f8f" stroke-width="4" stroke-dasharray="10"/>
								<circle id="Ellisse_1" data-name="Ellisse 1" cx="10.5" cy="10.5" r="10.5" transform="translate(950 957)" fill="url(#linear-gradient)"/>
								<circle id="Ellisse_2" data-name="Ellisse 2" cx="24" cy="24" r="24" transform="translate(936 1208)" fill="url(#linear-gradient)"/>
							</g>
						</svg>
				</div>
