<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thiendang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'FeW3Tz4mDyV7x87C0TEPsJ3ClTmwLuKMf5uE8eTt9fNBaio3O0TpOp3q2IMU1FE6');
define('SECURE_AUTH_KEY',  'kemkFXmRVBESziNv3MxJnXgpwpBbCITyoI7hNrVGIyMhya4Vyvs7m0zMwsqhnIaX');
define('LOGGED_IN_KEY',    'KKd3JxXz1knlWmJYSh2HnNxxKm1yoyRCHhr2OVu8TAyNuND8bFoqTfqG9SGm3Tvb');
define('NONCE_KEY',        'ZXfx0bg9luk4tJdUuFSqMKxQMc8lb2kuJVeCJsJuCrsBbPQvvZwLls8J0hSdfdLa');
define('AUTH_SALT',        'RqaBYjPZG64wpub8E3x0uN73FbwwjhIYc57fCyO1jJey0Ye5HP8r3V73xebkyOOB');
define('SECURE_AUTH_SALT', 'KpJrdGuKWP2DO60vkMwGUhBc6KeWBYhRvljdcdtuObx8bVrcZ9QegsaXuFWdO4zA');
define('LOGGED_IN_SALT',   'TqA653Px5C4Dm4ItgUtWrkDc2TVrckhEIhIvwDFicw5aeUmy9hNFwNQZmkTcpi3N');
define('NONCE_SALT',       '1bvuIS5FGnT204pXHF60U9yOl4wmIUwNljaqG0UPSNpI6Jfl3vESWKSOYrq7a4VU');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0777);define('FS_CHMOD_FILE',0666);
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
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
