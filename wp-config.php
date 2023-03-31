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
define( 'DB_NAME', 'youcode' );

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
define( 'AUTH_KEY',         'K9F3lB<Y$zvO&i7aQzzq :w(4.G8gn:)A+SQYJ qFehN14w96T~<pPaF%T`3)F]F' );
define( 'SECURE_AUTH_KEY',  '!b_$W{4`&Bh~14~F~5r*5TXD!V`?vca zyCsz8BvhTyj.~InA/I]aJBek6Sut?8Y' );
define( 'LOGGED_IN_KEY',    '%b8`5ru:ZCiHj-43M5Ib*G0G!,8[b[F;.#?/~+8xT[`SJO*rf91s.]M/!4X3Tz$K' );
define( 'NONCE_KEY',        'YiebdY&@]yiB6tACQC+U(hyD+eAI*tlwvI<ums~*(N;$z6)]H0vw* %~9}V>[a9#' );
define( 'AUTH_SALT',        'j)1fh*9Jcp_lls>}ygnk?~[qXI#Bed[=rdov#[[g1khVv]x@$^t}Io5;5{*1MP56' );
define( 'SECURE_AUTH_SALT', 'LF?{fu`l&K~0[=1m=2J0Po82A3]j+tW`KB,{duAw@.B3hGG2X!:,.2>pv>pj#1#[' );
define( 'LOGGED_IN_SALT',   ')]3[?@4+ix*rs3Ptj1v=g<MYR!_:!9Fl?^Ltip=<69se,96%=4|&,@;~^[=^sW^;' );
define( 'NONCE_SALT',       'xS[!>/nQJLcg%*:6[?xY[w<QaBB?iMGTwYm<#j`Dv>#<CRLSKWE5XEi7|OzVlCuy' );

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
