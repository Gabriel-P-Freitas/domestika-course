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
define( 'DB_NAME', 'gabrielwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Ff>6wu;eM0D$e+a>j6A7P:}fkF^3dcYeCb<W+M:j*BMim>:,*Gx(_`5TG0L&^(iP' );
define( 'SECURE_AUTH_KEY',  'bZ@c>)Y2,uX<)vSX0G{EQsR)>={p=hI-9Dcr/*@WV8a1|aJw,VeFIIMB:?AyNM`c' );
define( 'LOGGED_IN_KEY',    '_V#R33zya%X8;#q%1m34UaeCfmfPC=T:;;[03r>+RqAjDB+ImE=_Pzk4c6/B!]0y' );
define( 'NONCE_KEY',        '!E9xh{Vh{,e;p_l`tK~p~+H}(hDC@r-w#j:KxDBB0w^-Y~2hiZ8?Gijgi5%YVMof' );
define( 'AUTH_SALT',        '7iH[l5sPkrd%?E]/E?6DM5j3VD;9R1fltRz&$7aXTN:r8DWO!6W3*nKCeGjMC/Y@' );
define( 'SECURE_AUTH_SALT', 'Y&{i{KOpp8 z|qsMbf[MSDi7mowv2%Nxx-q45jK1L{]voytj*_xM*s.k5;JF vVl' );
define( 'LOGGED_IN_SALT',   '-p(-LuVq]5DYM]vpf[>ga#$31nFlg$6T)R>1Ol8Sk@h4^=9TjuY_k2C^2ZKluT4l' );
define( 'NONCE_SALT',       '~lRnL(*^^$we-^nW,XQ(niPGlG]?1h_PIy0+#?bsc`m@8[;~0#d<X)tg<SmcO1.Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cev_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
