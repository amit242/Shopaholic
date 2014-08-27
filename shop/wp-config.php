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
define('DB_NAME', 'b12_15202278_moyswordpress');

/** MySQL database username */
define('DB_USER', 'b12_15202278');

/** MySQL database password */
define('DB_PASSWORD', 'amiamit');

/** MySQL hostname */
define('DB_HOST', 'sql202.byethost12.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Maximum amount of memory that can be consumed by PHP. */
define( 'WP_MEMORY_LIMIT', '64M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=*YO;@S,wvY{aO?,WTVk;E-;JD1ahK ^W]XJk@M6s#h:fdv8u&A8+P;?nbrv4c|}');
define('SECURE_AUTH_KEY',  '-KfxtZQr6%$q0~.wkVg/hODr=3m|D-LW{B:|!3#`kev=n&NSOSnvB; jFY~Q_k-:');
define('LOGGED_IN_KEY',    '+u<@WlFE}8aBC538p]27A^Fy|dcPpG~2{!`D=}s,=l7RyXc*+%tWr@nW;4VD}2it');
define('NONCE_KEY',        '`H0&].~G0]<Kb&*|-Lv0>&u-yJ+hgF TXA5k&`j%;7;g~C&z_8v_A5@$GSfIPGz]');
define('AUTH_SALT',        'y3jZ+^uWbBd`|!W!<c|_l[#TY:*_$F2=-XCNbeI%s-.k]X>4mgLWM5!}MeS|y([)');
define('SECURE_AUTH_SALT', '}N+<x;$dR2>FO4bo-3jB1~H4B@`Qh>7MX3m|lUqAW>Fp(`m-)t^P.Xi~s+aw6aeL');
define('LOGGED_IN_SALT',   '~Pmi+R_|KUrlh?5O2{&&hqf[jvda-=]0IyS?zf:^[u/.L pp(-M?YDaw-2R8OA1D');
define('NONCE_SALT',       'w.T?Tv5%74IN?|Msx/PQ*bT//<rfgoeUmLJWd${+#._dLPWS1;f5|,MgEW`XT1fe');

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
