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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-palmero' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd43a85c472b83bff2ba9fc1cc7c2794b48903533465cd09f' );

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
define( 'AUTH_KEY',         'mU<=}##oa4%ewDExq?Pp, atwp/Z@FXiKEd~O&1U,bhU7Q3DHRi!JgqJUzu81-LR' );
define( 'SECURE_AUTH_KEY',  '2Kg8G%4:}sd}V9S1uN3Wnz+zs<t~Qz^x2[CK@KFt,_PeGSI+4e5yw7w&)km),ds`' );
define( 'LOGGED_IN_KEY',    'i0EBG7T:h`B)GNMzoZU3p`9/m>oI#*[|{a]oLt[~T_#OMG!:*IFN<:nP4P2}MEu9' );
define( 'NONCE_KEY',        'ualePmzFZ>sZIjPb2]A@Wb_}V(#*dKZ-[I5YqneWp@3s*^-KTuyLQBw2wt6c|s9D' );
define( 'AUTH_SALT',        '3Jh$/|Qu4k?Pod6{O(9DT0@%2,KX~i/U0Dbx.C;w-Nd}Rg>dO[|/nX).NauZBxJ)' );
define( 'SECURE_AUTH_SALT', '#~eE3ljyLR[u1#Ood(gkT6TgcdFVgogO<gk)G7La/JO)p+&OC2pdN-de:(Yca8h+' );
define( 'LOGGED_IN_SALT',   'dSc/Ivh]E,UyRV_<N!vfY:onApzU.3jVcsjY:@AzQvZl_M!~w`0tli>&%uk`.[gK' );
define( 'NONCE_SALT',       ':oi<7r?[Zo)-)LqAA~(ra~c}?4~w?4okZ+%|`t2T)RPwR5Cd1vtu2f`A`<&.tagF' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
