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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '1 >n+F6r{<onq5dlf!ASTZ.{bGv&i|L[O0Y38Of5!t43b3ZsN leD]!TkG8WgnYZ' );
define( 'SECURE_AUTH_KEY',  '>oR6,w_-45HBbB`>_51sSfX|;S;smup>)~Sh;S{Bt@w4ZIVo#1mm7H;Q;|5_b>(0' );
define( 'LOGGED_IN_KEY',    'PFvb!Mr`*)ER/mI<CGoo$MAn91s==m]?z9KBj_S-XEzS+!5G{Dm@k:XL`=exnOce' );
define( 'NONCE_KEY',        'lPhU3:2G%e7eJbpwIMWu?GG6 WSi_a)_<DE?^j(/8w@?jbYQ2dX<3{~E+/?vVMwE' );
define( 'AUTH_SALT',        'Iz4zZ[vI*^`*K$xXk{saY0KA=X;XyZ4 v0s(/.Q[gZ|i%/T^FvA1>e.,=/>j2c}7' );
define( 'SECURE_AUTH_SALT', 'Gna V2?~+#3Hqwz=P`y)SV&@@A.[/~KqX,[jf(0Cr@8%0?X:TQy45G8kk]T}R<`O' );
define( 'LOGGED_IN_SALT',   'jD`A9PDNK>lN[ADW$+6`#[8nf p|AIpvUKKXqfbb(}2IW+:eD!O~M})5thH_G]:1' );
define( 'NONCE_SALT',       'l88W8PprCxzknFK2`!K]mM{GnF]hwA;i-@!G9:/=5kS^9?DLB[w;|lr02DLX:R/ ' );

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
