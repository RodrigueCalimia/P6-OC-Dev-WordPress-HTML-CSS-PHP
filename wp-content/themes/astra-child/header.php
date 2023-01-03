<?php
/**
 * The header for Astra Child.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<div>
	<nav id="navigation">
		<?php if(has_custom_logo()) : ?>
		<?php the_custom_logo(); ?>
		<?php else : ?>
		<h1><a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<?php endif; ?>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main-menu',
					'menu_id' => 'menu-principal',
					'container' => false, /*suprime la div par défaut de WordPress avec la class menu-menu-container*/
					'menu-class' => 'navbar-nav', /* redefinit la class de la balise nav*/
				)
			);
		?>
	</nav>
