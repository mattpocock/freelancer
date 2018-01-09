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
define('DB_NAME', 'WP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '-3kuk31<V$9lH;![zmJU[-+?Q?FI$yE{;K}L&)YPJ17KQ5vK1DpL^2]!,K[P]|R-');
define('SECURE_AUTH_KEY',  '`=R^cD!K,8B?>Hxq|{XL$}9I&XIhy+h}w.<},J:b6&Q#/b|A0?9//8w4L2Yz}>Hx');
define('LOGGED_IN_KEY',    'KS/X!6~7|$L55$a]smw~h{`ROv<(^E.b1a//A^/9_=Gh#b ;G;}1gSqTzC}g~fJ#');
define('NONCE_KEY',        'O)}_Edc609QKYVpx)1gBkG_]mjMh0ht~z!|Q]2m,8VPX+>8E=O^dmRSP6-+@6-n6');
define('AUTH_SALT',        'NUIJD2|RSs~/6I+l[1&X`HUCICVu5_k9|8s~*7%^#4|>v,r}Gn+h*YTP&3/^xNlC');
define('SECURE_AUTH_SALT', '5XwD=DBR6`V;-qun-cf^KZ-mYt7:!yj&~`;eP}t)yL`e|<4-XqW]GkAW O8XmJi}');
define('LOGGED_IN_SALT',   'ly*jeY}VJXYNWJ,9@*#Nwg7-J_|,R?|a_8,{|^#b~TXY|+r%+7#N28:>rq_pA_4S');
define('NONCE_SALT',       '+,PY|tAK#[pJ}`[N|u2,W#wgq/lO.{J-moq+Z<H{K-SO0/]5?5>h0[Zk,TzxW#z+');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
