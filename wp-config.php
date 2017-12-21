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
define('DB_NAME', 'wordpresstest');

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
define('AUTH_KEY',         ')ckI=,nLAC/X,cHcjy8&z1yfOE4<OvYIKW`f&Ru9C?c9n6U` Q{{Q!JZ6;Cz#fZ1');
define('SECURE_AUTH_KEY',  '/OQ{6` pH:gqt#0b_7v9y1 dGQZ;Uaqej}$xf]AzdW&rEa53pLQvTvb?&1>Kx2_}');
define('LOGGED_IN_KEY',    'CVd^{S=g:S/:W:k-+CMbK;y?0%DDg.89r.|uMw/[H=}b/;EM>zW[,+F6$ b|a85O');
define('NONCE_KEY',        ') =Edjg+;9Oyxyv)&EcQEKU%_PTfJ5/Jn^sz*l[Z|:F8YpBK>yrQI!:OD&TJ_sWE');
define('AUTH_SALT',        'Ss^p_DM8J@u457Wu7zj}g!]&Au/3x5a Mvp[p8Blhr`njO2[ryR:*^m;=]!5R}+M');
define('SECURE_AUTH_SALT', 'flFm,^rIF<]?6]V0$EhLEJc35`>Gd_LN{LH[}T_#{{*x6;2(W!,e[ZpegZ7iFJ}G');
define('LOGGED_IN_SALT',   'gY%3bj}a!w$i4CH.dy6q(^b5`c1w18NYr<,2l{AMt?p[1XG%|N@Rij@G8>r..&+j');
define('NONCE_SALT',       'Da#7rQ%j7:.fdP;2!83M5+OyX5)DPr36#/A0=$9vU_?`Q4}eOpH`y@(.,z|O+7H*');

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
