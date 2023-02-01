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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'te:iF(0ZqAwedU8c;q#ImtP_!4h#oB;;}^Wq:T|uKLX3=yH)[&4_}idn5cT0%M#t' );
define( 'SECURE_AUTH_KEY',  'H1?SYZ>!bLh9l?L_Tc~hFej/qg9=~E!I SDR2f%1|-g|VuRNZ9@>R%?ol!Bc.f/J' );
define( 'LOGGED_IN_KEY',    '~@p<:RKt(En`el yg8T>Scz4kLE;RT)F#QT{Gl=:VjHT)buz/VP4hiQZG_25})ee' );
define( 'NONCE_KEY',        'Z5kmeZOYaI>O_p[%/Oip3J~pGsJ$Mb8%xrEG66jUR7q2_K xk4mK+=k2s[J:n&xi' );
define( 'AUTH_SALT',        'f+UXOjH6qt#BR)AB_~FdJmrZm+ 2k+J&oTQc0{b97A doFxigrEr4`7E|wwFHDh/' );
define( 'SECURE_AUTH_SALT', '8}d~Y@X%0oOmO#OC$K?ju]LU`IT6NL|v:8GlgbViuCLSt(-?G}6?WGpSmQ.hMwx7' );
define( 'LOGGED_IN_SALT',   'Vsd1g`G>7pQ=k]i}c3dYW~E)p]9`8G?ff+OR5DSNTCudl 6_d>]G6%:BsalqUsB7' );
define( 'NONCE_SALT',       'a4*(efWVJI3,66j$Q-~sRj79XwT*sp,h$a<STaE(O!zwpO/M&mf# t@3fs$s4:s0' );

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
define( 'WP_MEMORY_LIMIT', '1024M' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
