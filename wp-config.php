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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'k*PZu@ncpb9--&W?:Ot#o!J@i3Np-E#bz2lO3|/zS68u`5~,pg)$&e8EWmDXLP?,' );
define( 'SECURE_AUTH_KEY',  '|`cbZ2t{#7%OktM7ZmUizbB0irzFou.+@*U%Q6Y9[$onOpvw%>[UVnu @omL^rX%' );
define( 'LOGGED_IN_KEY',    '5lK9v^(dKVc#at.ete2;{E1sG_+qAf >`qDJRT| 6e6`8lHud~Q=>05Nj_|`tsjs' );
define( 'NONCE_KEY',        'F`:`mQLU+{35t6cUA#N:9H/ak2+stcqpMmv;{->Y0i1+Pg8Q~5 yxPio=&MJgYqg' );
define( 'AUTH_SALT',        'D<F,{kt7]~}!8?[vNZ{qN#iIVHvH|t&ug*ek/roqs@rb/QNUu(GYq8rg_3d)B,_*' );
define( 'SECURE_AUTH_SALT', '/_W)yyxs3%c.$|nH/PCOC-=,=q]0})|yUS%h]X]vrhCI_ZL]`1WIgP{iAcNu:v)z' );
define( 'LOGGED_IN_SALT',   'm@R>MD/+P[/ngji9fa4(/SUcR&J+A3D1 UW_ievw,<RRuoTy%qtOB|_H[*-Py`x-' );
define( 'NONCE_SALT',       'k,9:ukrl3z:y^GvK1A-f7[dPt+M 8ZR$SYOznJSb-LVbUC -t$0+HKj3l~e5J<cr' );

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
