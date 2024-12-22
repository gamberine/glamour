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
define('AUTH_KEY',         '1zQ6oLG,C.j-J*pNXj~VObN=8&:`C$iyC3?KSVUh$6)/`*X$AZE8gsWnLi^d- `R');
define('SECURE_AUTH_KEY',  '%JQ(/-d}Q#yeIex(=wAu%Rf%NP@}F!n%9+{1QLC*~x07U3WT_Kb}3D!P vI`H(Q@');
define('LOGGED_IN_KEY',    '=jC)!9(NS+KIy;`=7~6dg-^)BWa2q.(st*.GBQl*p(h~fde!ki8ej(~;%iF~ripI');
define('NONCE_KEY',        'vB6fPg$9d6([.dm;Bv;Z4no$J0CDe!{O+&Mv+tw7o:X2oL,Cq49k5ww1$nq8eoF~');
define('AUTH_SALT',        'bUfp_vH?qTM[?d7)+5!=NxAv,A:B}+YY[E2bSPRp&T*c5/S1t*ub|fRS|A0)x-W0');
define('SECURE_AUTH_SALT', '^Uo|s,.ELNbH*utV@V~O=rq*4Q+A~XeszGm/dYj b6c?r,M/YbGZynO/5 ($98Zv');
define('LOGGED_IN_SALT',   'mKzt6t[FM%N)(fbv!>}n;*=Zlg~G&.a2~dwkiebT%W7iTgmeUPT`q*,uIjJq_9f^');
define('NONCE_SALT',       '+aL^mue:Y<~-n^xXqMnDHs1V%mkHE_*^k_IuMPZC?Xw)@lh#RK]5dXY%R{tdXY=;');

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
