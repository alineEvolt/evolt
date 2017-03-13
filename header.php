<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evolt
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />

	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6527176/6457772/css/fonts.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
	<header id="masthead">
		<div class="wrapper">
			<div class="flex-container">
				<div class="w50">
					<h1 class="logo"><a href="#" title="Revenir à la page d'accueil"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="évolt" width="60" height="24" /></a></h1>
				</div>
				<div id="mainnav" class="w50 txtright">
					<div class="burger fr">
			   		<input type="checkbox" id="menu" />
			    	<label class="label" for="menu"><span></span></label>
		    	</div>
		    	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'navigation' ) ); ?>
				</div>
			</div>
		</div>
	</header>
	<main id="main">

