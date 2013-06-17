<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Advent+Pro">
<?php echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/page.css">'; ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
</head>

<body>
<div id="page">
	<header class="mainhd">
		<h1><a href="./">RED!!ARIO</a></h1>
		<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'walker' => new myCustom_Walker_Nav_Menu() ) ) ; ?>
		</nav>
		<div class="copy">
			Since 2005<br>All rights reserved
		</div>
	</header>

	<div id="main" class="container">