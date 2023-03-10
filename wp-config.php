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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '1tawMBbrrU~)F`dVSGpBVqZ@YW#~`R2m1F@t~Jo,QBF11tdG`*<0RD[?FfX1td_-' );
define( 'SECURE_AUTH_KEY',  'f,Lm9Cef7|=h*}Bg~Bj(8Q<talS?8}|X&wi^Ln]g`5:}1WLj8{#fOxV@R6hg^/R5' );
define( 'LOGGED_IN_KEY',    '4GP,)_D?e!v[8u4LDp1R4j0/G$Gw(GR(u%u0@XLdt|:NVwNmb2m6,*&E&]s3(o_j' );
define( 'NONCE_KEY',        'd3jg.-EGz7}{Rm4,ESWr[w+w*y:(vkd_J|AC`J)}jONn4:Os%j~P(:lR%c5WsOw?' );
define( 'AUTH_SALT',        'J*+..M!>!pS#Iq#9+T~0gPg`bSG!/j/kicas$]r(rA*E[X0N;Jo.{j9&9PQ5o#D[' );
define( 'SECURE_AUTH_SALT', 'kV)bMHbos*M?|14L&gzTn3;~}&bQK]dxwuymGkhbT<+dave-)lC<$m05q!MuP,Fu' );
define( 'LOGGED_IN_SALT',   '([t]9P]~>S=c_`>|&</ExfhKNR$wINnCr<8`-sUS5^UD}O+it#>@CAJe!u_sUc}O' );
define( 'NONCE_SALT',       'U*Rl/}tnCtk+$#Q5Bs4/55*o%er]6pXr>&UNf/)i#SZG|/C*!>I,%X@b`svM{T|#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
