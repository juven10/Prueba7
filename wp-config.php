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
define( 'DB_NAME', 'prueba7' );

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
define( 'AUTH_KEY',         ',K=&Nn1EtDt^FJdC-{I@G;up r.7;zUiC#!$1d<#@?rl>z!4:Tq}$&iB@VK@k4~k' );
define( 'SECURE_AUTH_KEY',  '#>JVn% gerG2q(8[t[qW#o4s#7kLBR90y:+j,&ub&`{j&fmx>`yR#{>[>ySW(V$=' );
define( 'LOGGED_IN_KEY',    'RHB_xsu:lGQb]E{.e7d%@MD=K)rY&WKTBq/R0:qXsAca%XS9G R1{eu=Fj@0=mM}' );
define( 'NONCE_KEY',        'ndsfyYL=.&$*Ni9aor^.D.  yH2,D+9:6*}5Ldx+B^3 9Mw$8.4-0x9:5e&GT!tN' );
define( 'AUTH_SALT',        ':MDk=U}[ecagdp,9Re]v8 u_+&WFE(zDWo5?,XeMDKpK~cBl2tml*$TuwE!jpoz#' );
define( 'SECURE_AUTH_SALT', '|H]BjG8Scv&c+p45q~L:a HiYzVRUU|=iESUzA o7eK[Z#?^!Tkb?8<GXfbF,,[Q' );
define( 'LOGGED_IN_SALT',   '|JadXj)#>T.j)!LS3N*lV}ZRk{ [^#Zlp7#Z+Tr]5AfklK*oy)KWf22?,O9DZ0#-' );
define( 'NONCE_SALT',       '86.Y29)_ .n*i2A{R;.+%FvZS%wZ(N=sQ.Gg8;WSp|;OBXChEJq@!7p8]IG&*tH%' );

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
