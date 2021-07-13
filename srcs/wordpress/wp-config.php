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
define( 'DB_NAME', getenv('MYSQL_DATABASS') );
/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );
/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );
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
define('AUTH_KEY',         'e`x4%)BpM!fR,]F6%$AsM)FU&]`ryS+yqFb6[+X$9:r!vGpc,Q.cU~.5f|>akX_j');
define('SECURE_AUTH_KEY',  '$4dsJ/ND$t8d`pgAV&JN3xD~.?%,o< 8`i3)bDwO:ThQn>)4/H)u1ncNN2Nx|*x4');
define('LOGGED_IN_KEY',    '5&i78)LvFJ@`h_&._p(+x+(Ofg#`+tTq`Ik+t69|yJnfu{gaBT]RI:{9v;h0%M{T');
define('NONCE_KEY',        'FauS0|T-~y`z//Y`!{7^.=HVI]8<,gx^M/h#w|=,]:+!0|&@Q{TP7~$+kcoiT J#');
define('AUTH_SALT',        'WBU4*0p8Ut-DDKTKXVJ;/[|@*Wfao&+PD-zBITNNIK:d4?9+V>gFUo4mFIk[}ALY');
define('SECURE_AUTH_SALT', 'Unhm<v0;q]>^{@ roBfvH&G#k3j)(hjD~}~ }>hC%>p?c8*2Q mn:i2U]OLlm6ZZ');
define('LOGGED_IN_SALT',   'Fq*+9K]!{i{*-r%a8S;|]h@D9jX|6aZ%NHjN/|DjBp:or. /N -m>[CT:SIxgk, ');
define('NONCE_SALT',       'G|=>41-`w8e}<.NZ]V;<Pe[ziK )hWFcv;po%[]}{ )S|1FmbUT)GDmSJ3kagg ;');

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