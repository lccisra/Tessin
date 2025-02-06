<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tessin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2yn5^ty60>+PRo6P8@^uV>,P7$rhWs]Nz^*kJwSk<^([jr|3[mc8ft^A_{bI TqU' );
define( 'SECURE_AUTH_KEY',  'M9f-:K8MCgwYB|*8<*,KE?|Z;bC2rzO?=)J/>j:UF)0QgDvC;_6.yrP4{Mcl|j[D' );
define( 'LOGGED_IN_KEY',    '8-vsox]?1^E|oP+5*>fHyaUSll#b2C@F=/%OSVntY<_4BmgF6_}aM)A#p+_|<E@6' );
define( 'NONCE_KEY',        'mP|1RBuzD6s>NDUr>;?S+[h:No9Lcmz|[j{j<3R,J..;|e~u]Bdlg:-</zZq}}G>' );
define( 'AUTH_SALT',        'jz0GP,6 hsIn.T_@EVSbDOr}G00 2,eAFl^T)ygJ~)y|~k:H0YBj%Ez]Nf<Qd*eP' );
define( 'SECURE_AUTH_SALT', 'rr<3I#fXMnNTFz*j]b3ZPoh>x+%?2LB em8kB|C1FigMav5lru2N*^265|)-vf])' );
define( 'LOGGED_IN_SALT',   'xGd`&=E*,wzCs{J<+Yg$Yc{V8(/pW(D(8 lkhdu*})kn2{HnSo{qgNn_X{Bnk%VI' );
define( 'NONCE_SALT',       'qcIx2M$_C^eoHHkOXFr VuQtyx0wh,-]EX}xctj5LY ;)#%9FGTXpO~~23nt/2]P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
