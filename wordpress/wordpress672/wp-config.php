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
define( 'DB_NAME', 'wpdblearn20250427' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '832145As@' );

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
define( 'AUTH_KEY',         't^OB/4)/0:!1;9xXkQ|E<!^p4dG?)iIn 6Ln_$%jPAp@&m=ZoSi`F?|T=OMKzJ@X' );
define( 'SECURE_AUTH_KEY',  '#W%]s:[]Y?y8y(Wg[ D?pcq0ni]c_c-+;s^|Srzcrzb8`&ylspAzYH-ZV{ZSK^NC' );
define( 'LOGGED_IN_KEY',    '*-n$F:4cbHMaX-Ry0aP@`xy&Xm+jjf`xRTZJ(VptU@(/Lu[WsXx4ZGvCpaYoVS&4' );
define( 'NONCE_KEY',        ']1mwq<hbc/MF(MmLlbpV*kV#AA )Wss+%GgJ(1EWdg5:ol)xd<1hy6-|p}],M52W' );
define( 'AUTH_SALT',        '^?z:UdK(TW[&+?4+-nr`VH|aXcCJp`<aqmOoDUS!%kR`2U@wy_5#8vGAiL/O&8x ' );
define( 'SECURE_AUTH_SALT', 'G<4&1.{kcM`{;1|=B)m(WRNDQNte>%$gX~9.t,?)[[-5zVax&aY`O&C=T0Si:zuP' );
define( 'LOGGED_IN_SALT',   '.Y4AgGq$#Tns)Ld!4gmsc&9(dwC^`dy}=ZSA*v3+awAH5nfC[-zDoyXx,[WZdi-H' );
define( 'NONCE_SALT',       'C{xv`zqu03pQgcs!^<B,24KMB-}M!dzWg(k`5Pd@No}PJm.4h2;ct<#iOz;u5%[C' );

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
