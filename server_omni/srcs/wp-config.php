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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'omimouni' );

/** MySQL database password */
define( 'DB_PASSWORD', 'omimouni' );

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
define( 'AUTH_KEY',         'n=Rr-R]<+o+-.SAUJ:?8hR4/un_)<60o{Eq!^)t?xEG&oUL6o7g#[PXu*1D-_>q-' );
define( 'SECURE_AUTH_KEY',  '~HtWZWJ&ym~$Ha5_3KsD5fXV%H0d6CFNPp|2?7t[1LMF<Du/=HPW:f}3v0o}D@g,' );
define( 'LOGGED_IN_KEY',    '&ZOp7V<a[d?`7 N5g_e~[@@6{n9GF0,W{fBBb,#1yqCCjD730~JdG;. Yh<~ -KT' );
define( 'NONCE_KEY',        'Y:+V{1DmJ9zz]p^ux,xzH9JBGxvfW=QDT<+o7i<?8H,eg}e&4O*~4zVWZDS(}`4M' );
define( 'AUTH_SALT',        '$Eu[e,`1b&K%{wzfem@s}#r!`xjdyHM4$*kbu93P^`U?e/={2olj9<+:GS>w1YO_' );
define( 'SECURE_AUTH_SALT', 'dP#RkAoBL{B-dLm<wW, W^O.2Y.bMuPcT(p9dl:jJBpDIf47lasH^s;[B*ON!A%K' );
define( 'LOGGED_IN_SALT',   'H[/m%&2#~~q:81UPASQJl!p|3hthYj#}h{W~b{)8Jg{3mJj+Y^RIJf`V~#j%mvEI' );
define( 'NONCE_SALT',       'e21WZ14L.$q4tfsOtZIo+t]~S$Z!.{aL&P(Nh2tR-+.F~?E&vSnSQ%aV:`c~U>+-' );

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
