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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '|h5qBTDesI,R!$CzuA~TTw3{let#^~v$Xe)[ToeJpiVf~u@Ialj^}7W}`w1QYanO' );
define( 'SECURE_AUTH_KEY',   '?y[=#i*@C>V)}1E[K]``|cobS8G(3O` El0|X8[nQtAPwHX+)MkAB!f?r$<CDW7&' );
define( 'LOGGED_IN_KEY',     '`^L`U;sOo}&sA+JT[X~?On;+M=^6orO^i,k15]L95_&3X9^RF/W|$!dBxfPPT.3}' );
define( 'NONCE_KEY',         'F<>@a^vZP!{2ur^RynGPY g]u,$l{CtL#<.e )9kU:pGv7R:?jH,Vf6Q;Xl,P.Uc' );
define( 'AUTH_SALT',         'tOOBIPk-zCQbY?@:3eDRRFWd(LG95;QOiJ`1/HtC6x1l9x-a O:-f:Ek|do;@$[Y' );
define( 'SECURE_AUTH_SALT',  'E$1bqY)3`t=OLdHx?95g1xPFzD8OMn?RBfBmxo4O&+iwZE,6(Wktc~1&iEP{9{In' );
define( 'LOGGED_IN_SALT',    'dqS*{O#M**tt@g7~Y-ee-K]Ci7++@hs6Vw+8_!mWMTDmUP@0?R.?t53UqKjiG rx' );
define( 'NONCE_SALT',        'Seb%1w<H{q<8,sKOn(V(FFLI]czy+2 E`JjAp!0@7eaHxmVEBeeBC`U&!io|#4 o' );
define( 'WP_CACHE_KEY_SALT', 'A9:BYRyA7hSyai[sE79ry{Iw^WgoGMaKmD8Yh.8ZUIG>T:<geLj>x:[*r-/Va=WJ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
