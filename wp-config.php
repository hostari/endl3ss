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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
$url = parse_url(getenv("DATABASE_URL"));

$host = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);

/** The name of the database for WordPress */
define( 'DB_NAME', $database );

/** MySQL database username */
define( 'DB_USER', $username );

/** MySQL database password */
define( 'DB_PASSWORD', $password );

/** MySQL hostname */
define( 'DB_HOST', $host );

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
define('AUTH_KEY',         'X3$J+V%nAJX4vJEg{,hQjnbli==uewMV+5Alfh&A]Z@6rKQZQr@|b8H$1+T&w<}l');
define('SECURE_AUTH_KEY',  '40l_fB8,D<B8RZIKOCM`?Dk5~:_&@}$^H]D~c4?j-)S2%;h-LCe#//+jTy-q!!$T');
define('LOGGED_IN_KEY',    '0qeq_iu-$A||GU(<~!-Jt;baq{R,d[Vpk4V%E=ERl-g/FadjR4m3P;96H Yf!hT>');
define('NONCE_KEY',        '08GgheUSX*e_ix(MexFs]e}*dR<1UZ7X@<v<y@Xs)uZN-*R5JHZX%Im2!%9  +a#');
define('AUTH_SALT',        'D+& f?:1A+HP00p_R|iD/5Tt6X`wT%wh?OeUXvn|_&{@h+2m~dS(_241YH8,^Kt%');
define('SECURE_AUTH_SALT', '04kf-2b])!h%7oh+|1t u9M[aDib$pUA:]}mpF|7|SW25!M9?C;ITgu@Yy+w/7{s');
define('LOGGED_IN_SALT',   '!Z_c7?jJE2%ZdY%vEk/E=D`hMx zxBw6.FS,%mH)kDWlI$`YTg Z)*2l7Yf?B4<q');
define('NONCE_SALT',       'w{;$m!rXVE*wjyOpR;&zueDxH|H3GXx=ZiLaC]<$b_g2#$(a]-5Eq3L{7%GH!7&r');

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

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $_SERVER['HTTPS'] = 'on';
}

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
