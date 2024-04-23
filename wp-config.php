<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saran' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+cFogp9O,?QY*/jolQs-{fG6hm0*vwND&2>.>L-ugh>xIoU^oI>i$Zh+bc_,w(H ' );
define( 'SECURE_AUTH_KEY',  'qm~yMfd5+c?D|N~>t*EYwtvw|b-nq7D4^k2*;={=^`XV=`ri6+H7fM9s#z#HzJ_N' );
define( 'LOGGED_IN_KEY',    '*#MI;a}j<-QtFOp,7;9MH~eDMj4Zu-nfNQBDvb7w(v|mnSrC}h#f(FA}vz,W^a5C' );
define( 'NONCE_KEY',        '-a_jNyPH$|%j2(*64aq5!|vi#(4<>/hg}^|[MLMr8L&sIs.&J!RSB8i*Km)r+$B7' );
define( 'AUTH_SALT',        '/Ggj7#vL6@1Z[nmN4-{0fdD3DEu;8t;J;;u<P^e(QuI+y}z~Hae}qBq3% Kj:EB1' );
define( 'SECURE_AUTH_SALT', '7bSarkb-<8~dJP$yxrm=4XGMcoI1O??K&@w8`R53PEGve?Oe>nFB-_@h+_x7q8(J' );
define( 'LOGGED_IN_SALT',   '-~%j2r+cV/WO%+BFnZ2WU:hyLKTd++.%5,_oJcC.QC2gUhx@jl-L]VHw$T&NPdKv' );
define( 'NONCE_SALT',       ')tpIs.@e)E$-PPGg8gc~H52/Z[x(cL^t}H@IGK5fxS>u%KaC:m!P0JK9H+)LH+t!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
