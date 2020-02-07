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
define( 'AUTH_KEY',         '6{C]XGC4@{LlI%l[5(k|tUE`K^[ZY|G)p0KY:vmF@Nn{,*7qe7j{flTvsz%+eJ46' );
define( 'SECURE_AUTH_KEY',  'mURZok^ysaJL.,?V}8.u<)/#B#yD&w:~4Nrj.cAs?sCIjf}#nt lE[)2HFbU^=l;' );
define( 'LOGGED_IN_KEY',    'SG>.F;.z%Gue(i<1 _1KNAC[U;Vx!6o67AeL3z:,J>O2Ckyy$8QwAEkk!{sMbE~L' );
define( 'NONCE_KEY',        '8T=7e$_TC:>Z8{ -6HOv.}=x]WnPUV]FhxlLWA#tKd*NliZ<CWs=xls<k_j1{m(h' );
define( 'AUTH_SALT',        ',_z Qqh3ka5ed/Ww7b R+/?T8BD/`z_MGlSKMJ+<#^j{UHY`:$6&qH^ZGZjz?|k9' );
define( 'SECURE_AUTH_SALT', '8Jm|Lk_{d1yb{AEEjZl(x*yw=zTsiy5o(SVhSvr [/iua(J(m7igwrh3Ey2g[`6u' );
define( 'LOGGED_IN_SALT',   '4m-TcJqP<B;(yapS#bR7R|3=UW<8Ufdb#RjC2330gE(@ba<UiwO{>]T<q$WH%*NZ' );
define( 'NONCE_SALT',       'M,6?dQ98MX%)x3hDWwG4JmB4/k_;z{-[X!sIYF$d&-Y0 F9lw[{d&wh[9b8Gz(e]' );

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
