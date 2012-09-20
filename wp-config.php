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
/** define('DB_NAME', 'wordpress'); */

/** MySQL database username */
/** define('DB_USER', 'root'); */

/** MySQL database password */
/** define('DB_PASSWORD', 'root'); */

/** MySQL hostname */
/** define('DB_HOST', 'localhost'); */

if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);
}
else {
    define('DB_NAME', 'wordpress');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         '4M,!2H7-}B[wP|mg:<D|gP[=%bGnlC3kwk~[:;&q-0]MnLn^{01+c.x7wk/yB5S}');
define('SECURE_AUTH_KEY',  '5c1HoE#q&.g(e9r&%&q*9uv@.7fiz#t?|LO>9$cmJEg$t@f8pVIpnv<.{W7evrWs');
define('LOGGED_IN_KEY',    '-GLf?fZ^Nd.$|1>kG8|bsm }pmV-1mG*_9R~s_%:}1|OEOp7VI.z+|-S6RPU$t*F');
define('NONCE_KEY',        ',X#e%#%d;3e%c=}5oLd:*9NWQtD-h-%-}_!U|;gF|q[MgeF=KHcw8<Sz%+_@3M*O');
define('AUTH_SALT',        '2w8-A8*#7m%n1[uI9)7)?kJNqPHBsJ/pc&2$Q(ONko#T=H(WzKIySUciHLHx5lNh');
define('SECURE_AUTH_SALT', '/;/&j||hX>0Bx<!X7TMz[zmIzuJ?{z;|N$p+6.f$(/X`9ihGKYR<>vtXPo^g#c1V');
define('LOGGED_IN_SALT',   'kS`ZH`]+s>-<Po-9Z)hL97;goXz%|-7EphD|uCZeVi+(O~0.<kF/maHQ9-mUg(SC');
define('NONCE_SALT',       '*e?MWm(QaY+<^H[<Y-{v-!}#!j$k>DKnyT7q]KK_F?d=;Q+Hc|]5xRZbaGU):2Pc');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
