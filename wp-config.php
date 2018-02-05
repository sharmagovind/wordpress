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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
 
define('WP_HOME','https://localhost/wp474');
define('WP_SITEURL','https://localhost/wp474');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp474');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wp474/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ve<G`B9{;?U~7pp^6_x7a|zdx`<WR]9LPmAo7Yo>QQq>n;VdN[#AYD`$xMfTL=4j');
define('SECURE_AUTH_KEY',  ')%n`M)=t&mn5r)O$.g$X&kX/~&k+dojc:s}MpHXwx#9vurnl:Ny#|EJMZ#}VkXU`');
define('LOGGED_IN_KEY',    'F~wY|}N!m][^:0PjOUOSun?rUH6%!Aye.u0 le5.>R7E klZ}$Y9Cp?0Eaj{m>67');
define('NONCE_KEY',        '&424OJhuvDZE_ng`cT92X.~K%So4WAu(XC9<L`2/L8-0Bywt/itL8G6wI%0h)D/j');
define('AUTH_SALT',        'X6?VXxq90DEPKuCP(Z`K3<a6u^uUXI|6J7ozwa|_h6i`!uPI-E*asoan%!V-9T#D');
define('SECURE_AUTH_SALT', 'ki`{JtMat]o$iu?>TKvc*%>a62f,`;h Q?xVQLpvMGM*EqkWT]q-b/6A#r8,f=k+');
define('LOGGED_IN_SALT',   '5Za9y?#4]o{g;%Zw5IB4ff^r,yiBp%cOQ[IB_1*k/xa:C%J3OCX/ U[~@uP<,Jx&');
define('NONCE_SALT',       'fG?~nRhLRT(F:,T<Xl!~9{@rgWuTd*)$t=DTfo3&>q&*X<)8x]0Y>+N]3{m3[HE,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
