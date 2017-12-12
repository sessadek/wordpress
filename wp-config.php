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
define('DB_NAME', 'kit-wd');

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
define('AUTH_KEY',         '9iS$>9I:(iDoB nVDSlb:h,M[Q^|U6%PNj_{]>Z]mQgGV0!vDN**dfg~Ee&8Y`ET');
define('SECURE_AUTH_KEY',  '~!H.(=j{(&7@,.Asu>tS5n3w#DVZ6,4YioE*U/zB.JHz)W_w>ZGA!uKw=KROiQ`n');
define('LOGGED_IN_KEY',    '<=[V2>mw;|J:+B!/d~OfmWh}*YhUID]0mG?i:dy$d@ys-L(r#ClQuel=oev`T6`Y');
define('NONCE_KEY',        '1Wg/:zC]=tZ|jE] D^EDGE,k,cq0Jl4s{ytLFFK/&-Z7u4jP^t(gXp=W!-*cpO`#');
define('AUTH_SALT',        'vy~x{boO92UB/]d?TZD3]>qlMK:&>G(kLY =j3?|ClRZ#*+Nyk,W^P%Lx`~4lT;.');
define('SECURE_AUTH_SALT', 'H=V1Ex:62R+~.K{36By({d&}KzHZxJ@<).&i>O7za(-vh9=8{Vi0UC#EML(d(6wm');
define('LOGGED_IN_SALT',   'GvJACE6NOC4l2Z%h=)376ak:V6Z{D~m!B:JCc6Yj:0*R4}b[zq,x+c)W3);[&dt+');
define('NONCE_SALT',       'i&]5p%N01~9{q^!{?g;W(!94TsY.OWeCi%e;Fz.#bha}S%~yV[ffT^H=;zF6V+w*');

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
