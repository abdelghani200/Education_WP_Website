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
define( 'DB_NAME', 'education_wp_website' );

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
define( 'AUTH_KEY',         ']8]PQ3@s#Po+xuB{tcs-^G3Ayx[Z^^ <r9.+B/|~9cnfdJ1_*Q6S r(R=?04wT3H' );
define( 'SECURE_AUTH_KEY',  ';Xnm3]S,M4:*PCh6%Eh._=;Z_ 95:m9^#|>p2NvB+z&RP5<$LY7)@jcfJZ!i4Kg[' );
define( 'LOGGED_IN_KEY',    'JRlQWqnIxl`CEyrTuP)0IMfK [:eLHF8{b#v=eQL2P%AYgsQvpPZ,T;>e6EfO@H8' );
define( 'NONCE_KEY',        'twg#%/nAfRy%ao ]ByHG<ZZl_@Kzz|3lA.!N6<j-}]qo$;97u[NH2MoxEv<yglD}' );
define( 'AUTH_SALT',        'oGJ%q]c~%MRMp$7!fy87x}HdX|%el]6~)3,~D)`I;9 {!8]mbZPaWqL~BurBmPV!' );
define( 'SECURE_AUTH_SALT', ',mE8uf:KgWwd4`g@tr(;+inG(fBNmDH}B~3tdXk*Cv[3H|T&QkdavegShD&GyUEP' );
define( 'LOGGED_IN_SALT',   'n,+J%h4tcLM.K!!WJX@g&zW;^,x1Xlq7eyBc*{,K5},%sP0NiMD1T#F};HC7lJ_M' );
define( 'NONCE_SALT',       'a=qmu.`xo#/hd )0Xt`<Q~R^/,I/9;dk%u.;!-9u$Ixz)<P*aex9Dgvz,9HVZ.9 ' );

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
