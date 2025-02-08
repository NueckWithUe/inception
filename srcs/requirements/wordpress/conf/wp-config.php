<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         '>u*++>C#zDL/XG0NW_RwjdjF4Xu[C/f#1(3e&~91H7c_+aZE58n$plq|w2})x%$$');
define('SECURE_AUTH_KEY',  'L<PJT{ma~ZoPc/rl{ $oIW0W7f*YeHfT)sd$>b3IxE}UOjL@k$2sEBfkoX$Hj|j=');
define('LOGGED_IN_KEY',    'D~[-RtwVVa|duX,klsL7F/^bf@UdGR}!_f|kT};8!4xb@MJv(:@j?!P;BOIAxh-L');
define('NONCE_KEY',        '2`)2::pfw-Nml-8+S+ R H+Tv~.Gn *`&onY3+!|&a|eVIrE{y7RW`+ `j/5+! x');
define('AUTH_SALT',        'n:aoHtO|LeZBa5o}o-kfO}f~.[|>I:uQC0hx6%+#oR*B2ptg#KuAFr+ksk_wZ4/8');
define('SECURE_AUTH_SALT', 'rb|0V>Pb6LuUSF{5_b&J&w3O.VoL)MuO9#s 9Aew#a!Py |plc62(#GyF;-2ePUM');
define('LOGGED_IN_SALT',   'F.k~#b^yF$GyhoCPEB<d<Ym0||,5e&9{C Ueyf^-:j!i4=NCky;MnTP9JKsqV/xK');
define('NONCE_SALT',       'X2i+~Y$;Y%A]Zd|XLse+bMA7{1KJpN,k`^U)2~pmm-}[DAr!Z{O]-;<{khNa^-43');
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';