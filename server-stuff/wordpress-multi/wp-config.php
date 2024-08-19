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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-multi' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'sitepassword' );

/** Database hostname */
define( 'DB_HOST', 'wp-db-multi' );

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
define( 'AUTH_KEY',         'bNhMH}+<H{xZEcz|8vC!yK,vDH,4rw*.@/[u3Jrlw%`y}.:k}mAMdmtT#fC&.H2s' );
define( 'SECURE_AUTH_KEY',  'SKC,tw0)_j<:Qxp7C1QGavu]G.c/;|;H&L:>M&??]c*9J6fJQXK&Jc}@f{1glUcz' );
define( 'LOGGED_IN_KEY',    'NlByPnkT}N2zD|M$=gjcV<Z3N$ha<p:I/2LS9h}#wwB8mEM8300a9NBP2[NHT=$:' );
define( 'NONCE_KEY',        '!8)i`d+CM`A;Fln$O~U%}o9D5MEqnPZSHqT@bs%,T+_~o=C)D%#.W]01B#IKI^MQ' );
define( 'AUTH_SALT',        ':tEv=ZzNgER_4,/!6Vr<38vZk=:=b0vP2aEi8_.j<yKLMi}/ gy9cUcqSwTr_TcM' );
define( 'SECURE_AUTH_SALT', '9MWVi im06Iv6R0k(rU3RPam:4(/ YDxmg^/ge-~rwzI,M|AJNG(E&ynTC-TmlrJ' );
define( 'LOGGED_IN_SALT',   '{&bG;6R?43.Eqg`ZnOu#G8 3-rviH!e8u|z1c0VEx0q wb## }Z_~S(1XY,KP^7q' );
define( 'NONCE_SALT',       'M1e[&gfS8:RA}V)l.&mhR+zyz?<D9JR-}faakL}uAu.Vn$x ;<5T;40,w4!=6!})' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
