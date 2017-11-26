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
define('DB_NAME', 'golden');

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
define('AUTH_KEY',         '&=eP{_*$2|kt8-RGUjc@4=`_k6F`a2DtqlPQ;U:e.7lY,{vFd~&2ncL1M]6,Fx%`');
define('SECURE_AUTH_KEY',  'd5;Y)h#rI4/8aC5RI-uCW}2/WmhI0r.3ccRHR*>H]/n4l.O[DLf&spQczw9f7Mo|');
define('LOGGED_IN_KEY',    'K8C+t0#Gptw&n#qp*laL.N9@RZ@O-Q ZDe[O.qBpPTM_@3BUs^4Fvrk.n|J6Ip&]');
define('NONCE_KEY',        'A*0^FqoX6_5KN *]kNylQ61BHrR$JH%o3rXIn[YZz[G_a!6O$I#GYNoLL6BYP8CW');
define('AUTH_SALT',        ':T1R>uhHbVaa:|FlcHH@8AS<p7fNYV}s;^hH{La;AP+]yOw#RGzy6{a{k8B.a>mU');
define('SECURE_AUTH_SALT', '.vQnh*n-VGALp+$byi@;Kx#r4Mp=]l#bvJaU/2FBSW:9m;!JF)Y06Ho9Q4z,Yp2|');
define('LOGGED_IN_SALT',   'yH;#~9tMzZ@=)OTl^L5]o^M2f&q`lx3{OR^zJ.[2)o[bpv?95Ke Jm=>nPv)vG r');
define('NONCE_SALT',       'e)%xrYvY:I/7cWMS%W,tHl{W56,zZt|i$(WY+WXB 1#6F.e$9%]{7YDu&pK@ig%#');

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
