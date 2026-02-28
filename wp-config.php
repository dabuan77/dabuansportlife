<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple SSL key
define('RSSSL_KEY', 'u41v43Um5cDzC6ggn1yRspOrdNS0eidBWFEFNWg2d6WgiGYVo8ulJNRyo8VZKkg5');
//END Really Simple SSL key
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);
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
define( 'DB_NAME', 'dbs12556818' );
/** Database username */
define( 'DB_USER', 'dbu3634580' );
/** Database password */
define( 'DB_PASSWORD', 'Ernz5J6uPEcJ4mT' );
/** Database hostname */
define( 'DB_HOST', 'db5015186728.hosting-data.io' );
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
define( 'AUTH_KEY',          'rtT &VLq<L~jW,=+*PBXEcAP#b$jd)sYol`>$>Zu?`EHM|%XHv3DL9J#)@Mg&Xz[' );
define( 'SECURE_AUTH_KEY',   '@V4tizB%KA*^VDDsz1p:<it?RKvJ]A{qm,zEjqEC8,Bl|t(Wx5FyFo!n +<oso >' );
define( 'LOGGED_IN_KEY',     'Y4plRvRWbogjCN=cclWdBwslpeYyl{Wa?Lf@9LU7ETw`diT1aWc,@pNS0Zoi=8Fv' );
define( 'NONCE_KEY',         'g&Z`~l4*{^K;~k*C:b<0GS8(7X0B=&~kS1kL#/X;Nt4pfz#olPQx`^<?{@p8PkD5' );
define( 'AUTH_SALT',         'Y- |{_p(1pj6Lo1+Ahaire<m xV+6<O7R87>JU1Sc5,kL^l=IEj#cRPRtysfA?}E' );
define( 'SECURE_AUTH_SALT',  'aYz)k8c5Y+,b|jy.xM9DlAgOImkV%tT?6 5%u(u8 ilpZoRKU~5YCB)&Zz=%@l}2' );
define( 'LOGGED_IN_SALT',    '=2|=}-.`17B8,kW2Jmn/5eK{]q-mA6dL^Ve{$@Kx]rl+dcqf4n1 (E&d0Ed*$h&A' );
define( 'NONCE_SALT',        'Y:+?b)*lPm@R$h9:I8>Qu$9ZG#9EtQVPvj@aD-,)^}~as?pENu$=@E$Eq`EP9x5e' );
define( 'WP_CACHE_KEY_SALT', 'dQSmCiT!`EVkI9`BDw&10XYg>=00#Y!<QuzhPG1Z!^|oJd&cDxW9&zes20$+@lG0' );
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
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
