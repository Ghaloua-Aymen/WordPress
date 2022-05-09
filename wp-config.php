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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~j8[Sy-F5 #scHz-|uzLY7UBm00DxV)VC,3:ETe2xA#TzA)4KZejw4D2uJ:R-$GS' );
define( 'SECURE_AUTH_KEY',  '6CRDR#El^}J|imx0:yp!pNp63=4O!j]/D@MqZxz`1>*m/@hEEQPEn{s_~0O3*yS&' );
define( 'LOGGED_IN_KEY',    '(o!nD$qVwt&cNU7v1R3{_}?ca+K{:^6H$W%>EjfVR3kSParXxS)&XV~6,x0kHZ[H' );
define( 'NONCE_KEY',        'P>@+VAD=4I>Gcg HLwra0..%1jH:*XE(*kDj9-Z`x>4OW8z3rK[[ 5FIcVv):L_y' );
define( 'AUTH_SALT',        '`&.A(+x&6I0t225YT5 0PmIazWuiv%KQ2w?W~e%^V0i8PI~[y:skK^-AKj}roK{R' );
define( 'SECURE_AUTH_SALT', '-%$g>d#x9{4IPxd&6d/t]qMZnOno`NK@</t6WgR@tj{.8CqHw[Auf7lf!UVaGP_2' );
define( 'LOGGED_IN_SALT',   ';pk^gCSqhYy `Q$<M8D)cG*QX;=LtbI8*IEe{F/txG9X+slmO9UU=[m-zRWD.?%1' );
define( 'NONCE_SALT',       '?oFR(CU63A24 w8ati} YQ<n|Er=p8BkH5HK{+<k^zCfLpg5!x)KjQ-]A}?E/g.[' );

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
