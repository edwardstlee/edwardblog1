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
define( 'AUTH_KEY',          '^T{[] ),OGwy?X/0@R5QcR&T!QA:,)8h(,BpD5sYRrRRz`w]yRXX{L:=Bt{IhE^6' );
define( 'SECURE_AUTH_KEY',   '1GmsDgr4;r%t#IT<g02UZ6:j6=/<tD@I;2=W]02{I0=zn6J:g~Op82zjN|o^J_E}' );
define( 'LOGGED_IN_KEY',     'n4_f2$R(C{Ok@9Awalde6(pJGyAms9u`6v  g|]ulDDNL*)b?8-$uuBa@h;ychHt' );
define( 'NONCE_KEY',         '3OQESTSIZ%~Z<Vp=8HI?6nc&nj3&{75y5?e~+gde!&91umuFr6KPc.yxf*ezJp.g' );
define( 'AUTH_SALT',         '!Y4BpXF!z6KZp^t}wPP*;-r@oM(75SPLum-U1Gm-Rg(GS9E-hQ=SZwm28~m6ZOcc' );
define( 'SECURE_AUTH_SALT',  ' &*Q@>ZA-T6Dmn:P_k@2d~zO2qiD6XTt^*Rf2G&WnGV>O0Sv]LZhhA_;:fC|$B9G' );
define( 'LOGGED_IN_SALT',    '-[b/4!L2&S^j.^CaziA<*sAO0:tp%MkE.`GClKc#wzP$4]i$V>hw~Bbk3N1fTga&' );
define( 'NONCE_SALT',        '5 x YNCHoD6O@%~GW6}%eST1s]XeL7F[(fnrLv%tbskw`-{.QoO1Oq[1undj)w&4' );
define( 'WP_CACHE_KEY_SALT', '3oX3`8?o])!1gX~4x+?-#jV8m~h29q-rOWWg&`r!?BQ5u?E:0:DG<v-N0WXRQalR' );


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



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'edwardblog1.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
