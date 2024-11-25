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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressDB' );

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
define( 'AUTH_KEY',         'pEh=r{S&/|+g99W$`h(iZ!bPE|%RZJ 0&VJkK9i|QPh_+.S2x.S%L^E,=G#K~d1L' );
define( 'SECURE_AUTH_KEY',  '+!3KTTUU.nzt_$,U|RMxLj1*t-$=PWVNnKpTy2 w^{^QmdS^toL<>1SYS+[t0f&I' );
define( 'LOGGED_IN_KEY',    '/BT7eF[v m!eG80wa4jDA2|5UY)%$Ft`#|?YqZCB>q&B;?8ku5Q9YFJ21pW;6^d1' );
define( 'NONCE_KEY',        'Y@#8sxu$s/8rcn.=5SvH+[AW$1}LDS7m,&Wx)v4Ohx[3ingwZhXOx9+EI;;m~m3-' );
define( 'AUTH_SALT',        '09`3b^<*/9f{yIZZme<DV#@07(XRE^pJ]SK$v%yhlT8_4btYN=Sv<aTQ2xL4^@;p' );
define( 'SECURE_AUTH_SALT', '$=JJI.5w%Y*I-GOYTHKmIj4EOWCY#^2)}6@E3ELePSD1JZk?eTl0E+iR}MTa][Cf' );
define( 'LOGGED_IN_SALT',   '+/vr94Z/z/e8Z?|(c:N,v>kdDh5+RL9G&5&o M)o)jsBh :Wc:l3ti#V(OD>vpcH' );
define( 'NONCE_SALT',       '2EgzC$-22U&QtDX9Qrc6d;VFp>Q1L@Ro(gvS$EY~5kK(P</:+!1x<acgULx[hodu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
