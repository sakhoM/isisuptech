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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'rtZT_2ESV-2]XY,I&S8Uiv s(FSA]9F.<6s^sY;Ci&0i@VC[.EqOY1IN?u<GsNv#' );
define( 'SECURE_AUTH_KEY',   'x@(R=M<xv|RhK}>NQM0]{uq ~FV-ad-C`ejk};8NmaPjWv*Q4CK,o*|_?oX=6JVl' );
define( 'LOGGED_IN_KEY',     ']#G<_2jkEIt<p> E_Qwi#:zi+.M83z<8YrFnC70KLOypLY,fZSrEc-:;g>TAI ]F' );
define( 'NONCE_KEY',         '|c rj34I[o%^JeAFQMy+!kfdg!9?`bZ&x_]cjc7yR6x(],x(t#RiqP_O]=.aje(J' );
define( 'AUTH_SALT',         '8Y_PUXsUJ]A4tV5lOGg[mM!5Os4)Ue.ljD%C_J(x-OB-z+7__Taph6.ErlK!p8a7' );
define( 'SECURE_AUTH_SALT',  '`J}e|(hO>o?{&obw5J#*!z3G(wJ6[ T:O.b=]{A*sUz@p*@/n:,e5|WT>=Nbs=w/' );
define( 'LOGGED_IN_SALT',    '&;{a4E23*Q<!O1Fc!C2QGqSu2bf:L<<hT%L;fHcaWm8AADA/=(%k_xpDTMtcO9]k' );
define( 'NONCE_SALT',        '#1n*@e1J>[FC#jE+,?=-Ma]ZerjAUSasro=p!*$HCcP<95F,PH7&zV}WM{^sk`%1' );
define( 'WP_CACHE_KEY_SALT', 'MpC8PU)~Zzoj@hoyX<=x|/Vafuc=n,;N(N_?;cDV$:eQ{{~~8L=2giQ}:SRK-f2^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
