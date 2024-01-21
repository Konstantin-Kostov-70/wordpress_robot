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
define( 'DB_NAME', 'my-project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+jjD7=S0(zo~2B<f!dFo[vC_ap+Ua;]>x],O:w+3vy/3)EkN HzT;4YL4#w1AtP&' );
define( 'SECURE_AUTH_KEY',  'kv(FS!btr97,v5rK+lZtd_tm@qb4%iHLCiU%M@]5V^XqLq8<)v90Ltt?K.Z}p?WS' );
define( 'LOGGED_IN_KEY',    'l1{Qe.~Vd$G2Fi{=uk2Uj}qF52<>bF[)8AJn/=V-l[=&L44!Pd&EUzOaC8{F71(7' );
define( 'NONCE_KEY',        ',Cd^vg,Bi$5m=$!ze?ho)2yu1=q9jM#l?>B8#|,@%sNaLVSxi/Gx ^/|KA%l[K b' );
define( 'AUTH_SALT',        'F PmVlY`e#pYH5arV;DbCh~CO+_9*s7p7R0AHP?0:.P$x3(Nk14LV+9nQ64SY`//' );
define( 'SECURE_AUTH_SALT', 'm|7-8-KlS#L0>={J%8v@pAMOZ7)s^~>+<]I9D@Mk)yC?3LA)g8FC_}QbY[Js)p5Z' );
define( 'LOGGED_IN_SALT',   '?}dMui~A*nZ#2X3`* O(!l90i*U1/DBt4OweN.Zs4p)(a2QR#4H/_~Rcc2oYnn5u' );
define( 'NONCE_SALT',       '1.^a|0.cdy}@csqeLe$zRMlU%XWIOcq*~17elDQX]GX3%YwP5:%F7<Y;vwyS^vWo' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
