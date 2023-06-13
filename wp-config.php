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
define( 'DB_NAME', 'mhs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Info@123' );

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
define( 'AUTH_KEY',         'Oz%Y<DzM=cEr|kfxF~Nqx9ukMV|O^CQi.mi|JZ1+-!WPk.<lk(*nAl.PWNGT0czf' );
define( 'SECURE_AUTH_KEY',  'CxUlLkbyw>OJ|rJMf{7t7v.V8*^FY~V-%ID;UMZ9$ZR4f3dRq~%@Ylq-%w$y5[Lp' );
define( 'LOGGED_IN_KEY',    '?_5>ku7[Z_1Pwa+HA3Xg+k-3DL8Z-5srd6z{2{NZ;z4cN~^b:}V8O45fq~$BlQrl' );
define( 'NONCE_KEY',        'YIi+F[8!0x4>DqG~-&z3Zq~KHbx~4-B;Z7Ewzx0Sf?hKfMEw>}4/g$XM!VSj$!C?' );
define( 'AUTH_SALT',        'JaYbkJ4kh[A]$Y5dwR_DkGwupgqH]>J8NwTc/j[|{=wf,?NDgI,,dT`;}yWm-KQK' );
define( 'SECURE_AUTH_SALT', 'q[94I|_F=3>8eb/F8h$es(9C|MeJGLH0JQm7qO7UKzuRc:L~>2pg|suw:j^uY-:i' );
define( 'LOGGED_IN_SALT',   'l=Lkvw4o(jGn#{/Ubc/f}U bOv.a>I&$7G6>^`Gkd*ZnD@t6o#r:6KGx[MB4?a(B' );
define( 'NONCE_SALT',       'pPVtc^<:M}1Ra:A8MLa]xX:[[%Qqh^H+GZk!#4WSu`{{zMP9azTHIe,e`O8|}?g6' );

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
/** define read write permission */
define( 'FS_METHOD', 'direct' );

define('ALLOW_UNFILTERED_UPLOADS', true);