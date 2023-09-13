<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'FetiWaFBTI8hZOsaJ6a+GSUTNqbA8KKaZBWorE76ViSFRERis9KPMyhmnzKmFbtZfvDimdO8Y09co6MPVDCcVA==');
define('SECURE_AUTH_KEY',  'fI+yXngG4xB5MjtqVZaBE9/P57CpbgDqP57eWz3eQs1CKlR5Q0Al7EJEG9dnsSfWzS7zWTeAJ6jxJ+qvjqqYHQ==');
define('LOGGED_IN_KEY',    'czMl1Oy6C5BkfrCoM32vNZ9b8Q/ad1ueRLEqn2LRj9InWEA57jD40VPyiRmJHuITa5C0dZvqnBlOQxnGr46MmQ==');
define('NONCE_KEY',        'UFtkqR4ZfhJdGBpe8cm0Dr76U3N82D4rw9fxZCjjmOeF+HJV71YDPz/xYfMDjkx2URgvXcDm8OX3J6k7ddr6Dw==');
define('AUTH_SALT',        '9/6Jvc3IXPv+HpUg5aA/JrGh0mC5mqlmyKbO7VcJ2cpTW3zAy94Ass3DxCH0Cl/ZSjaZFD+arldOG95GnA/fTQ==');
define('SECURE_AUTH_SALT', 'xfNXZlWPSNKaR3pQ06Bwwt/CMshkSFq2U6OSwXCsHJ121z8gvus7xNFZ5hG9rkB63DqSJnsZTcw+zf4ZgiDUNA==');
define('LOGGED_IN_SALT',   'M4Eb50CH/Bq0Vg57pweGc0pLwGoGHZrBXWY3Yw9VHDSJ3zBjG4uBX4F3PhPWX9Er6y8IR3ph9jqzUNFuPIXpHg==');
define('NONCE_SALT',       'joKlL1RPpJvTFkuQ+CFZHmRCQxdz6eMBN6vWvR/UhqWhbi2+DJcsudFYbyQI784R/uBmSjQcpFw53P0YCBs43w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
