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
define( 'DB_NAME', 'bbi_db' );

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
define( 'AUTH_KEY',         '5j]70-f6*[xpbQB_f7@V3k/%8j{*e&ZPZ*jsO47 `sSV$m3Sux&s;Q){V,X0h18S' );
define( 'SECURE_AUTH_KEY',  'nZvyk*L#XJK$@dhS@p19,;_o6KI@_}-o2{0jA=nR|7JSW(-@A K,,6/f+x:3iH)#' );
define( 'LOGGED_IN_KEY',    'YR:JXf>pTGA}@;JC Ue{%=oK@dB#12ao};G_-WTfh|DEjO~Ez=uoS?H#>gOp2@;/' );
define( 'NONCE_KEY',        '4~*#^nW7X~H7mdbP_xhAL;eu3avC79jomv1MZ~^CZ4{}45d.e]_QQ3dB=i}h.J?M' );
define( 'AUTH_SALT',        'iZkNpD0t(-KO% =:)%2l?r:kU[tl3)e#j>/)dzyE?U}TQ|?jvg$*HYB1|5gm<g?S' );
define( 'SECURE_AUTH_SALT', 'X/9W}Cm<]<K;,)`665Qt%>12!ljsZqIqOrdf ]K-b{]Q[5U`N%X4mc,eq.7:- ?&' );
define( 'LOGGED_IN_SALT',   ';NNuk}6/)`|>BWJ:[D^Dpon)dZ/|X^$4Hpia%0)KDy7(N3`8jKwLI>n@:w]11UXk' );
define( 'NONCE_SALT',       'Tg|9Jk^;@bjlycW}&Qo+$/X+6^ecwVV@unLfH89KSY~f0Za+W;ysRpcS#>GyBpgW' );

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
