<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
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
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+rs|6qIRqD.{CK;vb%M5i^B-dW`6B9d+Md<K[vx8aD=10C|8[|$Jw ;}+pd-6`wU');
define('SECURE_AUTH_KEY',  'cr{z7#KqT]~Ra|>+%Z!leIxQ>;ZBKz-={]pm?8&U%!A@P-3T^>5B#nrQ|1R]al~S');
define('LOGGED_IN_KEY',    '.zk(@IHTqG-)58d|e;8f5B(gq=|-?Sw-k6+8Y~bG;v-sZO|C*? q_2.%U&gkRhnC');
define('NONCE_KEY',        'Ol!~lB<}7sYFYhk~MT/|y@e_xXNI?ayoQ;k7pJ4h!O1;~ WqvJi2u.AP3) r/f4C');
define('AUTH_SALT',        '__+f|?dJ{NxVkGK-Kx{~R.6@G2i/Y+|R_+d{^?0|1|L7gJq;?va?+#KWM`MrAE?w');
define('SECURE_AUTH_SALT', ',xQ<Ra,d8q+A^X<+`z[w3BV}aI5%X$!}EQoZLFH6^(N1afTor.Pu@_v.go{|GA4#');
define('LOGGED_IN_SALT',   'vZbD:gtbik?cgpeF)Io<0wAB]zhHM<Le5CX? MkkW9!Q|G)Jif.9i%L=:-J|/AhF');
define('NONCE_SALT',       'Fkarvjjk-9m>&P-FBl~PM|$/kbmO7EJ/-Y1_$Vcu=KQ%gEE7v,?ysvwKEVQjss]0');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
