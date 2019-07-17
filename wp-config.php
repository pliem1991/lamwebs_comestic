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
define('DB_NAME', 'comestic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'gH2|oB+;>Bf8wXAJp[ s5wI+#YLO4*<?3&iBv]O,gLTX*xQ9(N^%#C~Lm*H,f({K');
define('SECURE_AUTH_KEY',  'I6p4bOF~BvTIFfP`fs1&*U;k8B}ckhD^ZH#WaH^)+gT2rkzDR3ws:}4g# CcOTJ>');
define('LOGGED_IN_KEY',    '-~Uh $>mXH6<G@G,{#d80F?nC`MKm=P{PJG`sLNS,?TqBoo;`jQu,rs=%U4]s^a1');
define('NONCE_KEY',        'UgE=a6Qo<g>cv?s7j<IcB_at,W*iM=jC ~R-k_%>vxW4Rd=3mok2m5[Ltw:S/6wF');
define('AUTH_SALT',        'bj`--K`-E9!(?bs:nPjcRhHLeni|%6OV7At%(BI&^Y#>}89,ZCu_]>!iMCSOGT|5');
define('SECURE_AUTH_SALT', 'K^4-=8}PP~srG(6YKjs.>E$Z_!SK7RWh!7TEi^}/&1VMtOUQia;(Ji(~NGI0/Z`?');
define('LOGGED_IN_SALT',   'Y{L[{9x|KF0r H[Sn9 @4<(R$2S!Z[, kN> H#0;CeoOqHlRj&p=?k:BCg78Bn@!');
define('NONCE_SALT',       '?& Rn?vVF>2Mn!z1!TUHQUnqUsMV4+K|m4K|Z<n5*lQ@c2n02p)XZ`F 1_G9v7Cm');

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
