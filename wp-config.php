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
define('AUTH_KEY',         '?oatqL/)1-0vb*Q~%T@*A sUAw+Zow[f~E%F~:T&P9` RD;|]4iYS|lpK>;^)4E(');
define('SECURE_AUTH_KEY',  '=*6;Z_~msP*1kwb-nSA3(7e`$8[ay-0YsmH-grtiHl)Jhj/.v?.R:>3oHp7(K!z~');
define('LOGGED_IN_KEY',    'aQSw2543B4|njlg]uro+-r=`+O6bq+Yr9)VvO0(<c>R`:v;Ltd;mU{UhwyTizsYp');
define('NONCE_KEY',        '$;5.sfI`HK:Slch7UfvYQfF4<DN=#v4?Ds+9M;^ w7%?9Sy,O%=;nVD }~leKC/Y');
define('AUTH_SALT',        '+lLP#jCd*a,6T`$-I%V>xR!LuMr/|FsRyonZ6~q{&=`~s_;~|R87Jcs-_;#j_>!_');
define('SECURE_AUTH_SALT', 'SjnM($YeWgfe5;!|D0VKdQ8J%JX,|r.($5v@$,T0B~F+yw6Pq9sG{EaSSr[BUB:0');
define('LOGGED_IN_SALT',   'p||5aCw^,gI+^Xdn]6PVk/L6^.Yd$nJeH/+i6&{LE<&DXyu=.%*J<V4Jq*2yZb|u');
define('NONCE_SALT',       'bSl^.UeUI*vvB&z6l>tHG#;WlsS?|AjCij>;TkN*A-qsXH1O wL=)(^*(+g$(HN}');

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
