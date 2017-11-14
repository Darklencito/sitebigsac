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
define('DB_NAME', 'bigsacperu_webstage');

/** MySQL database username */
define('DB_USER', 'user_bigsac');

/** MySQL database password */
define('DB_PASSWORD', 'QT632h2115*6o!0O');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'q6w9zjgdhglewnlekmis8cb0gjaaxslo85uipigese4iasqxnhfskgdip4ensd5w');
define('SECURE_AUTH_KEY',  'rftid2wshnz9qmfhxz2vtegtq4usqwwo5tknx1w3fvqjdchuq9npi9lbei97tpbj');
define('LOGGED_IN_KEY',    'ego05i9mt1buihetngsc6asmsiqktb1qffm0neivhbp7vvdmcgsqlgi9gqc5iyha');
define('NONCE_KEY',        '2dun5lg2viyeidauvt1nknl4syrbxah28lxtlb6mjsdzxz003uytby7swolfvwnp');
define('AUTH_SALT',        'doxp2k4yrraziuwela5nmhzjybn46gn5qn6hilmsgyxmjpnewg3vm4aoyclp0qwv');
define('SECURE_AUTH_SALT', 'rorm1rxjzgczk5lni39n4ekd6xbegoscavfthv5kuxasupmexbtetebzz1fhnlk0');
define('LOGGED_IN_SALT',   'zxgbtqxkpmfpckpb7tkom4rmyf2zko6m79zavgxxhdghi0mupxvcdqlnrhzhpbsh');
define('NONCE_SALT',       'lcxwi0ecl8azlqoxn4xvfkvfgi6py9c2drbeq6qgy1vl8l3d5q8vvuqwwsefkgww');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
