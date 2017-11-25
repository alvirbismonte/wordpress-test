<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nd4^w56NHFh~rWZ/35|zIv,;w-fiy`h%()a9Oe?1c8UjMdal3O;n4J{D<K$M6tYD');
define('SECURE_AUTH_KEY',  'b4*$8=5Kz1/BY@9:JhJ>.]I?1EsGqx1|h-4!P.qrzSGJ[c+3W}$UmryWO8C(XD,O');
define('LOGGED_IN_KEY',    'V65$RAMZjro:H5%!Er-E6su[?H/@FN=y:OZ<%veYyu~p16^bkT6n5)L?~C?&5p*5');
define('NONCE_KEY',        'X-J_0bqJ>5oR--0>Pjq^StM?@4c>~t`GO@1ZbG1.|Yp.?eWy)J.0cVhr<?in7pyf');
define('AUTH_SALT',        'u` hv_J61UT~WVF_z.k0..h=Tz~|,|S2~9%w>:~ZrN|zn:eyQDw}QSHAmm)mu5F;');
define('SECURE_AUTH_SALT', 'y2B)/:aB&hoS=(GZ4)rXNrKoLw>9;2V|D0M~)a(^d3JVD[,^Sp<] v:IrL rpq9H');
define('LOGGED_IN_SALT',   '[{G}q)O{M+,KmSC:)C-54s/L[xVMXUsq.lP&U>E<RSfiu!Ro@L+/&@#<57oSB#~0');
define('NONCE_SALT',       'VG|*4h988uhOH43A$4D#kZA_c=v:g+qw!fOvk|X104~yuG&dFacA0yCw(6_]AjEH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
