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
define( 'DB_NAME', 'team4shop' );

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
define( 'AUTH_KEY',         'M}ni.D;Wqg*q25k4$H+xv`b0/k>^2>F0Ie8jK@u9]E,i_`.|UC6c,EqU+X~,=y2D' );
define( 'SECURE_AUTH_KEY',  ']Li1.hMh]MEtkG|{LlLQ(/dza^Q*C]ghU`t`uQ&wvD=b{x4_1jc*X/12L bbdt@g' );
define( 'LOGGED_IN_KEY',    'aB<Fu<&swnHVN@/,I#UqTo.B-5rp#m3-`5a8@1Mgx]pa!, D]:>?qHZ&Xc K;D8B' );
define( 'NONCE_KEY',        'Xz%u[m-jJ]~> Y%WU zu_+GodICs}#$kXZhOAnvgC~-{*VM8J-<S3#aj-#q%+gDe' );
define( 'AUTH_SALT',        '9;R@De9R=g$9H95Cq4@/1+1S+C^?H<W#[Dry26gPxTx=YLD|by/p7Fm=C@Y0TD&B' );
define( 'SECURE_AUTH_SALT', '3|s#^O%I,u8^eG|C1nxpZ}(e]OOAjegGELXU?8!MPmv2G%wQ6m )87WRYaN:9QcD' );
define( 'LOGGED_IN_SALT',   'Pc!!IPieI>k2T_n+U=I~T/@f*2+nAJO%#%3Cm `.UfrG@DRb_VQoFuSg7Zg*!Byk' );
define( 'NONCE_SALT',       '/*Dj$?:nMIUkaf1]68E#:DaB$HIhM&]*f@-P>3.,-1{9 C^idMwzq^1!C)8vR{zk' );

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
