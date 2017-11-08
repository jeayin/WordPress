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
define('DB_PASSWORD', 'Ch1m1ch2ng2');

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
define('AUTH_KEY',         '@[nu&GY%QFu%)kecTF:2%zqTE+qJ*c p[N*Oy:D2+enRRMbd85;J%{  .;A5$9h-');
define('SECURE_AUTH_KEY',  'V0W#cx`uy1m)/2WoQqZ{*kE!/t@mTdP>iN@ICN2~OYZQ*~EdK)Bzw]=*N8u[?f@[');
define('LOGGED_IN_KEY',    '&|/$qYQfP2xg]k.YlC*{NsL7:Xh%QfM#nuX(pN|$o:VwgRP4ro7rP@/ tP<Sjvg/');
define('NONCE_KEY',        'zZY:oC.>^9ToS(:+`s$Ll~q/X=>Wtzg/Kj@+B/NwY~_YJ54`Yt`60KAaN]>ns7<f');
define('AUTH_SALT',        ';>CN91w(Y#fuTgdlwe^^QD<w9%YEmc{g`fD:4F)0rdd?}q(zgsrf=~.Yw;^CTDM^');
define('SECURE_AUTH_SALT', 'dq+BZiQFO[c?xTx9)64jqJ*ji:@3~w%0aT<P!fcuFR*gj]]bapn93~-n9|/fvXU&');
define('LOGGED_IN_SALT',   '9]}bXFL@TA(]79(4{PJ=&IE5&NunuVQjm#0N1zsP$JdlOQ~=&eYK4%:{|#gzZ.C#');
define('NONCE_SALT',       '+?QwkD6+8oU?E5b<:t*}oI8)%U)QF4upJ`vM}q<ZQcZJ`V%reqw5N|{U6!w8sxqH');

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

?>
