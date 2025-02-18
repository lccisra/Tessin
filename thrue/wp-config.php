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
define( 'DB_NAME', 'thrue' );

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
define( 'AUTH_KEY',         '|joko)w;RHwb.*iZuFSY2`{u3{wR(NGUQ4* mG>V6g:P~q$Kcn7V+x/{0a&4(f%v' );
define( 'SECURE_AUTH_KEY',  'p)cQZ7iPGYI_cx)IL[1x[LnhO@xRXtt%jJotsCs]W1I?ln/coM-ICEds*!|-?eO3' );
define( 'LOGGED_IN_KEY',    '^j!Pf9UA50N;f!S4fSN4pP}K?AFg>,h784$y!-X5F[&WWRss%p@ZxF f}8> A^9]' );
define( 'NONCE_KEY',        '+i`zX4$3I>#;8,]=lQu7 I6pd/}L70zq>sER*`IL9k^daLI931N-j1>g8,`nUi5%' );
define( 'AUTH_SALT',        '&PC6vDabn6yZYefmS*l:yIGe}!8j`L|I}ZPs:l%i}/so`tL!s_w^2sM1jxLZ)fc=' );
define( 'SECURE_AUTH_SALT', 'c}wpI]{;| ~OH+;Vo90G{{BE;Y}gG6$.2RTCvfRa[gJggp;OZ#W+?4hYtR-t}|eh' );
define( 'LOGGED_IN_SALT',   '.clG;gHZ|K$}m~p!b11|-3@z=8CiE3Nyp$%!xF;jL:X?m(F!wuIBcdQ#&L#qjV.5' );
define( 'NONCE_SALT',       'dT{w(@T4BR|[1Xuk|%QfA_Hh )[rQL0n-9&y@ptQMMY9}|[a>FN+by3SmKbwl4K:' );

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
