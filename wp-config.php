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
define( 'DB_NAME', 'solqui_blogs' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'comecaca1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QTI`N1Zb5NAi)oi&QA6?@65@BIf _TKsj]-s*Zp&sUkId?Me=ub76/U^M)AjX29?' );
define( 'SECURE_AUTH_KEY',  '/aPNb}?Wp(H-=E>GWgjdNUzA$y93 dV5$mXZmvvHcqMe @i!:W{o1XY8 *+w)ua8' );
define( 'LOGGED_IN_KEY',    'h{o50k|SH[GKpb_-=RNz.v6fF:Id!Jz0SAhuv^)p^y&n%&q+FzQ%>bcaR3VA}zfm' );
define( 'NONCE_KEY',        'MS>Sz~;}K_AZvv`k9|2S4bjoO1xFSMzU{Hc@$#BlNrTHaasdOFiOnP:&)!ur` )S' );
define( 'AUTH_SALT',        'Y`A+W>VdWqY+-DxF{l:!/zQDA}E&PHHfpqL>|!@M!:8OX~Vd+MTP!Zwj9kG_?k#o' );
define( 'SECURE_AUTH_SALT', '[Sh)p$Z+m$YA;^<e-Y(6|`md{BiPWCR?;zN%n!urC.l)CXc3W)Oue<7~(JzS@OKB' );
define( 'LOGGED_IN_SALT',   'oT*[9 q<V-Eou=c]YiFa]ETt@,_)A:N#OYjv8w9jKTy)8KSsRPQ<$5v5.}5U)p.r' );
define( 'NONCE_SALT',       '.pnyO]YfE=t:Y7Ibeiu!SwY%hJv1=l(oKlB$^W,qk&6nKx:baMr )wRQF8t&A^vi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sb_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
