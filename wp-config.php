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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chaucay' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<0Mh[_sp?PY36!)pK?iL(.A|O2daPdv!xI_m%R<&04;{J]x4#U<*rC<|(sQxsBd;' );
define( 'SECURE_AUTH_KEY',  ' _bT;NLU$lf(U+YD9k~mz-xJrofUA},N7:xrJjTWSi+X4].FXMEGl_>t.wcT[~Ng' );
define( 'LOGGED_IN_KEY',    '?Z.^~E%}c3olcs_SD,?/>KQKO41WWj@8m(>X$&Hm8.g9|][o]93^?nF4C?SrIe=]' );
define( 'NONCE_KEY',        'YY!:b[=[Z(Z<9]TehVz7~N17Qy8f+>&?~]>WDCXWZZ*mx:Ok7efWN0OI;%5:h:rv' );
define( 'AUTH_SALT',        '2Or1:p8KxK4Un:Y2%P2t6eyD&0%3FbNMHl*^>@|7e][Uwr=B5kwA.:<0!zTE_39U' );
define( 'SECURE_AUTH_SALT', 'j&Q42>qG[u_[)=jd.>)V[g%3q4hbHaF4+qHT=LtptG$:rwvLkch,S*vNO-h.~]}v' );
define( 'LOGGED_IN_SALT',   'n>=>%p.HAjk-L{[O3p>&]GNm@R.Oy5QV ;[:{63Kns-*v&U*+67KfTAiw:NRgZ+]' );
define( 'NONCE_SALT',       'yfqzoO6ZAu{K|Ta:>@(AZn>%:>?#V@+^~&gspK%6_WdSEf|V-|=`N:j$%mf$26Rc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bz_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
