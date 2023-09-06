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
define( 'DB_NAME', 'travel_new' );

/** Database username */
define( 'DB_USER', 'xuanhieu1' );

/** Database password */
define( 'DB_PASSWORD', 'xuanhieu1' );

/** Database hostname */
define( 'DB_HOST', '14.225.254.9' );

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
define('AUTH_KEY',         '$4Jg%pjq3gIA1rj1+,1=Lu!Jsb!@:ZNc$uotx8ojx~Mc[EWy2@lQ4.g,Ff?9~!`y');
define('SECURE_AUTH_KEY',  'uN~jWRKLb@1:cp;!n*?L$Bi+t.2zwTMIS^a,gnux4Nx{:RPVM}>h#Zb`zwoPj?Ow');
define('LOGGED_IN_KEY',    'MTG[F!geC80pe28p}>[f{:$( UB/IZcMuoY3kb6kM3Fn=P%y)Lw@GWdLL!s3&,!@');
define('NONCE_KEY',        'B*>k}g0MCAEiI(kMD]pN`Czvp4Ns,u*wL)n+*W5iM#)Y+2];&-ejQ?$N2Fe,n@P<');
define('AUTH_SALT',        '5{)9,L$)4FB&pzqoVN*CkE;W[pin3UjPl4hHXFXN@c3H @osa#_l<`FL0V0wk-;N');
define('SECURE_AUTH_SALT', '4vJk<FZWrd@Q{4Sf]kvaug5FQC]TG6(,~Bb)YGsAN</=e(vTMMZc^[A<V0+$TSe%');
define('LOGGED_IN_SALT',   '[$uB?-*yKBk3<!YDa:>~S>6:yF!OvRjO,)<)^8(H?01B|9>^1(SP<JvDlb|z-Q{[');
define('NONCE_SALT',       'g2mC^yA92-&5ahD_BVct@AZr}YXKkQIU@dA+*zw.SCU4~oiIKLl3Gcd+ML0U|*B2');

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

/* Add any custom values between this line and the "stop editing" line. */

//define('DISALLOW_FILE_EDIT', true);
//define('DISALLOW_FILE_MODS',true);
define( 'WP_AUTO_UPDATE_CORE', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
