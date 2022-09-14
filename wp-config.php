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
define( 'DB_NAME', 'the_greenland_foundation' );

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
define( 'AUTH_KEY',         '#-;Ga;0x{R!L3]sGd&},h+aeB [o&l<wpX}U*LAAh/zl9|G2[Zt2WV=mPp}D96~N' );
define( 'SECURE_AUTH_KEY',  'w@Oh--fG%]dWmPL*#Xt@5e!`X-Q`WjD-J=f(EQq:f6w6O,xRv^o(4i-T kA|R}_]' );
define( 'LOGGED_IN_KEY',    '<J*p@BH?pw]@~61qCq<~lF-&aq3ppj)Y]|a10s0?MtdzA(Y~dmn~H{>5kzc9XBAA' );
define( 'NONCE_KEY',        '*j*w7p6LPc4CN1H(Q<QvIN>t[[/?h|h.wS!,nx~ h@:U+x+c$qQc+RY$SzxmC|7r' );
define( 'AUTH_SALT',        'X`F<%=7BvyXO>d/l>)MO{31Ki!D5]!#W<H/J8A6b+^%]~+RQQfJ.D_/Y;E&s)Wx&' );
define( 'SECURE_AUTH_SALT', 'm21EsxMoxH*iS)SDo)0C`mmgw;7^NZwC$6uC=2qKhi=h`U+RpLI/[TB^v{8bK}NY' );
define( 'LOGGED_IN_SALT',   'UV:5Yu-Gz@k|-=zvcNG`Axuej9#7+=xU65Z_O]AJ,N7T1L.]{z>O@M?mHX}d3^kL' );
define( 'NONCE_SALT',       '@VHyT9(;P^UyAa8.^=*&97bbjoH0fefZn^iO.[wKBq!=Wpq)fx7&Z)9yQ<Yy~_E2' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
