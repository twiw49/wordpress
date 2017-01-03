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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'twiw1534');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '9vv|YZTf@jl*H;l0^Wm6-Y/aI1T>0(:Z@dFDh]CUo|c$4liYy,%s?roXTCXRN/~%');
define('SECURE_AUTH_KEY',  '*&B{u-Rk)?IzQ+<aoh[&X[`SSSL{ds!5@|/o)i]{cb{ol!-.+Cf-#]kAC<a[!QU7');
define('LOGGED_IN_KEY',    '+|Cm|vc,/N1W(JFW^@E06M.T*ihO06N<_b(/n(]eG8FW-GtHF:|9bt0p1Z9jSc[!');
define('NONCE_KEY',        'J/{G]|ICt-;_/?. `b9bG0O3c%uXWlk}0|VoUZ1dh,{a4]DT#hiG=WW$XuFzS]i,');
define('AUTH_SALT',        'AXGd;u?gy^`wji9ZcW{EgnpO=bb+rG$|^tY/Le/e|do~%Jd|:LSS~yC&?s55v)Rb');
define('SECURE_AUTH_SALT', 'f_%S1#{m|,r@l>O1Ab;ae2#WkVG<?z$j}V_iJ(ZS~/7TV8v%!(x.6PkU)JKo>imw');
define('LOGGED_IN_SALT',   '?-G-xYU4uQ=kOqo&19|tRIk}Qpgq4/=P0m/$8j kps]~}_(.*doT#2#Q$~$,,7>Z');
define('NONCE_SALT',       'hLc!*!N`]-d G6qH5Kw,:-77CO<e[FTD|wb-L%1[<!&B;r:huX+msXJi|p{Qye-a');

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
