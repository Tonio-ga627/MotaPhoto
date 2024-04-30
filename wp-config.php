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
define( 'DB_NAME', 'p11_motaphoto' );

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
define( 'AUTH_KEY',         '|gyW V}^hgY$d&Eh(G#!i?s3bYH S(AUo@D,Gte$LuvKYEg[ Q6>fU?eeKo)Qi!(' );
define( 'SECURE_AUTH_KEY',  '2aG7$fnm^,t8{hbbg)&b2eq2&NOU<yR<*)$C=4MMQQ7C<42>[tb(BKL)|x73wYSI' );
define( 'LOGGED_IN_KEY',    '5<9x79(}]EYo4oOS@&WlwXabyk;Dj!8aW|h@C#!=(+ldE%O%27V=0MQg@@53ovv:' );
define( 'NONCE_KEY',        'OOY4Tq/HmSJ[ahLDdtZ~X-Le;E7 d&CCQ*gB04Dh`TMi5B~!(Pa<_q(arbZ!ec.A' );
define( 'AUTH_SALT',        'Pq3`@/5^on3c*a&:nEa#wh){4JX&JQ{69py}gBlsc8hI?VA>^3>;WiomZLb+|l`{' );
define( 'SECURE_AUTH_SALT', '4s_JTparWBwQNH7@!ou(GkaQ$40RumnW}5zq{Hv:npbhB+7+`5sEC<|qnZ]a>[T,' );
define( 'LOGGED_IN_SALT',   '!}u@,.uBI,uj9^~O?h49]pj#3Hlx=8VMZ!WkJq;JxjL>d{42Km;*ZKpHO1>;ZiaP' );
define( 'NONCE_SALT',       '%jE2X~AY|OC^/ag-=X~]kTrU` kup4qcb?B1<e,ZwV~WM;LKg]-eIyr{FzX@+~>4' );

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
