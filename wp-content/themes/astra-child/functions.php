<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
/**
** activation des menus
**/
function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
  }
  add_action( 'after_setup_theme', 'register_my_menu' );