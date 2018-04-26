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
define('DB_NAME', 'lvtndb');

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
define('AUTH_KEY',         'N/G-?PS4|rO_66%I~{an7%Pdrzqh{{LW2Ls:**8[;E>nAjC}iPw9K^.-cV| }H/r');
define('SECURE_AUTH_KEY',  'zj^;N4[V}Wdk@#*St> l<%.EP%ZH88u/*-7x$KzDZ,9VXXcu(B^W;P[WN6=cTn9W');
define('LOGGED_IN_KEY',    'yeHcOnAjkp#ah+~;nm>;KToxuNJ}q?NQFPb]k:=XpdQ0_78zZg*or$(qw<6IKu)B');
define('NONCE_KEY',        'U9SYsE,T6*C:!QrWCKg^vLFm11svY0]sS/jfr3{mJ3+H Tsqq7x;|o(00zMr?0l*');
define('AUTH_SALT',        'NlvnJbnqtr>Pt,$$>jb?;V)rMQ+{(_p9HP<7iB$tupW^H44Yx__8U-Ur{?2U!D%>');
define('SECURE_AUTH_SALT', 'nFTzregT:7A# 9EO-(u?/BzK{|,Wqc_ncR$KV54iU6n3TdZ!42T7+&78Z_(Bl$n}');
define('LOGGED_IN_SALT',   '=jw_~_Y~E[>(,<KxQo`!8x1Li/G/C!#F BvZYAYmLx,1dW#HHz>_*[L&&C0,APA+');
define('NONCE_SALT',       'lO+H_{d<X;1YsQq7N0;Xp.Y@Si5GOeV@yT|J5m]{af xF2<|Zpbbv]Vp-=xoQK&q');

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
