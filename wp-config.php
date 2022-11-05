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
define( 'DB_NAME', 'users' );

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
define( 'AUTH_KEY',         'ZA8OpHpJiCO&h6[.br$Ql96s|k**+|KvF~3qRErQK$>r=LQbaO(NDmr1_8^:@_<<' );
define( 'SECURE_AUTH_KEY',  'CHix9Ma@HsH/Y^;o$qrnW~^84z}R*xW0|mU*^[~#/yT{dpG]k$XamFd1Xk[%tSte' );
define( 'LOGGED_IN_KEY',    'z -s]ai}:7qRZZ!V9A6F8Xs,c+%N0v!Xk:^oKjhHx~6Zm~Am]|96sIn_BVyEsCJ[' );
define( 'NONCE_KEY',        '@|5GAw=*tz`nM5W|d/MbxGhgzYEHd;TrjJ8<fJmAtT083OZa_*5f-[@O;I>sWZ0<' );
define( 'AUTH_SALT',        'k /-|SnFO6]339[Sz%IR_!e>[X5TD2@sgXSqmwYb_`1>D9ah^r:F7h.`^^!jS<DN' );
define( 'SECURE_AUTH_SALT', 'c#Pdm?m4.te|hQzjL?Q0u FCfG)h}T rpdgCCDS@.~AY ::4T6u/(rX*!w{[E9X0' );
define( 'LOGGED_IN_SALT',   'oq&@6CNJq~8r#]CufOYONX^rJ:%=~;r{=dD1cQ:**}%o-pA:rBHrvY@2_?-~,Di4' );
define( 'NONCE_SALT',       'XZ`h6WXv/=tgN23F1iS}P)Q.[^f$Z_mKia(6R$zxaQsBY:h]vK.-#bB%ZyQDDz`G' );

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
