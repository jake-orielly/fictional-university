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

// ** MySQL settings ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
    //Local database settings
    define( 'DB_NAME', 'local' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST', 'localhost' );
}

else {
    //Live database settings
    define( 'DB_NAME', 'jakeo331_universitydata' );
    define( 'DB_USER', 'jakeo331_wp937' );
    define( 'DB_PASSWORD', 'k0diakb3ar' );
    define( 'DB_HOST', 'localhost' );
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PD1LDlag8sYiH9g+bqT/x1oJJ4RNI2M3ooNCk8X2tM+Z56SD9Z9t7ZFKBABi7jKPUcl79mcLE5y+w93eaD2PPg==');
define('SECURE_AUTH_KEY',  'Nh57zRXzNJEnbKhFq6rfxgvrSHlqm4V/6gOfAlDvOMHf/zujCU7Y6GGWzJis+NH8xZgumh7tfOfaqGVJjWo3oA==');
define('LOGGED_IN_KEY',    'ad6tWr8XsvXJNp3AZQSQcxfvCyKH7p0c+7YU/I6NMNUhj+0xCTQKIMafHoB1tPkWdyAYxOOdweo+LAnksQ7gvg==');
define('NONCE_KEY',        'cVJk47c2zUkdI6E+JrGuFo3UVbPWAWzgldjUhv3B598LHi32aliBsKAb7QXRMURICJ7wG0tdcgzVGtZec90TcA==');
define('AUTH_SALT',        'IaGbLehlA5ZpDys5Hu/5P6od4pBdW53L+Rsv+cR17jyzRc1NRNLb26IPdn+zYd3CJR16px0rk/uCtBFBxKVwuQ==');
define('SECURE_AUTH_SALT', 'j9ORMT7TzKtusbuqFGbqmhli7b4mfhUgMhcPaUDwGHmXDRgL2HO+TCRN9LaH20yDj8o0hbt+LOF+PnXIyzDqhw==');
define('LOGGED_IN_SALT',   'ditUuwfid8VGAszmW+Et+32CL9vAaN4V+zUy2IiR0HIUSFFJU3d/MOba0P53wxGMjV5WPL/bzK+Q8E5ZjBfsDg==');
define('NONCE_SALT',       'WDGUgcSF0ZCI7FeqgDp7IG96wH43rV+4RhdOFLbo0ymSE5eaE92EplAWHzsXm5/4Yl1SBIaP/X0bIfQLPs0qjA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
