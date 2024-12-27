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
define( 'DB_NAME', 'publi_2' );

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
define( 'AUTH_KEY',         '%{(3lwXj!X7:bn}8ZW7x+cbhae)0VK5+~Mqlu/n2O(CxV ;4wyMq5r;Jt4t$gG>p' );
define( 'SECURE_AUTH_KEY',  '?X&m*WVm<{1K7?e4q>$>(r.J?hdKe]g>.X{]Es$?lR)+j:Fow:(16-n8YcaO.Jtm' );
define( 'LOGGED_IN_KEY',    ',9#vfZh05rY-,9b#$)Wf*d)cP)OCFnJVRmCEjt+{t1fkwEg.`]a$sAK!*k$k<tB ' );
define( 'NONCE_KEY',        '+%O,46-s>ux:E@9toSX||krpX,qlq1oc[ ooyFT4>]:kFeG,M=>w64uIO.`8/Pn#' );
define( 'AUTH_SALT',        'fyNOEu@Vc0~ ^S7GnQZoU,gQ6Bi7d^ry#{VKrk(qPx6>_NfDTzW:fIS04Gxh<V:&' );
define( 'SECURE_AUTH_SALT', '7#Hf*]Lss3YtITUL#7sQ7u,h}ntD7WjDJi/3&6Pe:JLFSOH-@RA t1BY-YT?Kv)T' );
define( 'LOGGED_IN_SALT',   'Tk>v5*m)8p&|1}$N}BP:L@qaF|lp+ne.F{FTB|Da)d9UcKV/5wAK/DlDlA=l i|s' );
define( 'NONCE_SALT',       'Mhwtmw&b<MD*W&RoI9_C`QA%JKjMrk;q&k?&$5Q7!wo}=ugTz!<.~j};i;TG@ZI|' );

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
