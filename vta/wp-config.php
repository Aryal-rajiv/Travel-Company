<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vta' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '15^w[./Pm,V1Y,H`V=%>Z26Tpe7kQE!x#HUt]IE&wT0|+k4NRF(7mS<]x4vo42+W' );
define( 'SECURE_AUTH_KEY',  'X*L7HI^{(3d >Ol3jfyvA_srI:/sunD.xsx6Axuh1k^?%EO~PL+hA;Ye>FJOxh>b' );
define( 'LOGGED_IN_KEY',    'ncAH%:*VnwO,Owz)B[#EJGhG,yZ&w)&KO@teFr*uwia9a4<%@.%Avo[2?lMcfeUe' );
define( 'NONCE_KEY',        '5RlfJt%T~.}z[>#q 69.oLlF@7PDcJDN@qQcJ{0>T!tG@k?M#>Rh#/0c0&FpKm-:' );
define( 'AUTH_SALT',        '1#%G*:LOGEZPm70/Awv=eQ9SZSx22IJ+w8CC5QXp9$ :T+l;pl+L3:jS4x-g29V<' );
define( 'SECURE_AUTH_SALT', 'JEp1&RV:Z7V<l[#`y B[bXcrX[toG@3G@0IM(1cD!: D[7wZu4uh#_rT*xtU(vT.' );
define( 'LOGGED_IN_SALT',   '`#Sj*t B6m3Ly,c4s(7y}nL=h8}@wss#cR |T&e$)At6kS^oReMGw5!.bFz[g03F' );
define( 'NONCE_SALT',       'VO:Z6n]Y6R/12J!w/r5k3*2>i$!).d.005I* [$$?~J<fM^|Y#c$pIq=R*|/P|W<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
