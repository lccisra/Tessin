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
define( 'DB_NAME', 'nolansite' );

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
define( 'AUTH_KEY',         'hA>[B^6a<9Nl~Gq`cG:}3?Ud:4T4BfuTIoE0bx80E4>C@!a9/g)k99>?y19>A#tW' );
define( 'SECURE_AUTH_KEY',  '`EVUT5v29Jl KA%,}6h1:L,1.V<nzv>L@pF]7_@1eUD@)a*0(Ok9D*t&CL8?e._?' );
define( 'LOGGED_IN_KEY',    '$ZVZ=})I>p]4R5X4wF.>5(v<hF&|vSP)K/cih|9E$R5&Jq1<[~MkxJ+e^21o0y{h' );
define( 'NONCE_KEY',        'L55iE-rjG11]xGAKKmyqSYt,T<,#X4N:Eb/m{smchGJe:eY/gUR=hb6-3R9,i2E=' );
define( 'AUTH_SALT',        'Y9SR_n?InM4o]U&8Vo{H8.Ay_4LZ%6Oc;BIH]uyr14vc$uEl}eQU>^30^<~T>){X' );
define( 'SECURE_AUTH_SALT', 'cnpoaJSSOHCQAC*EDH#F`OOM{lJEA@Vo0ybcU!)=AmAlZ(=WS1QQ?/57^6f^#uPN' );
define( 'LOGGED_IN_SALT',   'eON}STb%M|z|:32tk~khWzr:/1i-jHHm?Wz:9NDnI*D8j&x>1sF3&l Suem:uUH1' );
define( 'NONCE_SALT',       'V(#BzbkPc~>JUv3)?dHG6u4Q2qT!qVbV[Ue?c%3]%QX=u54a]3h^:lG2h&+cYqs}' );

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
