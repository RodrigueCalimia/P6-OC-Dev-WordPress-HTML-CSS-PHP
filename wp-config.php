<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'op_devwp_p6' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Jx0{-)if2dp$g,.gQ9F{QK=ys*|]q9owa>#[|o),r.!B1H=rlqX^*rSbp#&-DoqI' );
define( 'SECURE_AUTH_KEY',  'ao1 5wXwtoUs))4h^}O*$l>-UFU`/}Q`G2CSn>ze%akH5;<h0wbf;M6I3v@hYXL5' );
define( 'LOGGED_IN_KEY',    '}3oQ[Ua{J=zi>(mHABm549t.>?qLE=zRfA!be7ul)0O]7`P6j-5CdBjHwYoFO7V9' );
define( 'NONCE_KEY',        '}pJxD}Nu(y_$3;<MH+5kqt.5#D3{Om&]G9|kC>Sau?{N(K*8cB+W@-:C#6C4;0AO' );
define( 'AUTH_SALT',        'F}EE lxEg0jLoV32??8:Xp%7,@GX;R8XavOwMa2E,IFKq-*ld%:]_aHd$~-LOe*x' );
define( 'SECURE_AUTH_SALT', 'gOyDqJ*a7&c)&!$5.Mllkn&J]MhFNo9<x?0`g2F=?_g~m_o45z^ @vUvwu%GNLCg' );
define( 'LOGGED_IN_SALT',   '(C)^VE8QS&8R7k_({xv~&>kB!)}xdzbD+N=3GlI/C(j ITnlvB+,^ppK;I@{Z=$5' );
define( 'NONCE_SALT',       ',VNa!!CC0^~$|K2<~g$$$V.i6]jt`XU`PUv[9y (T}:!),U7,1PeIAl]q3 DsjCF' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_op_devwp_p6_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
