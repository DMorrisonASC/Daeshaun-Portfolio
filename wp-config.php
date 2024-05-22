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
define( 'DB_NAME', 'mywordpressdb' );

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
define( 'AUTH_KEY',         'Tv:6o?l&T2ga5jRVJ@RqLjR1C@o6IBObp/h!e%aM&_/?-*#+^!]]E^65;jyx68vr' );
define( 'SECURE_AUTH_KEY',  'z/&>kZyW_Zg B0`U:mn >3-x`v %NW(>@Atm@w%]!zkXng:kR[=_USs7}-n3Cc,*' );
define( 'LOGGED_IN_KEY',    'AZ`(Fi)O<nhf(Yu)[`<<?:;HTH I[S<H&KyTE%zl g93~&J@Zw4oK G+3bE_0_VT' );
define( 'NONCE_KEY',        'yi5e:3DZ{%[?k$@Q{t5aWqRl_zcM}}w(`%ckJ~/,4}#tIXz;E3?o_9=.#,M#IE6g' );
define( 'AUTH_SALT',        'W{g/<@t5sMAGY=l ]NiJ3!29(GFp@J|HIa|YZDF!xE9GW?md`6i<Yx`;sVm*,{8!' );
define( 'SECURE_AUTH_SALT', 'S_L!o,$HT5:(9GJJ]Ij][lyOnYjXm=qJJMJgvS]4LNV`@`4BJs|s.29J2|tkA!=2' );
define( 'LOGGED_IN_SALT',   '-4+#52,dZHJXbP%5V9vxeJ<Uk.(*gx&tqYt*N>N5gO;d+to}87}#TRgr/E5*k%t7' );
define( 'NONCE_SALT',       '/(xOGNS~K+v~PjQkM.33WR0)fw+}(03#,ubAUoP/O#t{FCHhc]m[_b}nlctkzq{x' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
