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
define( 'DB_NAME', 'shike' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tengmei123' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '.)CR&Y@U4s#`u@>9|$]?+jOJ>p}7$Grv<;,d3;^Yx]nxv2qC Idf^7sl;8dpF@?W' );
define( 'SECURE_AUTH_KEY',  'yDr_?rpy1D=NV4U):wIbaAD8tK$.{mpg$LNCOhlp~.+#n3p%C8H?a0h(%0FdQMB8' );
define( 'LOGGED_IN_KEY',    '<E/T@i-d^X:W>)pF8HM*~Ev:&S(CD67EN-@}OGj,(@6a`978q>I!:I=jc:h;Wh.Z' );
define( 'NONCE_KEY',        'sf^XkD{D${M?zMQYO|jw&]f<zV[i>-VrHbYRM.JzsJ.&7jkU|l_uj5/WkPrQkJl#' );
define( 'AUTH_SALT',        'F&zhMzgYVhdEdWuUXiP,SJWt+NHfg:2l}wbw!VV<E|rAD}qxViKf@4tm%{tVndIL' );
define( 'SECURE_AUTH_SALT', 'mE.za*jc_C[b:,/@)cD`necp/?uHzPyQjU=Ti4@N;$e_NeeJ-F_~<4Pi4`O*)sUH' );
define( 'LOGGED_IN_SALT',   ':?:]&_Bv}kBGcu0ka8`T8<v6o&2DRIt,l/JjlHmr#F1c(vAVbh;pGnCXv>BfF@ST' );
define( 'NONCE_SALT',       'c{5dB>;Q3 ~V;^!^L.2lp85b9zVw{1u8.% 0Oac3Rd/:<rt 6V~lEFOs+!R3{N>C' );

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
