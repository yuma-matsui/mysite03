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
define('AUTH_KEY',         '6Wp+Hj/9LheH1n2VJ7GLs2JK6/WUHbunkOpnOeuYf7r/t3dbkxU3xtKNr8qtxIniBIU0zQUiBLxpwp2EMaj+Qg==');
define('SECURE_AUTH_KEY',  'TgD6Igv+54ysk9qLmX/EsiZDPF6tqlWjEFPxpqE00ZzMEV5X+lPDE1B+yTfx1jCtd+oAH3HKJUj8ZIMqLCN0vg==');
define('LOGGED_IN_KEY',    'JVzNdbp3Dj2WT+xBiv/e6Dl0usrJ1oSutve94onZgxT5Tzo5XXefMW39LONIgc7ATo4k+qwFaVO8NLnKAZRBmA==');
define('NONCE_KEY',        'dEgc5cjNhva9D4UaJXeAINbArB9PWbz7fXPdUNoUrKOH+hGv+G46OA1Rht3YbM0YtLiXMUyHIUNDCNN2P/pTBQ==');
define('AUTH_SALT',        'MFTbeUrZwuPSNNAZZdgc+CCxmaVeMGFdu9dLPOTbg7KCCBVzWvM98MvQuiqgAR8XyKn/6O3z38SICZnFKvc29A==');
define('SECURE_AUTH_SALT', 'YzUW4HQW9QcuVkvTAkYBRcly0z8igczYy8XX+vmAEw+RNkq+0l/xIuEOYohbqeXCjjD3HWwpT1j4CzZAqkuxDw==');
define('LOGGED_IN_SALT',   'cuDhonwkjwBbfVDX/ACVLMbvQcuIktYnD+73gqRGKE+STxvHBGQVFHQrwuD5AWgIqX8g1U5LS2D0znWDgu/4+A==');
define('NONCE_SALT',       'nOEl28TFans7SbBUoYTkOJeKVZ/hZ0N28PEqb1x8atJt3dfBLJGVk/Igm6J6s+2XLIZhYdvxy1phZpgybfwzqg==');

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
