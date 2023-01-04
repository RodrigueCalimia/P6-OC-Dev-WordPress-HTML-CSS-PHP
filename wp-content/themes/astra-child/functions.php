<?php
/**
** activation theme
**/
function theme_enqueue_styles() {
    wp_enqueue_style( 'astra-child', get_stylesheet_directory_uri() . '/style.css');
}
/**
** activation des menus
**/
function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
    register_nav_menu( 'footer-menu', 'Pied de page' );
}
function astra_child_menu_class($classes){
    /* code qui permet debuguer
    * ici on affiche toutes les classes de la page
    var_dump(func_get_args());
    die();
    */
    /* ajout de la classe nav-item sur les li */
    $classes[]='nav-item';
    return $classes;
}
function astra_child_menu_link_class($attrs){
    /* code qui permet debuguer
    * ici on affiche toutes les classes de la page
    var_dump(func_get_args());
    die();
    */
    /* ajout de la classe nav-link sur les balises <a> */
    $attrs['class']='nav-link';
    return $attrs;
}
/**
** appel des actions
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 11); /* le chiffre 11 permet de passer devant le parent */
add_action( 'after_setup_theme', 'register_my_menu' );
/* recherche dans class-walker-nav-menu.php les filtres à utiliser pour apporter les modifications de classes */
add_filter('nav_menu_css_class','astra_child_menu_class'); /* ajout d'un filtre pour ajouter une classe aux li de la nav */
add_filter('nav_menu_link_attributes','astra_child_menu_link_class'); /* ajout d'un filtre pour ajouter une classe aux li de la nav */