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
define( 'DB_NAME', 'doKan' );

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
define( 'AUTH_KEY',         'xWNZrcJQ>OZ%[hl<C8.+{VculXCE:Cs*1O;yXUkIPaL3%}!K$j/lhat0-2FKSf}8' );
define( 'SECURE_AUTH_KEY',  'Y*HHvRt1?{5d~k+$S8qRo_)c+$9g]I^~*=B;1S8dE07kT(fWF6eXf10|o#1RyMVq' );
define( 'LOGGED_IN_KEY',    'P3tw|TdjBJ}HhApPbu&@S6t8ig(Ip{YN`w)rCW@ww<rb?a~F5#tN(untVJ#%gWhG' );
define( 'NONCE_KEY',        'Ny5:!J#TR~v?3ZU@=h+$}@]rq#ink;pl*k&qI=Dl^34Tp`9tAaFa_KG*jXFD<Tck' );
define( 'AUTH_SALT',        '>tAqJHoD0-,>/|mZ!DdZw82#A;%UN21nS{nI{N}Qji{Guh8i7BwF~o{w$ZBTN+up' );
define( 'SECURE_AUTH_SALT', '*/ndJV/!6bc$2^@$|E|c5&t0CHw<f4X?b,!O(m4A*cGuq,ITr!m<vn#.z^fnN;u0' );
define( 'LOGGED_IN_SALT',   'JAKPDkoI(loRFAcdevH+J6gv{LkF|h,/8a6SPQ(2xH17W{4Wh1qw{o2UiZ:Pd8~r' );
define( 'NONCE_SALT',       '!v;H-JK0Z3@7!iI{5uAi/q2YZH~uG.x0YN&h`eM1KLY{u} Ddl!R#YnkG$pPLn(-' );

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
