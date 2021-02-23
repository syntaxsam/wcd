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
define('AUTH_KEY',         'p7owThwOAKRFrM8XLpOr4l14EnHItFquosob9j7InkwyYnHKcSw+sEsGEW/V88Z07BcstkYNOlM4uHbwtBiwFg==');
define('SECURE_AUTH_KEY',  '2yD1DQKkSGowgoKEfVIcoQZqGHmG+UgIgYUoAL5T/1pSUDuaiQAV9f4usEc3o5u8E3O1eR2K7jl9l2bV2SSAEw==');
define('LOGGED_IN_KEY',    'TXgveMzPz/22//7GO5BErgdN3sKaHJ8k4H48AopqKzwESN6C6D2pemvtJr6PcMG7zZa13P4xcVMpamsIROBrnQ==');
define('NONCE_KEY',        'Hfr+yahDB4jYGQTCP363hB5a5covZPyIpUqAMtbkBWa1brWhUPJfe51L9v5/v17hif4M1XOghORB5MgmAehmfQ==');
define('AUTH_SALT',        'Us5kmFwwmtnNAVyWWZtHDMZyvXB8p0T3oUa2tJkPBUx52FK5S16j6jqlbcJQD/t2HCQl01E6m0UYZpfCjzIKeA==');
define('SECURE_AUTH_SALT', 'JYd61QiFW+XFwOyy33F8Ax82hIifM96pmXbi/QW9Tm/6+2cs9ghLi5wrVkCplnH5woF17M2klZsrw1jFUPFixg==');
define('LOGGED_IN_SALT',   'stM34bNL3iC6HNS0a1v3qxagsz2Pav8YdcZFdotSiy22nhCL9+mws6wG0Gni5N6BBShOD7V+JWuLLhlVGxWVlg==');
define('NONCE_SALT',       '/n85GDbf/xtn9nroCcu7tp3LqDwXrNy61r/5cJU2DCq3k3FnbIVqgYKPBOPLXiserjHe3F1yYrdFWol7cEdO6Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
