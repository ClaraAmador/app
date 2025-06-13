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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'XPDEvEZiyTl.cs_)G<D{3+VAj?owH6u;QtV-mR:K<K%VS_kyGL_w0id-]hQ2,ToX' );
define( 'SECURE_AUTH_KEY',   'rI5z:[:<QE%y+2!Pw9FQM|m;rm%D?LkRdC5h_Io{gvVENa|I2:+Krre9Xj/i5JOk' );
define( 'LOGGED_IN_KEY',     'u!ujC4]TeI^ziv#FvSV}4pBmZ7l|YBd(C4Rg0u}t&0YAV#`D=+s4IBiS?v!zmxFy' );
define( 'NONCE_KEY',         '8r++0zT?^(>gMz@7>w.$tt;u_Vx<EAc72)mZ_N?HT]hpQ>pr:Wc/WFZE*8$tL<mx' );
define( 'AUTH_SALT',         'gDN-+1;4#IA^Xxm@-Vw6@iSS5^.NGY-@Gx1%i-u[^Kw*N?=e!+)NS}e 6$]u8by-' );
define( 'SECURE_AUTH_SALT',  'SXV,SYe0euM/ASi ,P&cI=jS6&g2 $47=JM0nV!IGgPqO+yk&by(R3A~]mqhGLCS' );
define( 'LOGGED_IN_SALT',    'i6;!S){Ra8%eOX|Ao1p,Toc[(L0hjLKY!.li2b(NU`vU=:_@(;G7|^p>tuMXz5^q' );
define( 'NONCE_SALT',        '9ds5F?.Yua_@/xbE!<57c)#IjyK$<-2R9E[]O!,- $@VI$2tEtA9NCa8Y@Is#3zq' );
define( 'WP_CACHE_KEY_SALT', '6ysAj$qXqoP0aFW;WlHx][SXs~9_P8y)A$fL|&iF~^pE{%7Y2iQt+ *ocrw1^Gct' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
