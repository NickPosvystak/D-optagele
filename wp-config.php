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
define( 'AUTH_KEY',          ':O2[`a+{&*1N}t@a>ZXSJpo DhHQ9sWv`OH/iE>o<+rq<d!i58Vi^~6QJxrbOF`a' );
define( 'SECURE_AUTH_KEY',   'Om#n3@}T`HQ^:b!$^<cd`ew<DKzGUzd{#.xWgp7Ci(d<qIPZY~sNT +fhR?e&mCD' );
define( 'LOGGED_IN_KEY',     '9&sTufLG61n-TqvLB&6G31HL~s~a={u=JrV!TK=W;Y.l0~0& c1Ye4L,!2u]rNPo' );
define( 'NONCE_KEY',         'Kd_Mzd4=F],Pg~JpkN5w5VUkhqDI8vt7SJ!Vp9jP:q (}C*2F5z=0-WxoVlYdh8L' );
define( 'AUTH_SALT',         '<eC!/Pkw-@$iC%+9v^>4oz@(f:c8oZn;u9A4g34O-u#VNY>mOa#;2+:*XX0sPlrK' );
define( 'SECURE_AUTH_SALT',  'Maq-zKW5LxeLPP~:{644nynK~yiCoM_a~dK/ B2&^VbFkV5 ,?`1_-N4zj::tj&c' );
define( 'LOGGED_IN_SALT',    't/r048Y6A{<Tncd^#a]4gS4|&wlLmZBp[Tn(RL3o#krd]3o- K3]e{e q0.u--yZ' );
define( 'NONCE_SALT',        '[G?}_c:%xZdl[JqGGY9:L09u*#X%Apk]tOUy+FF/ _B:Zm;/;/d09j>;;<5K-aac' );
define( 'WP_CACHE_KEY_SALT', 'mDqqI!t?C~=xPNS4b]:64b.imuM^wcJG}!Y)p0np>b*c8OR^!H:OtGLdt&4rCdpe' );


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
