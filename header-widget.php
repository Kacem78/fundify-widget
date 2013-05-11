<?php
/**
 * The Header widget for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Fundify
 * @since Fundify 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]> <html class="ie7 oldie" lang="en" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="ie8 oldie" lang="en" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body style="background: none !important" <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
