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
define('DB_NAME', 'dewolfe_company');

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
define('AUTH_KEY',         'CUKkctA:H8NNiH5 Y{R3zBw~3.!5c?{fJ-ph.48*H,n^JKQ/nw_:3s}{nt.92#8@');
define('SECURE_AUTH_KEY',  'IY(csD5CMYli,@2*5iR.l?Pf@v7!Y:K%{]@Sx AQ4bj$6! do7JIn2fV9tYcif/4');
define('LOGGED_IN_KEY',    '%29r38|Nauzf$Z!B6biKnma-k -}c1Y??U(x>-B)&?v[TJ;8V{Izg}[^yk(+R He');
define('NONCE_KEY',        'Do?jFmU*$#/AA3LZi r>qN86K`_f{z0znn$2DjE7KAS80fR[&p,]RP#AZj}zBEAD');
define('AUTH_SALT',        '0qd5HOm W+N10Egw^Yj!P%-wmtUBC<cwWJ6ZCAuOqYN([QN?yB}$(HY~PibE/hd)');
define('SECURE_AUTH_SALT', 'z8<)|J^^H`j MJiw}*jI|BT2^?~xA|&YJhL:pUsIOY.O)9>-y]SPZ3idnHa%vQpd');
define('LOGGED_IN_SALT',   'G(hQ8tsB];E_2Z$W?wvWDO32tQ5(>R8c @MtuFB}::?Y-d^N8hH`#*y*u)ng^F s');
define('NONCE_SALT',       '<>|)w}qjFOm!)xx:TdpV#%X4(=QuDCLw7nrF0:aU6Vy5sG@JnW,cR}ufO:G0K{~C');

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
