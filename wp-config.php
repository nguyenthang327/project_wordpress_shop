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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web_ban_kinh' );

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
define( 'AUTH_KEY',         '$v6d8vC/^DWgbD31YtE`L7P)OhX9hX;Ij}!!,_t{<C}80UY9[ZX]XReO(G8[/Lw7' );
define( 'SECURE_AUTH_KEY',  'U{RBP7f/%pjk9j+J.^?YLYvJ_nN+Zz>_mG3u$uX4Nx~C(PmD]:j_^]j>z,;Cdv=-' );
define( 'LOGGED_IN_KEY',    '2rf_gdYY7j-k4r/738x8LA]tSe{jK/hY8_WGzbpU#-zjR0GO8F6_ns@.TI+@Gm]S' );
define( 'NONCE_KEY',        '_ze!8rl+.gB |eP/uIs]>xv>]<#bUy6,l8q} S6(wqa@2Q(t0NQK(VH-Xv<&*mSq' );
define( 'AUTH_SALT',        '_!8f3-W=GCv:t$:^EG$wzw0NvPamyu-5r`+).BmV0B9r_TE*4cT+XFt|<^>HJ KX' );
define( 'SECURE_AUTH_SALT', ']<:,8|MfC9>f<{HC7=Zo 96UosK7YZ1=.3G_29J|![0^kai9;|G.jq7vWcEFlz%8' );
define( 'LOGGED_IN_SALT',   'yArBV$=[8`cmg- LH*:W{-$^Ri;7N+gf:O c%{=,#elu4:YW6W1Jy_??Cb41r#O$' );
define( 'NONCE_SALT',       'Npk38y3?>~H9DEISE&~;ExO+. >HabKnBa=;_lvsq_FTgT|]vF3,-mrEIGsSg?~$' );

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
