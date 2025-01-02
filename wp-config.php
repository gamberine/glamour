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
define('DB_NAME', 'glamour');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* Add any custom values between this line and the "stop editing" line. */
// define('JETPACK_DEV_DEBUG', true);

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
define('AUTH_KEY',         '601!&;A5*<zPf,)}s~.<P=j1@g;=C+5X`q7cRX12Xw30otMq:#n7vl)$jA-*FyXu');
define('SECURE_AUTH_KEY',  's`K:(|l`0DJ_2}Y,n.,W)@3y(9[ ihz~H){D(u}N>u[)?8iZx@|iA+5`Z~[><auK');
define('LOGGED_IN_KEY',    'N%%)/IW_)XS>/v{ZF*?(|]N@ i7UG~[JozH!Dr<F#:J!`WV6]M){KtPB079 wv5&');
define('NONCE_KEY',        'wuw%,t|OBf6@B`cktNP*)|Q- l{QNhfvPnSiO}r~)8BdS6Fka$1MkwD[^@oA!OI2');
define('AUTH_SALT',        'tPj_csct!*C[z:7le;Jih?%MHa+N8riSN7{Z{Q-[!x|63$v$Jnf[z!R>]|P^CB`*');
define('SECURE_AUTH_SALT', ';?e9Lw9<JizL]T/n+}A30<||lP7^Q=!-G#!G,03]jV8z4`=oc/-?VCOEk.i5|{ri');
define('LOGGED_IN_SALT',   'i)1=Cgt4D6{)W8N| 92kj*0y-G%U(S5U4QC-c/>/*2~lwxyPIOH=iBm[V)`AZH_F');
define('NONCE_SALT',       '0(<QQqS;qJ.0?*S1AUcM?VZU}>1d2gOq!^^N;w?b>hWg5@&P$%^|@*9(`_F&D5BG');

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
$table_prefix = 'wgm_';

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
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



define('DUPLICATOR_AUTH_KEY', 'o:6/2yV7J:y2pDST^#q@]/8U;EavgG>D^+D<*8hi G/;.tXz3bjIK[Uf|n0Il.lT');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
