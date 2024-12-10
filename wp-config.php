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
define( 'DB_NAME', 'yellostackhosting' );

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
define( 'AUTH_KEY',         'wk[8kK]S SbOw(Y7qIIoG|uUJGH& ?*LyO!t-Z${VY+_o|%Rn .#vo,h6QP:7oP9' );
define( 'SECURE_AUTH_KEY',  'N*naYFbeT#T`YY]#=7_2*Q4!Yu@pWhyP@!Fp1JU%Qo#j4]L2xRZ+8CT]tO&MvWGI' );
define( 'LOGGED_IN_KEY',    'W4-w`t_=P_q.{O8?Mv*YG66,8BR8Hs9+O[{7JLFoH}b_r@P Iql2>!V)^)y+Hntq' );
define( 'NONCE_KEY',        '0&q&Jp2#spem9gRq=Jlr0=V{{5FpDqi]fcC?,K#?M cf113nF-EnYtOHFk&pn-I[' );
define( 'AUTH_SALT',        '*0l1[1[p(q},j|d*x8zl][S}pDmXjNY(Q#HRWIQ/R);@m?opAoHrnw|$l2vvN!ap' );
define( 'SECURE_AUTH_SALT', 'XYd;J</U}e`8#Zq{@uc^vh#>2Niiw966R6$zAZ[JQ*T_OH9h_S@)BL5WxH=]o]mB' );
define( 'LOGGED_IN_SALT',   'c*vH+@vSIsd^zXs`KgXS7oF(T0?Ot-g!C[h5/3_g@C (?`,y0lFdld#{f I^I<oY' );
define( 'NONCE_SALT',       '7Wk a2IO*q!?>y^obY;Vn|f5Vt79vs|J*O{,Q#BKVV :3R9}<eoA9|0O]^t50hDk' );

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