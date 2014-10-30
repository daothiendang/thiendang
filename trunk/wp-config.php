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
define('DB_NAME', 'thien_dang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* * #@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '-:B+&OK@W:!*31&[8`oZ4CF[IVLmNO!q![]a 3W0&))qMX%+P 71>]*~..lj[ID`');
define('SECURE_AUTH_KEY', '$$g| B{ke9Bhz{D]HxGK;;Y.9!X9WCsC+6ZUVk5g_{&vD_g5XMFC>YIv8-2Dxu`h');
define('LOGGED_IN_KEY', 'A8Q1Y Oz%.]3Jq?S$uO9FHb=&t}ec2EV+.eV>Z5vh9gS>Pbj$Cw0D*+t.s@*meUv');
define('NONCE_KEY', 'hf1jZK%#Wq^O6yLRcKTv{IWU7+M8GJV7p2guJHu#I^t;MR5KW*o7$2n)^r>6v*su');
define('AUTH_SALT', 'pW|@iv`.oH$>8!OT?o+oJybejzuw%c=wd2?,t#|Sf(^v,`cAitr&WK:J4U/aK/q>');
define('SECURE_AUTH_SALT', '-!#y!AzW[@fOYP{j=/}Y7`4Xzp8DY/LN)i(J7,Eq3H~!*2*CO(<FXQYiLaZ7#.6d');
define('LOGGED_IN_SALT', 'M4aKB4m>cR9NYY_PcxVXqUqj`r@3.`lSHfwyRua&nCM_>|7PSh~s~+ jhgmVD,Up');
define('NONCE_SALT', 'i.vA1$Y|k7pwGA`%>sAzGZr=$o#O_/?c;~Lv&nO{8{9C:G1 ?OV/}ObvgTi$V7`W');

/* * #@- */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
