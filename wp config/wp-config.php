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
define('DB_NAME', 'taypodb');

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
define('AUTH_KEY',         '8W)ibLa*80D~hcQ$8#c/Z#$Pqv$XdY H}eQ.O`qrw=b)@_{MnEFg!<T@X_?^5:0Y');
define('SECURE_AUTH_KEY',  'AKQ(UySE.+-+|%FIg4#Q`PtA&3~ YD<K(m/ $q%,aKK&E1Yd)Rn-5.3=?=[uBqDY');
define('LOGGED_IN_KEY',    'e{K/wJGF]9^s]bqYu8ZXg?BZ=Hx:;OJW^)e^n-zaP3oW}pj9vi)xtFoxXqWgteBW');
define('NONCE_KEY',        'G2=-,} VP,Uxk~a80:QL9<}@DQ>:=A#vMD$q,{VUS{%s]~r_Y_K+xD8#l9qXFPud');
define('AUTH_SALT',        '}$yjaE~0[dlu_WD{kCi:0Euo_g!7KW0LpvW*]FES2c-v%50XoQmI6W3UmTy3y^e)');
define('SECURE_AUTH_SALT', '[{8)6m=@a:mkHov]Q:CMGE]m?AF09NnwAt_<Mre,{t#A$MGUts|CXgZ$]>{wzLbk');
define('LOGGED_IN_SALT',   '1I`O:&$:^%s*Qq%rrNc8ZpDG4m,^>G[`O==VP.7z.{D}+UB29LPIu?|L?]kF`|x^');
define('NONCE_SALT',       'SM#goiHLtdphcnGtX[%@k6[I#,qkVX# `fCZ4|YpbZ=nPk59hK_Z@{-N4uVF,0ha');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ty_';

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */
define('WP_MEMORY_LIMIT', '256M');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';