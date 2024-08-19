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
define( 'DB_NAME', 'wordpress-oficial' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'sitepassword' );

/** Database hostname */
define( 'DB_HOST', 'wp-db-oficial' );

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
define( 'AUTH_KEY',         'z;)7q_Z:}M/yUyT|mmXetvzcq/MJI;8}GQ<]WrMAtGc5^p|uILq?*_/I)iQ#k)N*' );
define( 'SECURE_AUTH_KEY',  '$x+.7{.5ydvTHp_<kwmU8W*9vJdJ~6^vcUJ_aW;`YN^+R{T.x eE>d6]sBJ)cU1X' );
define( 'LOGGED_IN_KEY',    'L4Djo}w$79? .eIY?o@t~s{=CJaMj5/$exnG,hPqgbwI*s:wlvuV4Uv/=9l*s$/N' );
define( 'NONCE_KEY',        ')-hAQ^KlOk>5S)&1~r?5xs:Zlb+7kw}Qh.Si9.9p(n0(LLfO<id1|;<%(LG:Jy-r' );
define( 'AUTH_SALT',        '_.BE~lQ5?UK/DboY:-b=WakWO~a(%[Y|m/I[6c| BHFqs,jRCo*C_NB?v!{ws_4e' );
define( 'SECURE_AUTH_SALT', '%tm5n~5W!f@^v.^<}>[G22RG0opo.&!Rr|Req9xRVrb~#X5*Y3{&[43!.IM>sFWb' );
define( 'LOGGED_IN_SALT',   'n!p$_oxbVu81j6;!ZAE*}&Q{$P[`DCDo#-}8vcTy[&Ymeb@FjxJ,leG.>q->b YQ' );
define( 'NONCE_SALT',       '1r#dDP5T0laK5}i?eK!7gS|P3a*ak]?|J{-XJVS98?3jx[nh>~itFZfJSlUZsL^W' );

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
