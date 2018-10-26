<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/favicon-32x32.png' ); ?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/favicon-96x96.png' ); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/favicon-16x16.png' ); ?>">

<title>LibertyJS - A two day premier Javascript conference in Philadelphia</title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div
		class="ljs-menu__container ljs-menu__menu-close"
		id="ljs-menu__container">
		<div
			class="ljs-menu__menu-toggle"
			id="ljs-menu__menu-toggle">
			<i
				class="fa fa-bars"
				aria-hidden="true"></i>
			<i
				class="fa fa-times"
				aria-hidden="true"></i>
		</div>
		<div
			class="ljs-menu__menu-container">
			<a href="/">
				<img
					class="ljs-menu__logo"
					src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/2018/ljs-secondary-logo-black-blue.png' ); ?>"
					alt="LibertyJS Logo">
			</a>
			<div class="ljs-menu__menu-logo"></div>
			<div
				class="ljs-menu__menu-menu"
				id="ljs-menu__menu-menu">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/speakers">Speakers</a></li>
					<li><a href="/schedule">Schedule</a></li>
					<li><a href="/sponsor">Sponsor</a></li>
					<li><a href="/volunteer">Volunteer</a></li>
					<li><a href="/code-of-conduct">Code of Conduct</a></li>
				</ul>
			</div>
		</div>
	</div>
