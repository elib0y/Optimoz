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
if(file_exists(dirname(__FILE__) . './local.php')) {
	/*Local Data Base Settings*/
	define('DB_NAME', 'Optimoz');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
}else {
	/*Live Data Base Settings*/
	define('DB_NAME', 'asdasd');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
}


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'B(FK~E|gK&]N?hABa;,QZ<0mKD~u$7N8f4um8mqor!jM+he-fcX3S4]uWu81]J[&');
define('SECURE_AUTH_KEY',  'Q-kd5C,4iJ!*^QgAjWFqX&}-r.^bPr@sYWH0Z>utO/uJ#VvNW*fxAXI.~K!#/p$E');
define('LOGGED_IN_KEY',    '$g!R%7|Wx>iZ^3/`~{FB/nP@S|{%YdAo{j5J5 V1YMf2*|%#zjZn2/^RsrUXX,4-');
define('NONCE_KEY',        'jY|!<Vwu.V)Uu,*uD*t;]2y`),,-40F~6`;2Xwj28Qp>NXjkNu;<hv0_=Jd9dro|');
define('AUTH_SALT',        '|Q3F+Su(/;KAQ|T<aeM}j>~wVHbsF/c|D.jcq3*BpKEG ~N;NlklQ)7TXg.PzKZ1');
define('SECURE_AUTH_SALT', '[uTh]_:TH`,+Zm l.<IpaJ8NDpwyLP:9bB,rxl.|FI+`IzZ[+X6ydwY>Da>Ze/Ps');
define('LOGGED_IN_SALT',   'a(]t]NUKO~F}GLn]|j,8iT(Ml3RsGKaZ0`?Y-N{VI>v?ljWhNY)meGff#~Ke!EO(');
define('NONCE_SALT',       'rk{xi|@SBJB.,x@u89K8p3*_Q?s  uh+3sYDLeIfg%rYk]/dAFARW,;f%B[IhDo+');

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
