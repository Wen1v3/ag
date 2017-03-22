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
define('DB_NAME', 'tradedepot_dw');

/** MySQL database username */
define('DB_USER', 'tradedepot_dw');

/** MySQL database password */
define('DB_PASSWORD', 'Mv6pr48@');

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
define('AUTH_KEY',         'Z7H!Yi{kR!s-fpKC-z-Y951G`0}Z-TRH[;%UJDt7HyP5t$CkJ_NOc]HKrb>!e(EA');
define('SECURE_AUTH_KEY',  'RcDj2(W$ssB=oU_Wh#Y%bmx|BbLcbaasT`LXR+l4o7azh&K3YnNnri{?pHE?m1Qo');
define('LOGGED_IN_KEY',    'F3umT5WmB}0306d]gqm!xu,Bl:CC4iuQt8z1<^N+V7E.M0.H$9S1N z(n47A/1Gk');
define('NONCE_KEY',        '4}TW!r3.^~iO5)F%4]A8]o$BUnm^wU3MY&aF(WH<1yW&pl9SrY@L)Y9Wx!7#|j L');
define('AUTH_SALT',        'aYLY1WoLNI;^;1~;{4B$&s3A(nyq:HT@/8wp]RW.K!yKi0><6*%B L->,].M.SRm');
define('SECURE_AUTH_SALT', 'kJ5jpa11+HX.rtmn1/p:g|,]+?3`k s_xauWx33wX.jm$+<hadAh(s4gF*.Dds)l');
define('LOGGED_IN_SALT',   '7ah:+e-y&V.$tBnL^<`hP`~-Yl/JYvW7YQV>tE88NJBis^FWLX|SVaZs8l8!eCqz');
define('NONCE_SALT',       ' OueCaNlSC_X4t&=HBe d>5biZv!r3DiZL9V o%2]PH.Bs^V#S=Rf=~M1~n>H^cj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wen_';

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
