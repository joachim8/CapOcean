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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpcapocean' );

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
define( 'AUTH_KEY',         ' {@|Md!.N77`R^^4JIj c{W^fc)n@57={%0tw$E<HkLT(^tB^gi-,0#6fM4.vF`n' );
define( 'SECURE_AUTH_KEY',  '>49&W@*%UN@IQ{-XJ7o74}X?~kA&>l=MM?G#WnFq;WSGo>I7a-#/t8S|s0t|/`)Q' );
define( 'LOGGED_IN_KEY',    '1{0omfNo9Hy)*(QR2fVeI2h^@a13LnIJ)jOML(&xd;YQ?AE5go 2YxYrq[1FOmG6' );
define( 'NONCE_KEY',        '%4f5_9s*s?4QOBzu6q3Zkk+@1mT_1v!*_@)qJ2z`8{$+h2mD _+p?Te]1k3orav_' );
define( 'AUTH_SALT',        'TebQN3HR%!pX4/&T+]#oa_[{a*[4-@3MH&J]S/`Js<!xaX_cWD#a.0a sSDQ&f8s' );
define( 'SECURE_AUTH_SALT', 'YF(D6&pEifxJ#;NTVDo|*F7ah(VWbyKFoi,Iu{ZmYoU9-Xe6;QA].`t_qAakUWWO' );
define( 'LOGGED_IN_SALT',   '~^A=7F?NH2}@Y[u~9TW2fFQr(Lvj`+_6[hB-]Djuc]8t[:/rx{eZzVjgk,j%u5u^' );
define( 'NONCE_SALT',       'QGER9rm2ln|z|JQmwi(}}b$~H[FtHHnJ^~Rz&zZ$BiBoHf7p~.h3H;F)9u+AtDXh' );

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
