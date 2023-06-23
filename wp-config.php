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
define( 'DB_NAME', 'landshaft' );

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
define( 'AUTH_KEY',         'JlpQ1kHK)+v.Qt;4mhdCXEjix@a=Z`[2_/LuxAanl:Z.fzTNh(3{EdMHPcF/dg=.' );
define( 'SECURE_AUTH_KEY',  '<P-6sn)Bb0GD36(/6EdFEL%9Le#v(n{XE^B#sK08!tDAZW5TG^nJGBgz;c4Lb-2(' );
define( 'LOGGED_IN_KEY',    'Kg*wbm1`7-/_m>{e?KILgHaHK,|L>@]PJRSQ}(Mc.B!0DR}pnu$GU/R9y7xAMQT$' );
define( 'NONCE_KEY',        'F__IYI. )%V_3$/OK7d/Cw&E5{OSJoT@AyKVM<|H5b[&VWh+4*aNXi#XnJ/()B.g' );
define( 'AUTH_SALT',        'PTY(tj oY~kk_jWLqr4DU9NZF]EpODj O2WKP1g,)(dfI(YwumAQeN2$uwwr B7I' );
define( 'SECURE_AUTH_SALT', 'FTw(ilsj^V{`E_tJXeeHjGr/Hoy0gS]M9< 7NdpJA@uSGE<g6mcVr<tAQ leeUmM' );
define( 'LOGGED_IN_SALT',   'WA[>bn7U)*FKz5NpVTCZ)d|fJr)/#K?8Jy]t|g]D_g5#:eUpZ*H3fNRs;=.|StlS' );
define( 'NONCE_SALT',       ':p3osh(5MxW2u=%q,18CH<+o!^V#b!h>va_dBVqqSo^_<`c6s?HS2D/+h$2ovm0m' );

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
