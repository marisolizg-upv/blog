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
define( 'DB_PASSWORD', '300117' );

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
define( 'AUTH_KEY',         '3s1JefEP)Pl5F8h~poi%J(X],qo2A7Kn,Of|*ZD-7!<iY>uF2R[0y^apY]:Fq6Rf' );
define( 'SECURE_AUTH_KEY',  '~[aK7x:&(.JmQ/k1?}4XKh[xRqe y,2M>9]i[I4v=9Z!>L&}FA1S8z82p9dv|Zc`' );
define( 'LOGGED_IN_KEY',    'Xb=cr-Q;x}:.#^OsdFSw;O|r`o]pdC%<$;&T{R,m5nZ_KfU|HQFR>g9YdG+.b):[' );
define( 'NONCE_KEY',        '@G]Rr+I3V/1(|GuKnvE6=aLA_MnR+OZiz*JKx@u,v3R3d5O)CQ`bO)m*@ix v.bO' );
define( 'AUTH_SALT',        '9]N8I)}[A,4z)op<t}/55d-`6zuEs[(4[WvWX9X;.)<&lnw[W,f9ey9G1~WJmH 8' );
define( 'SECURE_AUTH_SALT', '<|;~)~F1_9au[5}FD1^vDtvB$|w+e*lX)}rN3KG+V7Q= I5r@&qd}k.:A,>]VI;~' );
define( 'LOGGED_IN_SALT',   '8GIT[%*[o0!J#aab8Q?s8GHf+x(-k[`5{e{[LWAk1@%3nO**:h[w~%V[%;8z*d=;' );
define( 'NONCE_SALT',       'Yo3(EL1L`DX7&a4A(ILb0e}&YsV;oz uU=bCxgDGs^*dca,n7j!so@.fVO7;~{9?' );

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
