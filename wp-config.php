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
define( 'DB_NAME', 'remax' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':wc)0I**1%<fyx2-YQ5m7%#9m#KzcQ03Y*;9l,ttVtS+?49Au--q9]Ca,g`o:0+l' );
define( 'SECURE_AUTH_KEY',  'b=@l7kqF+7q=~,.6O,Ij1O|QwtEX.$tNJR6~bZr,:0u3T/ug]v)`IKbq7l~WHn33' );
define( 'LOGGED_IN_KEY',    '-=[KR~`v[m0L7<CJ_hA)N&:c&2n9k$_yxo=|>*xEtcM;0w>,&B@fRI{^.RzIOM:,' );
define( 'NONCE_KEY',        '+7(PgDA,Iu#/_b10Z!1:PZNE(B)#%qd|QP7!SJ6}Y,hK&!=c[Jm!B:-YM9FJZGy(' );
define( 'AUTH_SALT',        '&/@d^4+GRx:Px`=zvoZ(S>H-LrURBh?ey3T^}^C~=|W>o1c4 g7=,!|J?^=i>dZc' );
define( 'SECURE_AUTH_SALT', '$94s.jgc?o/=4c(3J1;m$$296_W;30ct#k.yIWvXh<:!CQ|R!=X<>;qinq@`+o!q' );
define( 'LOGGED_IN_SALT',   '}0[6uuo<)JC/X(48Y!V<m*Dafn;~GliFrr%(><ahEfzztl;rNj$S^yQc4|UA6WMY' );
define( 'NONCE_SALT',       'kyc$xV&E~fy2=+v~+/EM>khH:W]Mg-8sL.QK(.9LsKFn=te!1Vnt:{6Y:k$ EJE;' );

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
