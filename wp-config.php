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
define( 'DB_NAME', 'wadpesweb' );

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
define( 'AUTH_KEY',         'HN$3gyeVXOa)i_qu_upCnr$~}tQHK)iBs39|4y}I<tlC3wr,>%C%r~doPdq;H`I-' );
define( 'SECURE_AUTH_KEY',  ',o0`HF+%[12kB7.xnY<ZTo@H T,>PVl!4Jm9nY1?]e#_AlVnAVgfheFYfxAff~i3' );
define( 'LOGGED_IN_KEY',    'c4D!c64l$E>]oHN6a,l3sI~(jW5]T8}HF?U}^y@VzE FO?bSW$M-|_2*fgZ[L_RN' );
define( 'NONCE_KEY',        'VZFXUMTo?*hJ/m8/?TTD)[by!)^6YHs_ww);ioeCh?zPv<lZ/YVsP~J]Qa{U.#?M' );
define( 'AUTH_SALT',        '-a`OLKTr=MX`gF1+/4OAQ#^DtHT4E$mn(R M~/Fv=n:h7e i9U`OHRZd[3L)4{Rx' );
define( 'SECURE_AUTH_SALT', 'h5| t6R$)+RV#C~40U&4xWbz*hQhBq)ihnJ.,AONui-R`Z4yJA~7 +9@+RM6ZHin' );
define( 'LOGGED_IN_SALT',   'I)NZWO%6lK?gnml2dQe&.XqI}pDdCxYZZ oN@H,+Qpnb>u57X8;TV+IC2?j~q-4S' );
define( 'NONCE_SALT',       '6-UN^O:f>l{tD!BQ8o{z[^G{BYp2WDgj]]D*QXIKrCCJSGwvX(zf,[ckT{VUc`xZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
