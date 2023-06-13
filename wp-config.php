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
define( 'DB_NAME', 'ecommarce' );

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
define( 'AUTH_KEY',         'sw8h,?*18M5Akd-2y+7Oe8Or=-]gVF];&I:`^oxEVR,_M@Mq)I4DBS]<Aqk645#k' );
define( 'SECURE_AUTH_KEY',  '-WagpxWy({:*U5?i8ZcGt)?}By6 U(3Qnl0Xfmc6XLy9XBDfq9[4,6i|~SakfFld' );
define( 'LOGGED_IN_KEY',    'g?>EmF_<4,r` #fK~)uLY:Xk][6Qk%)FgBs.#aB2wk3EVvBHDav2V&w >*!obE-<' );
define( 'NONCE_KEY',        '=FaY$wPF;01gST^9f]:i:LRWb9V?j&S7Cw##2~{V]E>aaB w_U%#1%Of%%8s]TP>' );
define( 'AUTH_SALT',        ',b4SIiX%dH^q  1n2: wXr%D]#Wd~T{EZH`6$lF5#EEjB^G<o$}3y2V#)dzQIzbD' );
define( 'SECURE_AUTH_SALT', 'fZ2URE@GCYsjQGz$pURi#<2v|n_F,$D]~pPmY@8xj_vZ<V/U^[oD.U%k:Za(iCT3' );
define( 'LOGGED_IN_SALT',   '`|1V{+K(Zs!]k@ZbN(#3>+VSQ/pRX1xf{<+s!03*x-EsgmC:x<feSqhYa[obJR?t' );
define( 'NONCE_SALT',       '[K8Rgq^[- >Byj[OOCrlT6nDr%J%#{L|r@s}8.3n=4GMIU}+yL*oNr>$f2qEPm@ ' );

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
