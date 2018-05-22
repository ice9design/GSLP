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
define('DB_NAME', 'txg1307812564214');

/** MySQL database username */
define('DB_USER', 'txg1307812564214');

/** MySQL database password */
define('DB_PASSWORD', 'Knowname8!');

/** MySQL hostname */
define('DB_HOST', 'txg1307812564214.db.9219532.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('DISALLOW_FILE_EDIT', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'ztp-U[[ZtY-K3Gy1bOR4y%ehQ>v`@:_ln(}xGi,oCE969uFRbENudTaD#Htlw?1Q' );
define( 'SECURE_AUTH_KEY', 'Qz-<dk2X0WDQ2?Ow<=%}D;~.w%lS%>#0kWX4[{@T0cTO#$B;^Z :N6|CV;5#ayz-' );
define( 'LOGGED_IN_KEY', 'sR#al(vt3HCir uj@+;GUe8}0SG(>YAx7{;45zOd(ab8F|nbnKVF= G,/-Qnv6(a' );
define( 'NONCE_KEY', 'mpcW^xn3KB1i{qXT0u8t%U7GNrnS<=PWjmLJJm.}NK*8zegRb@w7$f:JPFcB-qsc' );
define( 'AUTH_SALT', 'sA2#v{`(^)fvxeO>>xU#%MYxQq0_=HWM1t_u@/nD}]Qa*[yC{(R)6H+=}9t~%h ?' );
define( 'SECURE_AUTH_SALT', '3A*mSli{Y<SJy60[.n!^Eqhb1,vZ.<CGZr5S@OC=vA6}uzoT#S1bmk*I5:J#>&w$' );
define( 'LOGGED_IN_SALT', 'B0&uD;,JT2A<Y}CCMSyi{.*`/7Ay[X5!HftU-emkEl}pX)p?.PS?kGeS$ol|2wXO' );
define( 'NONCE_SALT', 'uiL>1<Cs (D23Z70,J%B,<gh_UPSQ|S_4i=`P&wQ#5$FK#>Wb,DG2&/ qf[y8ecs' );

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
