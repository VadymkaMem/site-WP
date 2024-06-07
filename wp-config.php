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
define( 'DB_NAME', 'fhiuabnf_VA' );

/** Database username */
define( 'DB_USER', 'fhiuabnf_VAdim' );

/** Database password */
define( 'DB_PASSWORD', 'kjFa4aS59%xf' );

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
define( 'AUTH_KEY',         'CkyAp#E4U9bf0ly{$8$!oBJtE.F,C%&!i)JBg80HVh^4dMk.ZUn@x$9BCEA><%,6' );
define( 'SECURE_AUTH_KEY',  'i7P/}wLBL3:{q=WE*>?I/mKEbc$_QvY[,H%ChC;)4UuzJ;N|X-tdAW))=-MzEfA#' );
define( 'LOGGED_IN_KEY',    ',QcM} rJ`%z&!}>8h{7[fgRo`y<{.|HaU.j:12?5$tORRi5KQ]*j]_jF{HwTXc]3' );
define( 'NONCE_KEY',        'T*ywMLD+SKut,}-XQd=fr6u#[XlU=OGMS$F2G,K=aW{`D^Nk9KOv}lE_$wky*/A+' );
define( 'AUTH_SALT',        '*x;QFpOZdC5PRP}S%t^}]j6T/M(V-$*{DPb#J8f&+-3]OZ:W!gnE?1VK$7>6ah6%' );
define( 'SECURE_AUTH_SALT', '4>kPO^n9iH+12N-XPixKBA!FSA6<IFy5nwsXF]Y/|u?8w%1T:A.8@KDl4hy/6I<R' );
define( 'LOGGED_IN_SALT',   's5c|8FtLHeiBr+Y;V.[G#AvjW(Lg0ZZV^i3@k/(T`~Z]BHhPe`V;- rUAvN%^`54' );
define( 'NONCE_SALT',       'g+H1GKj,R]ID-hM15nm%S`l?#9Ga(@Go[sBsXfhB[fm?y0VFOs3n`U!58<}un+` ' );

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
