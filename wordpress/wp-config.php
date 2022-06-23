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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fans' );

/** Database username */
define( 'DB_USER', 'huyvo' );

/** Database password */
define( 'DB_PASSWORD', 'voduchuyvo123' );

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
define( 'AUTH_KEY',         '+,;wkCAM[ TKJkcg )W)5FBByNdOpzC>USy|JAkjA]wh#% 2OfgD`!c_Q2x5>L:[' );
define( 'SECURE_AUTH_KEY',  'Csd-b^s+0-{R%%yd+NpMq)c5Js+3z)!K8AN!heYL#_5&Zdf5y^OS?^*U:Z-cdj3G' );
define( 'LOGGED_IN_KEY',    '-/q20<c=1Ve6BF]^#?v2dEmx=Y;+Y[J+[gG]l;$th<B91]}CuAIAsCw!Gy?Lg%m/' );
define( 'NONCE_KEY',        'M?lWX}:r6<C=A]$.DgM#9(Xv0c6tz@w21<jsSWQR1={ZZuY*gM4S{C$}b)<WKa?M' );
define( 'AUTH_SALT',        'wcm5p<@[<JscZSi]ZR0>&2oih=U=6Bv-QoPDC! .6VJa= &1[M.#Xph&D9MY(Y[3' );
define( 'SECURE_AUTH_SALT', ')r7b}?HlGbY2 ZacV+?%>Q2(.KogP$.xp#CoTMpd~Cn%PTbV?wd:$7kV-;d+{l- ' );
define( 'LOGGED_IN_SALT',   'y(N/`m&(r@)2:LH>Z2*$)B}<J [w;2_F5Lu%Xs%g TX0nB[2OlBd3Lx[yj9mG:6Q' );
define( 'NONCE_SALT',       'k]n8F4E}?xETulqHK;@K)]QAaJXenH4hOzju$#N<+~Z8G=5a<_UPzJl_wT,fGyrf' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
