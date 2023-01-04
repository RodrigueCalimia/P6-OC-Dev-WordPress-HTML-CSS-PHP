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
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
?>
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
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
