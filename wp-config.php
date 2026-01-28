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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'wh 7cR.uE#1z?>7-zsgRCHWbSOX`5EAb/G?JUNY]i:R!C:^R?*|#bBR3vGX <|/j' );
define( 'SECURE_AUTH_KEY',  'u}qWRJNV7OgJdv:+tg<n7c5h1{Hl+Gna[`~{f`] oj)dy8#;5hmJk2J~wGv-<b*_' );
define( 'LOGGED_IN_KEY',    ' J.sK.tX4JeTc.~2h*DXCF/TFC6!>kBGiMa~(&nw`i|bQo%3p=$0]TW,]4;!~(sR' );
define( 'NONCE_KEY',        'm?n^D1iyxJ#GHu)d M8l q6vF3B}Fy-u_eQbL%$)Lx=b BcP|NDWlRdwq5p~e}]$' );
define( 'AUTH_SALT',        '9v}|,n{E7Zh,nfMBcEc+nr=eKiA;D%c?S7Fv)-0XvrurTqo/~atIx%_TO@~a9xXd' );
define( 'SECURE_AUTH_SALT', '5;e9LkX?]&+W#BL*5,DWRD BaO.:8MdZ<Jfi6(}h;=:0:&S3eTEZ[))#J^>Wl~8l' );
define( 'LOGGED_IN_SALT',   '8^a+##Sd6XZJ]Nms=/ wSF!a/0ZJiLXOBC2mHh7H>UXi)@+~J>/x U}9*9-]gR0$' );
define( 'NONCE_SALT',       '$[N+V5#s>hb;%U*@kE}]VJCMCPPE+2lr@L&2176vsW!%$N#OKf*#|M7R5KivB-K|' );

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
