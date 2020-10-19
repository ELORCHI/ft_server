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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'khafni' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H' );

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
 
define('AUTH_KEY',         ' RV-^w84~k3DPC)Fy$lY]DSXgXr]y^xVj0*jX:6GS|Y&Tj(a|zc[e.E tVr=9gsR');
define('SECURE_AUTH_KEY',  '-_ksOq*Wm!b9FxPsCJeo|F+ODR0~yrKm`2{i Nj{P2p|![o]E+kJn!>ZRkAqN`1;');
define('LOGGED_IN_KEY',    'n= 2 (-HQmwpVErMq7=G]Dd$JG]|I<Tw$E-eXoZ1&1b<,XZJAPLr1E:{Tra#]bma');
define('NONCE_KEY',        'xV9NoJ,nX=FMn7+%y<9 wAA:Acs5%k$?wx<Y{:^Sn:*9|Q?rItS],9W?41jX#<jD');
define('AUTH_SALT',        'b5sk`+q&Q=MP)+3@HoR+&|BEXGE:++!/h0$~s*S>;y)dxR617rq/(/Z0m5nY,VI[');
define('SECURE_AUTH_SALT', 'j{sZi(-EfwfoFb-,.[mK8P>$yT,~75N{IJl{+O($gF%cG4gXRh~k9~S$vp:>g4c|');
define('LOGGED_IN_SALT',   'wC!6RDo/dk|dn$g/scY+@1$s+IGc_C]d$+# lw5?3*-CV@zJ9:G|o=DKWSbI*O9i');
define('NONCE_SALT',       '6-oe@S]LgUNjV5n(@B]();.b_,ckHhW64G:J#AN+:e`m<*SPyjA)7QB>oZy9XqQ|');

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
