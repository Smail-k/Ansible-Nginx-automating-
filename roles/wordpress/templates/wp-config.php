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
define('DB_NAME', '{{ wp_db_name }}');

/** MySQL database username */
define('DB_USER', '{{ wp_db_user }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ wp_db_password }}');

/** MySQL hostname */
define( 'DB_HOST', '{{ wp_db_host }}' );

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
    define('AUTH_KEY',         '+6Sra>zug4%+vN.Jh%hX<F+W4j6)gRN(]tAJpJo 6h~Hx}KFB|-{S17O#Gr+/DTN');
    define('SECURE_AUTH_KEY',  '>#w]xN|vUAsRh QG:|rv{Tt}eAA7 oyl2oXu .qy9p)]It+g|)]RT|!5|n/?Cx#u');
    define('LOGGED_IN_KEY',    '@ew4G<PP+(lR^m!cM/3 O9qTZ_aU)0L,KT4w!rm3#-BNe?N=-g+I$+G1*%#*^o9i');
    define('NONCE_KEY',        '#4JhB`v)O|$~q3qOT=4Tn/FF${/qt<ie1vYA.Jpf3N-kXV$t6s 2ca$#m|uN2#aN');
    define('AUTH_SALT',        'Ps4-6C3H|w*C*dJ$^P-~-KJbS(nLf7)!raC4jrY=|mC(^Mb1y_ S1mJ@Lg)( 9DX');
    define('SECURE_AUTH_SALT', '4CA_=4Au+Pp;TiA_+hMFjon6FH~|5:g+Z8XOY4S_l*Jo-V5DM1!xzqT_M oDE,#|');
    define('LOGGED_IN_SALT',   'po<H?]g{/)s{)bsvUn+:F)|| )&s/X1&@+,_nSyi9s 1Qm{nClSfYQL.NW{/1^t$');
    define('NONCE_SALT',       'Y5*D?>#b-qrPO/Eit_lv2a]0(5Byn--m][G3G88x4x&mJaR4UcUDFa:%viF]+vY3');

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
