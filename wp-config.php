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
define( 'DB_NAME', 'w3shop' );

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
define( 'AUTH_KEY',         '$Xg4rH*wDA^=tfPt7iZ+]nn.d8yHs]=*-&9{?gy}|A%G1j;VfI0*bp_&s|_>W3U$' );
define( 'SECURE_AUTH_KEY',  'bxoBpAuDr4Q8ei;i8~,3$d>l?|,7I,QqQLPnRvi;*9j)Hl`%}X>Lvf:g&wXryEzz' );
define( 'LOGGED_IN_KEY',    'rgEeII71`*csas!u/xW(5543I/QW)#8 fNNZss-1*lzh@1t<2Yx#bKhE3&$F^8f=' );
define( 'NONCE_KEY',        'Zu]9Yw.h^fQ]3=+RROCn[.@6umUhta33`F Q*uoGLY=wgxn^)MoBdm~o1}pN$=oX' );
define( 'AUTH_SALT',        '@tuO &?A,$Vj0JR[=5*5A^i~t*z]?G)~uoB@.i!r#}w+n]@+%! CEh0=G%2ObHYC' );
define( 'SECURE_AUTH_SALT', '^A&@?^y>upbp>a22AU[o,:S>]G=Y/;8?iw0%*ooW(`%A]A@F!yd;EcKxx80`L:3|' );
define( 'LOGGED_IN_SALT',   ']!h8~Wl0C.j3`Iky.u?$N>5mC1;RaB4QVA8c2$;}sPwb]R=6:b&grIdM (4&N~JI' );
define( 'NONCE_SALT',       ']l=/YoSQVE8P7lb+9X[o8|aYAxp5pCMKQdhlWNbo18EEHx8$<.{wbMjOi}?_:;c%' );

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
