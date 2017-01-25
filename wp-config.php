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
define('DB_NAME', 'kimgarden');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root321');

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
define('AUTH_KEY',         '2sPVm_Pp_j!xz5p`F1cJNWr+|k~U}aA3tM@)otk*,MSeg!%XV xUT?0dXSIY4~mJ');
define('SECURE_AUTH_KEY',  '|0l_6CU!PP?.@ri^NUHk-AKsPgU >s1MRDFB?(0 QEFttVB7T%B@%R#_~q~A=MFm');
define('LOGGED_IN_KEY',    '^_P.({ltD7GpKXbt-ZD^tVsL7W%5jPrR.|yb2]#(;Rui*SX:B}HdEE_APYin/]l{');
define('NONCE_KEY',        'LC[v~.QwFP%,#+-Pws[tP4vx]^n./haQ# Y81%fFh%lSk+<&Dej7IrCBVbKEWf&!');
define('AUTH_SALT',        'it:TH({n!UY|@wClL]nBYjT6h2BUPH.,MK:L][xuDf]M`a>dtk-(s(yZDVR61MNV');
define('SECURE_AUTH_SALT', '.w6G.Y=tlZ)Xbo%{z2fioM$s<7PO*x]GfF#rmnoE5[Dzu]lu>|4(BCJ=i>P1{IjX');
define('LOGGED_IN_SALT',   '$CQ,2PP*_S<Zf!j<e}ruc7kk+OO%Sndy-%^QzXHs3pbO[hWt*&Zu4_$U0C1rH:r+');
define('NONCE_SALT',       'Czr#8jEGJWy[RYz|P|if:smYtCE9?t$mUX7:JtRVpXsy8jh?gCEUZB7kKj_u;#we');

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
