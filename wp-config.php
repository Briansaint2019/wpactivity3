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
define('DB_NAME', 'wp_activity_two');

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
define('AUTH_KEY',         '[](<jUtmRiil7^p.KI>G}+TiSpiR8Ukq!Ts0VUmAoRp?#ctCK)$_m;V(8QQ?AL#s');
define('SECURE_AUTH_KEY',  '+2Zkmp5(}syV_<h~X9.q6hBcd>/}6F&rhUun Q/uAyH4KUUA{Q#!?#K6sFa%}n$=');
define('LOGGED_IN_KEY',    'nJF/X];6./#E7,~.qnCQ)fl?&H9 9m%gs}UQ)^wQz _|WrS0+|>Dbk%tP>003>(z');
define('NONCE_KEY',        'jnz^E2!yZ^-KkbOP[opX^V%.gL53F_40QVy0NBy(9mX24rUJ#QK5o8g#0kN0J>).');
define('AUTH_SALT',        'gCLzW|F)=(4BqeZ4kr,$2Iwk=jN(%yzH{C~niY41$wM;3D6&iP]}/tzKOM`eke-/');
define('SECURE_AUTH_SALT', 'w*vo{^Ph^lx+H=z(Rg,U9XF;:H{GD|QMsLca tsNHFXQTU9v8d_{pcGb:k5P,c5A');
define('LOGGED_IN_SALT',   '7yo%MBVf@~Li;!Y/W71 r]XskjRl:C%_WmRQ`9 ;MQ<2T%4A6{Njo5s^o<}eeV+.');
define('NONCE_SALT',       'DJ]~o_a-(Dyo6NT1!Oima_CeZt#g0y}9h}t~Km23}kLLTscAE4;yWPM9wC%-G0GK');

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
