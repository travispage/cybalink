<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'cybalink');

/** MySQL database username */
define('DB_USER', 'cybalink');

/** MySQL database password */
define('DB_PASSWORD', '4p5sF55E26');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
require('wp-salt.php');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */

define('FS_METHOD','direct');

define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('AUTH_KEY', '^p^x}YBm*fb9uFJcAp)BW2/gycQh,G<=[1J!XoW5etvoWD5NLQJ<#x6~;d{e$Li6');
define('SECURE_AUTH_KEY', 'G=A,N*U&dW2EYEnx$)9xV- |jzD9N#I|%XDHc.RHL}X{Op/FnEp>,zcCZz1ZCltp');
define('LOGGED_IN_KEY', '}Sxw:,?]|j:d%axN4X&Y TrrF1@81EoAnJJ,;SXP,$.^z]=mq~7aeKYDA`wx+F8u');
define('NONCE_KEY', 'w5!c)y|g5HS]&>]L|nlJ5G|_Pqt7{?zSfC])EJ|34m.B{ZQ;r#!2>e+~Q Rj$%]J');
define('AUTH_SALT', 'y>0j#xv69iqJ@3CbqM:q0%GA7VmkjWW%Qw*1Sfx.~;$ <qT@cKG,AQ0r9`-7(]&|');
define('SECURE_AUTH_SALT', '(5~taq.KM&E&jTv_X4(1wV=SuP`qTF/4M!z?~?-w1epM[(5ej{u2Y61A8[>WKhAu');
define('LOGGED_IN_SALT', 'baC?vM0.v~= =a5}&!dGEtP+9g6-tXJbUF=0dUKv+me/sdRkJd60BtOk47|z>.8k');
define('NONCE_SALT', 'oABLZ1_7gRPU8B_k;H6(0$!?_B{g&O}Ie] RH?PxD7k l#zX[6~J_XG6FtY1XwuR');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

