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
define( 'AUTH_KEY',         ')$R p+}D0wv3S>E$OEoD9mD*^`@a8Z_B/NOCoXrG@LTEm>`f!!P4*j6OQfG fYLf' );
define( 'SECURE_AUTH_KEY',  '.TcG5ad9~vMnlMj`/H3bckcv=F0XamRR=7E(]SivL(L)[-boqBOQ$7t+&vU]Q1eo' );
define( 'LOGGED_IN_KEY',    '-M3aV~%sO^6q+O`|6*%<w|_TqzO4^u{H`XL4iy%%{>C;CJ<2y?v8|.tcy8A3O%Za' );
define( 'NONCE_KEY',        'IatsWOl h.3DbEqB7E<4E^[ZZ._TYHP%!(qG4r${HBZx(Z;})?x~KI<ZD!]w@&j8' );
define( 'AUTH_SALT',        'zA^%/rbu>2PfDY[gn.nWVb12;Oo|v)Cm<f^v_q0Mg.8J*t>Syjhs&bqeJ=u;f=XG' );
define( 'SECURE_AUTH_SALT', '9Q%T{HCxSdy3Z@ZRVkS_m;,^=,G{,Cum+7O(l[ ;{Jg}u:zzP>0I~u>Sz24~p`;F' );
define( 'LOGGED_IN_SALT',   'KdI!E]TrP9)[MXD$@me}@5^P5Kk6c:sD{zJl9|Q%![67IACkEm9/eWrZ9IV/!Kn}' );
define( 'NONCE_SALT',       'dbz}hg0QLp~!IZovd ~Je?4VAG.N$Gs(HNM6h7U`0@-PaE9/9BigX9ZUpFvV|VRg' );

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

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define( 'WP_HOME', 'https://endl3ss.hostari.com/' );
define( 'WP_SITEURL', 'https://endl3ss.hostari.com/' );
