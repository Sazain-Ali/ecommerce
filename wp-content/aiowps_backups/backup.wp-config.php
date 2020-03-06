<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'e_commerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Gr>j/bOsI$>g8.49_JcgQmSe1uZ;QLu>1e_621:=SO.5, RT8%Hw9s^lpOgn; rt' );
define( 'SECURE_AUTH_KEY',  'XP!5]fu44>3jZT>J8G>~;tzt1W()z3^x]{h-6iD`$};a;77Cxlg~] ^b/fS8VRH&' );
define( 'LOGGED_IN_KEY',    'y.vF:2o_,;TM?PM3PNJ=q6!<6cu$bNGM[PI-3e, I Y2w`wHRm%HxK.tZaBphl^,' );
define( 'NONCE_KEY',        'tr-mT6AK#:3Y01yru438+82m}A@OF_qLE(`&6[q@G(L+ Qc#YJvb9F2wI #oDM@/' );
define( 'AUTH_SALT',        'W.jt5A&?&CS=WutK~J~}M]sE_R97gUp#nMw&YfzN&W <x?U7y50#i~H4s2;?$xRj' );
define( 'SECURE_AUTH_SALT', 'Us|i~<|^UBF(d&Q<]W]@&d8x|Fx_L@|waHS!Z&WQ[LUhD|ocl/fC(a)Das2X`Y!c' );
define( 'LOGGED_IN_SALT',   'vn6jenN.&VwEK6X%;RlZm_[~KJx?p[zx>HO%!-QWfkB[>Xi1Nqd/*NWzJvI.a,q}' );
define( 'NONCE_SALT',       'kW1=s^LdT^!x=qiZ%bUA`4OJQ+A0:5:bIDr x$=xv0qQ@~{0x[#LvvZ@<N7orB{T' );

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
