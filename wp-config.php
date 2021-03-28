<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hobab' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'I{ mo9Yke%nc} !w1;pqTxbKq~eo4f2sAV$qyp3B-<[A`J3Xn&]&UH!My|}Dn}W!' );
define( 'SECURE_AUTH_KEY',  '!`puu*GD&uX[rb1)DFcQ_zE{0pl+`CbT0z7s;:Q;Kz|;~l&u4DukYRaaULK-g!-z' );
define( 'LOGGED_IN_KEY',    'z.(G#^VuL/>@AGJAd+G]^QX.2%Kr@I(,x~a=I_&tC4R$TOr3S|.R*{E^CTBQ-Wo5' );
define( 'NONCE_KEY',        '#tT{1yCUprn[fmDgfy,EARk9(4QOtZ7M+Wf.EmZmOTH-@%Z1 CzD9zBm* -Ll(g5' );
define( 'AUTH_SALT',        'F(/,%LDh;LUF0lqjj<V_|lCRsVj0nJX%o%EZ<CIeo0I)ta8DMH`Gl5#-g:0$Lc0d' );
define( 'SECURE_AUTH_SALT', 'BUT2u[MV?jUE;VNwPCD1u{e{BXh>i`o[ZFUCB<?ih$a6%Vusodt/W4;g^==9sUwi' );
define( 'LOGGED_IN_SALT',   'z%AByaZr=qd/FNZjWQ]>J{jqhCq>@dMp,w-X3h{CcOL7^|A(J@[|ZFMyQ.ig;2&n' );
define( 'NONCE_SALT',       '5zguDMW=x}Jl6MLw)<e4mI`)+>BwhZ>A*KK_s59W~L4stv.`=*^OqB::H-:0#z!^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
