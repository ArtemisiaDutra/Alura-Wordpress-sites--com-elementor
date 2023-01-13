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
define( 'DB_NAME', 'alura' );

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
define( 'AUTH_KEY',         'jI9tAq*?Mz(Hpo&3+x*z#aNIcz)zILk`@c9~wWTNzW2N);vwL4SSu|[w,YGxs7?3' );
define( 'SECURE_AUTH_KEY',  'zouMfR)!Sk>_p9<p?}K`IyT.m)+[Xr,dA;?|HHqp3&u96S:-2c[o:X!@sb^m@B`K' );
define( 'LOGGED_IN_KEY',    'L#E7lgik9/WQ=^!:[({,E[Asz7_dR6i:rG7KeFb&c[^<c]DwfFPEoxP~!~oCzP@k' );
define( 'NONCE_KEY',        '~QGu#}*#|Tey3i}U)p-`VbhSrCbY~gh:<|NiCZ:(+3n1}T$HJUY<fv<}a:5tq{1<' );
define( 'AUTH_SALT',        ',^G|PkP]r{x9thi4h>d2QHl(:j^p<r-ptUYgD-ALg89|o3p$&S94(DhlB5h18Hc!' );
define( 'SECURE_AUTH_SALT', 'nsHcNUub5FEL|p-V{Q%6ooy=%<4QZ^M60J0eT|5,zSOU!.w(6F_+;;|`yFe<Da]A' );
define( 'LOGGED_IN_SALT',   'Nw:adf@Dfa+h 2KobF*>X9.ic}l4~L#iF3K8T]E!MLTzt8dU{ueW((LSG?&wGft~' );
define( 'NONCE_SALT',       'K9%S1+RhXj3vTC|DSdUW?4=/sEy;AM)*U.K<H4bF lfFktRbC(5#vA Db>vsvEk.' );

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
