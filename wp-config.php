<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sovtest_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'z>Ur7+&L&^,thjF4BhJzNt3R&iuk_3<(^A4vrK<p8k#?_gK[F]Sq+TiZ/k%im{%6' );
define( 'SECURE_AUTH_KEY',  '/O%1a#K,$~B$>~c4gOO 4d 9-2WG0NIcMc)F ^cfmDT[m^;E{}Y;ZKwq/t,*HC39' );
define( 'LOGGED_IN_KEY',    'pQ8r47f(Z>+*|Vo=Os7ESSz<.r;X/$rd&JK?aFAex-<eq0H--!A3IZPzyrF$m6.x' );
define( 'NONCE_KEY',        '=FaBOPc650Ezz>TLt:fOe}c?Z{,fGxrVN/4l1|2%g]Z_w*IRBA?^y+*l0wmWl{mG' );
define( 'AUTH_SALT',        'D$MpW.cO9tbSEL7ml_LEv3,wjX6}*zh Xg(]UGq#]c<xD~J2z6lAk?BPOHWx]wL5' );
define( 'SECURE_AUTH_SALT', 'T208,Ofk-,cI)}~}ZMOeuu9vs4@/%{m>E2FB9)Jy$!W;Qc[fGZ;97cun#w;wKFOQ' );
define( 'LOGGED_IN_SALT',   '@sXf^3rmW 5h@/%CA)CzXjrc:jctJDdGjxmC+f5>8@JI0x!=J?.V|!&QD-.eq/RB' );
define( 'NONCE_SALT',       '+N}H?5l]ctF+=p |dZly`5FH.Nb!5f|)QZ&da@c`pmKYi1K~ATwa+sLO+2h9|_)Z' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
