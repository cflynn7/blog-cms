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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'd6P.J.;{-tY$e*7O=2t}S}#@Z?A5+bQ%:5J{wC|XGOm,u_7Rd%;?=_:wf<|Fj,&X');
define('SECURE_AUTH_KEY',  'LIjmEYvi}]/xvJ7OHdSwbgBXj0ObR4/UO+TD*5>hx R`9 833VS2vzJ)oV]c^. e');
define('LOGGED_IN_KEY',    '_!GQ3ET*@~gWT5K;38Gqtt_mp4JYyIZN_.Pn{b24Bux]Z~z<LId4wJ~;cE)q?kLe');
define('NONCE_KEY',        ';l|}V*EW@z,*]fe(%%Wwi4|/Gt}D|/gWK5K){7)P_Tf7OestlBG0m.Wq+;u$mE+e');
define('AUTH_SALT',        'L)KG#AeESKr`<$^vf;d0$6Z~j7XnOp|&`UOdc,y>&:xi02m]8c)ajiXCms=/d4z%');
define('SECURE_AUTH_SALT', '<.qF8H=q9X3(_ZXX_-b6^_3r5vZFA>:X(;,%(|n=mTu67mHL.;To=5QV;gH/6BA&');
define('LOGGED_IN_SALT',   'sU3Y4&$ ki`|ZJgJYs+utQ|u(*g.+H+r7gMNZM?<wjNURr;#PHQ8^GV!omSWKht4');
define('NONCE_SALT',       'I0.u#]3X{&i|Fndnk0rMz7}tY%>Y]0K%C2v)L5T-~{Jc>)D5G-B1s;o_}T}h)s>H');

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
