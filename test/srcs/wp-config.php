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
define( 'AUTH_KEY',         'jDH_@D-9F&_@*WaHORM}Z 9gmz2J-ljMpPGBa(IS z~iE`)7js,}is5%a5q81SF>' );
define( 'SECURE_AUTH_KEY',  'Rom9d{gsJrMYuh1q%Q>g|,j]:Ug]Vopna0~!2i~iDI_5,^)oO^8rvzo>Y:3|XtV ' );
define( 'LOGGED_IN_KEY',    'K47U5c,]&H`9uyOLXRPT7GsMkeugcInki*,a{DyDm:B@ ?#SHX)@4#A<pP/-K&bV' );
define( 'NONCE_KEY',        'OeG3+^7ErsR+k*O(18b%D0B<~R?~uOyY?qtIk7r4@T>&?/X<bIjwMucF*Y}Ko~h=' );
define( 'AUTH_SALT',        'q)XOoyp/^oeM7d8#wZDGd.e-= Jp=3.#$u.!Ck%6{U>`*z>3[uc(dofP<Y mxlNI' );
define( 'SECURE_AUTH_SALT', 'PiwHrCNU6=lCbh I8-Nm:_ K{`/2+e[7mya-d13`00PM_n/7J#e&wVc-QmeVsr;O' );
define( 'LOGGED_IN_SALT',   '=JDvl@hy0+Rr1$Qio,U86*`zVts~6aS}c&,jtSte%>p{%Ez?}fWc.&#.u$]NiFEL' );
define( 'NONCE_SALT',       'k,rS(@&l-JkghlGDtXB->=R&Q$QB=Z0qSXC(s`7Jc[?A3csRCS?o}=r[r[4mx$JX' );
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

/** Sets up WordPress vars and included files.  */
require_once ABSPATH . 'wp-settings.php';
