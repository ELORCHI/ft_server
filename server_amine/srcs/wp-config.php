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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

// /** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**#@+
 *Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?w-[%,@}f1{cuC_&Ot2IEqrQ]d=`Yl>Hk2]HZl%{WEr6B^}&xP`uIO$}x~1VgPk+');
define('SECURE_AUTH_KEY',  'o3`~ k+TIsHU=<C]|H:-w-s[tsg2@CT|Ve?wqe.c`+0vU.ODNgWO|E5^[3u?b(zm');
define('LOGGED_IN_KEY',    '}2~EOZ|*<d6@J>qW$4|^iWF,e=/>%2Ui7{-p/2?/xqCV<Np3%0uj;DL@`3eVgRt`');
define('NONCE_KEY',        '-WEr,o wI%A)41$piZ76(#USzyZa&I|1]>2Ei]Iub;;3,?wpmn}hQ`@)Kfui$MC|');
define('AUTH_SALT',        '<wAR#oF6.ta5+w#5.yz.LjT%ju2-XT@bscx=]+)/[F=@p?![KxN~U(4Ji(n-})#)');
define('SECURE_AUTH_SALT', 'Xl-XvJ:Pr P&MF$0/]feu.#V/V+EF(,-~)ppNyKma|)|>/,1CkP>ak0Jr4RCWtH*');
define('LOGGED_IN_SALT',   'q+NP ag{gQ7kiiw,?}G9B,v<w4VM~Jv@%x,#YR~=Jk+X@__LSqoI]xVmh)@[1`cV');
define('NONCE_SALT',       '>H<&NzB`]%:d6?UB-SZ=a|-f K^|<*8^P)h@e?PrR{vmyy]oWS(*O5&(7.Bam-zk');
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

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
