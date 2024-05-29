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
define( 'AUTH_KEY',         'c$WTzk+S%KD9)lz-(EiUR/;EmtRrKD9wdp@:K[>Ap-V~WDwNIHMIBkqQ7xlpc1|O' );
define( 'SECURE_AUTH_KEY',  '*U]l(F`/O=+}L&} +)l0*_.]G->73C~N8=Yukp=hP[;<dxI|aX@Lm;e=ja4j19L}' );
define( 'LOGGED_IN_KEY',    '*z:[HFxOH.3CjH?H1T_^wE%iyEx%&)3_<4~WhEV^]yxrX_>y<B~A&iSUl}DzlZ?(' );
define( 'NONCE_KEY',        'Hty5BMkipgUOk:nOICD&PVUIuHd/R`f&.?SCM|6J)bk]#kW=cii7kJO8Iu._cz,8' );
define( 'AUTH_SALT',        'AE-lp=@!P4.JHba;E{*k+gZ0~CWx$XU&*BZ{5Qcz!s15=Q7,cx[(jWN5SE`{KLr}' );
define( 'SECURE_AUTH_SALT', '%<p[.)Y}zk:3YLB;uep<!HNI5xz9$kF>X%ngC0hkI]lS dEHo+0Cnis}RH#.hC |' );
define( 'LOGGED_IN_SALT',   '+(sF .a(?VM}[ I)638{+F^P,f26r?TR]P=Ua5b_<udbNx1%._%8=5rsJ1SnJotJ' );
define( 'NONCE_SALT',       ';qs%G0+3`Nx|vuYt7zf;)Vr?b3d:-3m_dM^XF||V>Z(:SC0PKW#_/Oj;Ii7NSr[C' );

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
