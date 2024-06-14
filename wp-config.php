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
define( 'DB_NAME', 'plant' );

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
define( 'AUTH_KEY',         'iQm|V=2ib!ghoFw!sZZ}K6_q.m:g,)u0U|];TUu,j<:1S>;9A^vYJG^:#tcbP>y9' );
define( 'SECURE_AUTH_KEY',  'GyKew8&Y^tIus3E2?`YH}iF(UPiYD8HjmBMq3NvLxzYzt_>J@?X}.^g,D*q26&E`' );
define( 'LOGGED_IN_KEY',    '0jPFJi]MEH{a.}1e1{>Pgq Bwy.Z%/{(1e`<FCG:Ga<8*W)Cvw`Th$lo#Hvaj!v1' );
define( 'NONCE_KEY',        '=X%H/1}Z@9>9!~@o!m|gB$GwRYU&856;D!q2KO<_qlC),d?m:V&S*u?uGysZ[n,;' );
define( 'AUTH_SALT',        'j#-#FFcK?|.!.272v6mBVvi(bkC7nJTN:9OSv$Itba Na(N#g1/ex#~zK3y@J{U{' );
define( 'SECURE_AUTH_SALT', '?=KJ$j<&X74Nsm[9|gKFQjv6_kDO*IB+S:2 DlQ]{XabL8kj;!h6&^mEsVH@S.>h' );
define( 'LOGGED_IN_SALT',   'z3tFMDRl{.phF&bS%{B)lz<gJ?Mdin@WY>=H?DsR,?rh gsDweQ_Mr*nbvKu-X~a' );
define( 'NONCE_SALT',       'U)Y0J3_d?xGWK;g:8!>YwOF* _s}xB{lk/a0O+0QvI0=%=mj[F~j^z~eLcW1q# D' );

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
