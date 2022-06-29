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
define( 'DB_NAME', 'redtransportation2' );

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
define( 'AUTH_KEY',         '9ZSi4FFgOz|{A0N+h?.os0|7.Xd2oQQy/hO7C6;bng46HQ<.L8H{%NHWLy(Aa]qE' );
define( 'SECURE_AUTH_KEY',  'N!F7NN7v<XJ-[&/d4g^l]N[m<8AeC(d;hm_xu{@^9.bu/h4XONRV{lr(N22YM/cp' );
define( 'LOGGED_IN_KEY',    'KjA(DF_<gQ:NVwP%e9{mPmF391{<0TM~D%{Tf3c;,@HZ%j%78]>G^?3#z]HSmGWO' );
define( 'NONCE_KEY',        'u=0fE<Evj>ESvKrY}Qfjcychl&#dGODZX`r(0&Wf7Sk[!*|Mywj:@<zj|!0&uzFW' );
define( 'AUTH_SALT',        'oP5LYTp.Iw8Ym%NH}YRa4?|W1Y=FWQ`2&pqF/d<hgbS2TcY8zh|[cJ|)a8*b8r7_' );
define( 'SECURE_AUTH_SALT', 'ZR}Lwk/K.m.fr72Zbu-HWQYs]mc$x*({rP:f3E$wxt2=|R}16X}cq+(A!//l!nxd' );
define( 'LOGGED_IN_SALT',   '~)*Xd;TuI:gr(]Dc2?$Is${Ef3!Y(1&Y.cCQGkhpa-EcjHw#[~g8g~LU0bqu7TMr' );
define( 'NONCE_SALT',       'qrH$gGuYrz[D!Hu30A+j9g/g[yH?E3+:!enxUy -g51eM2e~<.NLz/1w.$yeA;E;' );

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
