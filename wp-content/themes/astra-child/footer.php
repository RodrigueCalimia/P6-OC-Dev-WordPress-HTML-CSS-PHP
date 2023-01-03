<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
	</div> <!-- ast-container -->
	</div><!-- #content -->

	</div><!-- #page -->
	<footer>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'menu_id' => 'pied-de-page',
					'container' => false, /*suprime la div par défaut de WordPress avec la class menu-menu-container*/
					'menu-class' => 'navbar-nav', /* redefinit la class de la balise nav*/
				)
			);
		?>
	</footer>
<?php 
	wp_footer(); 
?>
	</body>
</html>
