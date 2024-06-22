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
define( 'DB_NAME', 'ikdc' );

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
define( 'AUTH_KEY',         '{!w(WE[c+Epx!-5ddT5DS10WQM@_Wf:)}3WFnjoi8&,>(mV8G|zPe([.^Q:ltF,b' );
define( 'SECURE_AUTH_KEY',  '#00~nuT.)Bi5,yREmVhEw4wtB[((X=F*r^..g&77C5d.gJE P`43%vov@/ *b_]f' );
define( 'LOGGED_IN_KEY',    '(Nhb*$TT+ZCzxzp1a2JXNU$OwT6nua=d;xhY<}(yI3hm>hmFN3/{)]nCq0O}T2Mf' );
define( 'NONCE_KEY',        ':J#(noWY;N8@4J9E+8Dho0F@<aQg)w`Yj<I`Jf|yU-oK(V;5d%7R5Eg 6QBf0lfj' );
define( 'AUTH_SALT',        'D00)WO1H9+P*e~pWBLj(+NhlSR<=Ah3-VEStctCqX.KeIE9Le@ <D8%>i%#)g8vW' );
define( 'SECURE_AUTH_SALT', 'aSjg29-n3Z^|{KF/,v*p6`gRf*`N<#_@td^v5VZh*[srm{EfG<4?537,%m3IA@k7' );
define( 'LOGGED_IN_SALT',   'vJ?t8mn050AnGV^w(mLrRW!_Z%4n]CMja>(9C@#5:=8p!K?OB@l%lY:3v*/VmtIl' );
define( 'NONCE_SALT',       'c&Gun>-M>+A-ibI5Xw_A}ju3BY+7LfKc6eJ(%ZikZtVw=g87{(?9I;b]K F|?hJx' );

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
