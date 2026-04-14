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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         ' ueY+(#I;`-~2#aZKgWZ|qzA:_1TlkaGWJ/gKLMP2:Jm2H@];q}ExW9#$.;n[n#f' );
define( 'SECURE_AUTH_KEY',  'w}e|9h?XRwOwyFk{tee YgVI[brMx%KOn@7Zvo6Xe;z)w~:e]SFZBq~6td[9v0-)' );
define( 'LOGGED_IN_KEY',    '|UI^O/Xbp9E~3t?<:fA@ZaP3Ck;^+Z.E!@M^=o5mn.G?8 7EJ6pf%Z./D_U(INBw' );
define( 'NONCE_KEY',        'U[RjP:8^LC79%C0L~`$I578qzEv*=h8)g]0#)TU^~Hfm,]Wh+GiYIc^!4H}aq,Oo' );
define( 'AUTH_SALT',        'l1ZS7E?L%QfD0IPnFBRCys>tybF-,n5m>.C!6oao`3F^s+,r:QdKCd+e/O.yhH#{' );
define( 'SECURE_AUTH_SALT', '%` /,?D1CD^mi6/|cPeSy$;W&X-8:&JL,wvMqST@Pur7xLeX3xAY|XVO9lL[8|A ' );
define( 'LOGGED_IN_SALT',   'y{w9$tgXE$yV9[FunCdg~KGS.CR:AHM#cNlgVO>;LG$Uea|MNXd<bYhK=r~%t}20' );
define( 'NONCE_SALT',       'kThbR;aT#Z7.-o{95PRg%cJN;9|f0^K2Z tW_WXcQMWAq-$V+b5V;9w?,p`h*[zc' );

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
