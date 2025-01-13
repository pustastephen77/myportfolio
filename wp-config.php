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
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         'c9lZt?_k)yU?>GMX1r5;1;]dTJLG7QX_MtMc9ZQ2^(U+mc:e=3/bJmrT(r37a?Xk' );
define( 'SECURE_AUTH_KEY',  'A=zsUXipk<zi>[9x&Ow=cQ6>.M0FLqFWL/UX)7KU8 0bWZ8^> Et{V-lgw#,[IL`' );
define( 'LOGGED_IN_KEY',    'mRSAb&Qf(Wl8d`?th9]bU>4I%l?`qNb(s<E1;*kCLt{f:kJ0fN3=`ZVCkTl)9V|$' );
define( 'NONCE_KEY',        'cB2A|[3Eb>rj]j<-EKiyPqo+Z8^p d*Mc2Hgyo5<#nxtXXjlt^Nh.Q(.eaOpJr.!' );
define( 'AUTH_SALT',        'u*^0q/3|IymFgy[igi<J^~H{ o|u&,q6`hKhnKVHp{4fQcf#+bL+Yc8bxJtIWFB+' );
define( 'SECURE_AUTH_SALT', 'IU57LCa@s[i/Ga=.u.HH}QruMtWe;P`aqC@0SM&L.#-=f11z%WNh/|dI*^:3kL .' );
define( 'LOGGED_IN_SALT',   'k&w_!tZAq$+7%nMQtM7||IwDbd)AF+Jiag^2C[]j3t%;+@HG9xW<VW7@=O!{+~T&' );
define( 'NONCE_SALT',       'Ws,*ca|db9?3oSz6S%o=jL-+h&!D=dVKmUgPy!lgaWOU)ate&c.lB2G$cUD^1kQ ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
