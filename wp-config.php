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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'plg' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'yK.>{pk=UP9h1{Z.lg7CG(q{z8[jl??~XGwBrlB&m!K+OB3G1y|n>q1rt]w:I..-' );
define( 'SECURE_AUTH_KEY',  '#dy`PYT->Eb6u]GlrkvF6~d)|M3NYEP17TdTEL$hwt~:7sQWo:.ka$3wOIc+H.N2' );
define( 'LOGGED_IN_KEY',    'yoz4H!Jz|CJKm(SjGH(f-sd<)5?=%$-0t@uw{an[bEz$oD,lVuNes8s-3pcrb2[j' );
define( 'NONCE_KEY',        '|nF(pc^iG,XkVKey4*PiFZR:FWs[n{$(N,wFl[>0Kz[NP]-6e]u/;xNwQR.kp Sx' );
define( 'AUTH_SALT',        'sr*uo?Bb|W)ut,C<(Q]U)&C$cj4-5wUe@uRG{i~2[S_&A0CNC+1dw`{|Yh]G]5Ef' );
define( 'SECURE_AUTH_SALT', 'BR:TA0/+MKylEGGKF&I)f!8eXurHo11O+|]F9pMMR+NYq.$nK.jm=DM_I/*F_n@U' );
define( 'LOGGED_IN_SALT',   '=Y3<%v6x*w.s9J$mvIE8rx1nXgMn$@gtG?C`Vnpi5h!4ko7P#72C|LsU8rL,=;Y3' );
define( 'NONCE_SALT',       'aPE<^yc9n{<1*+{&1e}Y={C@.!EfAm)AK81*$v[uK!V1V?5@h_}wvXR h}s<-[k!' );

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
