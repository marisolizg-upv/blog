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
define( 'AUTH_KEY',         'lwmjV-mJ9CVsn2c(Di!ZlNo?hMlzX<=H79Kf9n2<>#QZ>A,B}>_=lkX|Qor_mdLt' );
define( 'SECURE_AUTH_KEY',  'XEQ6X8^* V,!6xKI7Ex%jtH6~1QDb%t#Ny=i>GrX_m(h1><0L38hCT+M]<z}%P r' );
define( 'LOGGED_IN_KEY',    '4>xN4icrJwF|p[$Wf0&619w$e>j~}S|.</eEcQQ~y[zB2K*?yN+fie>i;R0ozgW(' );
define( 'NONCE_KEY',        'Cy%kVT#R45So2O0@h.Nl;|5Y-c_Cz6a[kKgErNdR]LkH] wh9_e|yGJ+he:={NGd' );
define( 'AUTH_SALT',        'Q]_&z0e:([JCV$CMuh.QCyu Pow5+G-<8YP?$-}!$sX[~:-M&-k<{E]3bmMQ ^w0' );
define( 'SECURE_AUTH_SALT', 's8wjf#ty*hmJ/7R~koA7CZ DEB.`7F/ThvY6k`|nE=cP Km<rAP=izfGVbrt$%$/' );
define( 'LOGGED_IN_SALT',   'o^t4itRWD~ ShN0^T=ZF.?efTg@GPv>pHi]0.ATi1ifcWwX 9MJlACM=K~yEIYBr' );
define( 'NONCE_SALT',       '6w6olI}R/Ix`Z0A/4J3DR2.o$SXduvZ,m&_z{]E0<_QHjZrnA%Vxqxo/kKnMTik3' );

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
