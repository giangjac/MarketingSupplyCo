<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9AdBb4hAhiQ7YBzvVsMUCOMMfroYv5iEEPa2tzJTY9F2OVWUzvPYtCXSbkk3izC3');
define('SECURE_AUTH_KEY',  'HWo68FT5L3qW5bwmYpChDTnEu4m3DRgfDYYCTli1mhAMHAxGIkg1uOn19Cem4s3T');
define('LOGGED_IN_KEY',    'p272wX5uCZNnKsxmsuZGTohvkZrkHnD4OyJp8NvestJxa7wIpj4Sulw4H2kLu2x4');
define('NONCE_KEY',        'yVnSgKoSZ8Ah5ALLnj9raGgxxEgQjCf9ft0yJanbWzqpSNgvN53gT0JRJq7IDbLH');
define('AUTH_SALT',        'z6s0AdbznpPTXATrZW7LGZoySl1tkmgsPthzMjsor2YylHE2AL1v5vMu9dxb8kKJ');
define('SECURE_AUTH_SALT', 'TZXVOH8pNjQJG9hBUsbgWszxFYSIkXDskxy6y3XMZlEyo9b0SvYsIQu2jMp0skon');
define('LOGGED_IN_SALT',   'WziWtbufvyMQbAFZh7jF4ILASKlWaNss1KE1vgpevF6aGRhVXrEjrvuHvVxIuhGE');
define('NONCE_SALT',       'ilKRcshjxcUlSovxIet9Zr7zcjIpJgebBApJu0FThQeuWRbBraEE9V7SBM6K8KRN');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
