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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_DB' );

/** MySQL database username */
define( 'DB_USER', 'elorchi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'elorchi' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '0fvw:w+i*H9:D@-q0:^ypSlb{ghE@|rzE}+<g/G)z(-G/h72-Kdl~B+Wx ++4Eb+');
define('SECURE_AUTH_KEY',  'y||r<zBN-fHxa %F*JIkf{8Z+K.#TG-VZWF|&$q.4zx#C~Trarzo!f.4 <^^_3C+');
define('LOGGED_IN_KEY',    '/dw%p~nU_fsG4~dVVJP@WN*qS>kxB]9/1<IG(%W[ZSEW`n6>*H}%!?X=D,Xs^O!s');
define('NONCE_KEY',        'jwPj[6hV!y=:M7m~{~6qL1`:^n8iW<9y?5;y]5i!__RGdoM6zCb|T PGtpLt=bFh');
define('AUTH_SALT',        '5)`>=.}U^O3/+f1]67Hq%.R^0y@IF+4}m{mL>LqN-[->k1vBfE>Wf=jHlNVYjps>');
define('SECURE_AUTH_SALT', 'f%YO)/yP0krCU@Ei~<d#lK:<hw/197;5HSDxN}7@L!zJz:pw%JA;:l#FfMkB`;b]');
define('LOGGED_IN_SALT',   'XH<SRSG4V!{XoJ.+~qH1Q-t,VD:OmrHH2Y(jksQ`-so6n$|S~/SLBK-(~NVmFkLj');
define('NONCE_SALT',       'IJrP{*Zj`I2%YzoZSk-KD#0pv+;zE -0,H#r@;7!t+CzR/q^=7+)_Vy&,y,Q7>iW');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
