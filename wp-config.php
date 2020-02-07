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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sahana_web' );

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
define( 'AUTH_KEY',         'h7^mAG.Rx0L:?3hy3Onp/s@ ;3s0yY^t[T>pd3#,d4G3s4R~>78}{)=TAxrHtP&+' );
define( 'SECURE_AUTH_KEY',  'Rl4~fR6@,C9 G;)&Z0S>]s^M]+LTiRWZml/6ek})BEKNE!To$9$gL[I8t>:5zykZ' );
define( 'LOGGED_IN_KEY',    'i`@I$%v3^NFh28aLijL*O/Nag|^doPrGD[zHs@`z9rtWl||Djp8sfLB.(MOMpb6|' );
define( 'NONCE_KEY',        'Q:g]A]F7G9i,j<g5n+h0h!MD}ruZj%XbyIy`56~JruI>rzSfdKDi*E]Zt]_Rb8s9' );
define( 'AUTH_SALT',        'VQMvW(5M=j1PzgTJ}>>nqqB!JpC_:`54st@Hr$Hedj`_/Q.gNSn<8D-!`u)n3W<b' );
define( 'SECURE_AUTH_SALT', 'pjKyzs/w[Yu`3itM}fu;Rx]H1v=Sql*71ZiPg:fVS]O.[q6pWY/bWdfL*czsY[=p' );
define( 'LOGGED_IN_SALT',   '=&K.x*V~syibO|ob?fr]+CJ(OO#N#|W?eu[DK}6y[*{S(d%[L}$M$s|fmTd^Eeeq' );
define( 'NONCE_SALT',       '2$BF_<*6W4djYyT&Y[?=jCxj~]iYV_y;A=/=wNy,AB!jqT]hyx>=YaMHZTU3wwVb' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
