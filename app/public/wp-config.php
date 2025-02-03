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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'TVhQ%@rP4&cR1HH+ ,L$s<_dAADx{_<fx}#6Xs@Jv}:DF@SDMe=3ZsTZ(3Ik7gO{' );
define( 'SECURE_AUTH_KEY',   '|[Sj_HsUu8E]}NM0BMb[aIN@w33IqIMSF|Pr?5&vF2s9~V;h(t4L4<!0sk %XWU9' );
define( 'LOGGED_IN_KEY',     '+?Vl2edP+V~E9Oay 9;&-]^4ed7i0B`r1j?MwYmEGAJt@T{OK`o^iNn&^F{io0*6' );
define( 'NONCE_KEY',         ';N1n&Mi#cfGZuwM;doO`:VuKcMl0n,cV(p<~J_ECK$9Z&UK~R`.Jk7u,%XLj#12u' );
define( 'AUTH_SALT',         '@F^i.h}@4v+xeO1}81Nep7}}*3&^w&ycn}gt]`4!/{G`9XQYm*D@AvG?bhWGF/4l' );
define( 'SECURE_AUTH_SALT',  'Alqn8iep+.%j?A^BV{Gy6bAQ9EUaRx#9Rh0zUo50CpKpI QSy){Is${Im&1}U!6C' );
define( 'LOGGED_IN_SALT',    ')4EVwed* D`%@82RO4c9yw=Rj=;13Xti9/w/m?Pbyu^^#^ZS&xE?PJnTi<Z#r6{+' );
define( 'NONCE_SALT',        '~tK#ldMMLHj$SQv^J7e&XUzf1P>x~c#+TBZXzAgbo{7[S{ia}$LCt#+nCw?$@;M^' );
define( 'WP_CACHE_KEY_SALT', '[xc/8:NPqY<@|a5bnn&pYkn k5WJ[a8iSE7QvmR3>|s0@m3)r,sbNOlJ4cXSUqyx' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
