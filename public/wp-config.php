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
$local_config_file = dirname(__FILE__) . '/wp-local-config.php';
if (file_exists( $local_config_file )) {
  require $local_config_file;
  define('WP_DEBUG',         true);
  define('WP_DEBUG_DISPLAY', true);
  define('WP_DEBUG_LOG',     true);
} else {
  define('DB_NAME',     'wordpress');
  define('DB_USER',     'wordpress');
  define('DB_PASSWORD', 'wordpress');
  define('DB_HOST',     'localhost');
  define('DB_CHARSET',  'utf8');
  define('DB_COLLATE',  '');
  define('WP_DEBUG',    false);
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g1^|umVD0G7tg9SQ11M*O<w1k?!}7kI}Iu`:8rP@^/W&MeVdU/+kCz~=#DVbo8R.');
define('SECURE_AUTH_KEY',  '(ioxH&.6nEoc|p~z)Lm9bS,-Ur?`rL*~+b~Som6t}$:|fma(tLs!a$> }Pox@B}#');
define('LOGGED_IN_KEY',    '7+`e`h$f80m;GTBg<QVOcbB.1+c)?SZ$i{kRjiEm[6r[{k5q5Q( #ffNZUo>+`S0');
define('NONCE_KEY',        '8gCQ@l~EoG]@ac`5iC;+54C)@Yun|x-e76UiUktGS&`(1H9,^Q>)gAu=(I}i~]Ub');
define('AUTH_SALT',        'H}c_oU:2Hv+0OR{vh~<{3D#CZ`A;R:SJ|Fax+!G;Q_#Tt_us8$,Crc~}v`V[P+b?');
define('SECURE_AUTH_SALT', 'r e41>#6s^3:#IiA[l6PO=%s1`r@Ycx61>v}>PR@M<U|A^2GSo4hn&6>A}w@q}x[');
define('LOGGED_IN_SALT',   '&WDm~qxgp65M4icZ?qpSzw7N%tg+nAj[s`hUZd(]aA}YT}WqePPz+OAT2Pc(GyWS');
define('NONCE_SALT',       ' 9,Tu=b,k2@l*_EZn(=%qIhEVa uS;Q=O{L}X=(KMBru?S?nd1|->+HP3TKGY:y!');

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
//define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
