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
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'LSLgLE7bNjb8SpVBUU3KmoSbQY5PkpWLT5S2UzbDL3JnPVWexgp1VBOl/sw3QlVkPVr1SFJD1PrvkyZLkNMxqA==');
define('SECURE_AUTH_KEY',  'A3np1YgHOdlKJWDtF9bazLJ8ncTZqncGqHE/1zyNEsJGNS66+TpZf8aLxuDFdWapaofGfvsp4lMDaKSrr4bTXA==');
define('LOGGED_IN_KEY',    'xhaudqLjUYYvbXP5UQZSa3YOALNbqYzzgC4Ek7oj1CcbW8ejukXcqdIIqyHC6Ryn7Ukwh7FydOIPfFSeNsxnmA==');
define('NONCE_KEY',        'i+/gjJYWUHhFQshVNtmmtrql5VIUoJ7G4TGGOzgjKcRBeC5+Ez7bXlrQBAd8vQ8h+HidSK3ui4FbWFd+jqwHmA==');
define('AUTH_SALT',        'r9I/3r4xjRFtMSyqShM9eQyWntpRrCjHUfWZan8AVtUIYZiGjMSnTTrtCcQANZZ4lrr8ydYIUOe+6PSOsBgQiw==');
define('SECURE_AUTH_SALT', 'F7ReBJmzmg8YF7ABp/drzEaaZqrwK7k9GC1I2JFDaE8t/POJZ/dwqcdrq6teqqOXiGydvudpfzhgJ3tsbshcnA==');
define('LOGGED_IN_SALT',   'e/LR0tKZ8qdEEErAjBRHUhjGc7W9MUq5UL8PBCxSp4nae4KFtUi26O8XmwUFzB5XrHLArQAr9YedYwRqTQT2hw==');
define('NONCE_SALT',       'fGUKjE7cxucEduodlelO/aqa0r7vGcKCpD7/Ees2jVdqe964ZVv00Htgo6h3Il/mzvAis3Pj3nog/0nUhiEQrg==');

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
