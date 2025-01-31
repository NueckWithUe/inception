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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $DB_NAME );

/** Database username */
define( 'DB_USER', $DB_USER );

/** Database password */
define( 'DB_PASSWORD', $DB_PASS );

/** Database hostname */
define( 'DB_HOST', 'nnagel.42.fr' );

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
define('AUTH_KEY',         'K=9f2Q}L|+21m@^sL<|skc,l-;./)}c&+$_DeO t#CffMUXy;xt/=XTIm`0{q-rD');
define('SECURE_AUTH_KEY',  'BjL$neqf)-GBQR5(NVs{9u6r%,pf.GCfk?if<d4O#Z-e>Qa[*wJKb-2wf+~[LTR|');
define('LOGGED_IN_KEY',    '4dzJd@qB#N@~3Xw2oD#++gn]],I=k%f-TL I_AmQ?t`g:C<.Y$U%HpyAJIeoj;YS');
define('NONCE_KEY',        ';N=?k&n#K(2-#6MI/Mx~[b9!!Uqkv{DiiR|49NnJzIQ+5]mt|kY5>@!b:7YATpu/');
define('AUTH_SALT',        'GXbb^Dw 3m.s`bV_ty])kQ+|q76#xYjXD?@FK~SVG2}@Y0#sfHias,B$gu^X$dOG');
define('SECURE_AUTH_SALT', 'jmkY#:xxlTi)$VhReKo{V2<;Yhca>wkhA-p!`S.o-Iru8BO5,S(uO*)cP7s@[(A@');
define('LOGGED_IN_SALT',   'V,SC~i..d.PAgnhWG`2q>N^W^-oY?hPRB J2g%XX8Eh>[{__$7JmncV *NpA+>2i');
define('NONCE_SALT',       'z7{+]bO~xR<`Vj}02jc1sYm-:lw.)iQ8ps*Op(*?8:XiM6%gIu)?%`6ToYD@tQZ&');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
