<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'W!QZ5RDD1tl>lN[QJz`>s |xgCqQ7i^ (SlCI6 zA2CknO-|x&2Ev/yZQkCc,+Z-');
define('SECURE_AUTH_KEY',  'X%;U,h-&Yljun@T>4j3`a48N+S(lj0DRN,j`:xQ#122~wxb6Ik9L5E hj`r:+,0;');
define('LOGGED_IN_KEY',    '0*i_{l8=i]-H :KX5IBOD:VV>f.BvbT?j=vwtm6..w2WzC9IKWsN=^3J)+G] OQ%');
define('NONCE_KEY',        '@8WMet0(86sROCjm1f8bIi!cCYA&9<qJ?[Cx+NFl~_a9>Bbce&KecH0`<C_Xe~m8');
define('AUTH_SALT',        'k}nsS+ziEe-0H]t#(|8U0AhM_L_HK4+[-q2kZ+fO-SjZX+^ntwK070[1BI.i{q.`');
define('SECURE_AUTH_SALT', '0lAmLrw3,-Hw1q>%Yn2+T=+ftth7K >F/c [X^V3PbgJV,+8-M}#K@6,%mrzs-bC');
define('LOGGED_IN_SALT',   'OSUcjkT!AsDliU?B?2`!hULhuh@XK0SZMXM:,e<[fS:; )lADFByh`_t&TDu&%+Z');
define('NONCE_SALT',       'i-PHE4)sR7k|rbhJ< Q- w7-vc*=,;N:wQu8QlPkDV+4vP<Vj3-Cj]| WfX[UH03');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('CONCATENATE_SCRIPTS', false );