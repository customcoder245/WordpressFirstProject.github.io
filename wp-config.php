<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PracticeCode' );

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
define( 'AUTH_KEY',         ']e3hBEe{b.ttGE;o9pe;E#,jn:!MX2T.(Ow]Y%GP0UUT;`4m|PCeR 6?g~r%(PfP' );
define( 'SECURE_AUTH_KEY',  ' S 09[xJ=/*ZKiwAD.f@yc/F0^v-:#SW4IyMvg[(dSI s#J6Y2?nc$jq;$6a^xNC' );
define( 'LOGGED_IN_KEY',    '4*kd7V:*:@M0Q|A:Y}.X*7lF)TW*x-~;@LbT;{iC$FF)h |BBtv-W2Bu@qdAomr8' );
define( 'NONCE_KEY',        '+D)0l dpjZ1bgc6pd w~[zt:@btGnDcH XBb2:FoFwI//in:>eWj]RvzGD*tC2WI' );
define( 'AUTH_SALT',        '4!>@5I-:D2xLBLUZ.Yz#(K4Q,A)kt)lzmjIqmT%AX9i)~4Z)f^):icGK/=VZqcRG' );
define( 'SECURE_AUTH_SALT', 'D|AEe/fT&(* Ym8`M)iB<.2n{0 Xrp<84knLa-Gd]!wW3eICfo9Uhyz+!U(wyC)3' );
define( 'LOGGED_IN_SALT',   'P9mAbr0J4Pjkh.U4%ybZsMdC}2V}b[JG0W_Rtf<Y>K{+z[W=yrrm86q&u%~bTbs=' );
define( 'NONCE_SALT',       'Eco.p5RRUFE_ix04`PWA:8V U+elfyPdUn0Irw1E4R~Bm5kew5@~W#BA%RqxJo*9' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
