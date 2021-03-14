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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "navin_wp839" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "root" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qrmudfkzkzyrhfytgb4lllavt08lwruedt0zjp6bvgxf61otvl4n4cpgcwskbho2' );
define( 'SECURE_AUTH_KEY',  'q2zaq2hb4jtcybqasal6pxgcy0lnummhqxzmpykokwcsbjztrpqlifhonqr5fvfd' );
define( 'LOGGED_IN_KEY',    'lcgsii7psrjl0kp28uiitblsylimj4ipi0zvmv4rclh2frczjsanw4dgkt7zch9u' );
define( 'NONCE_KEY',        'brvghusfpm3pe5kwx4mqqd6ujajo0o6arih7wpyqpbon4xhfv56tlil1ixcqhdgo' );
define( 'AUTH_SALT',        '2edv67i2vi6cuh9qp7qdlpldcjvdf2zzuwr3wjfee1ly5ch2asgl8iedl7mvl4yg' );
define( 'SECURE_AUTH_SALT', 'i60xoxgoxg35d8wv8c2jaa14jc9jkwrlbflkamcgojgg1kw9mk8wbo2eifmykhhp' );
define( 'LOGGED_IN_SALT',   'nqo4knszrkntz2rxdxxryodnc3u8qzfmb5bba7gq61qpmge1rvpny7omqptyyvna' );
define( 'NONCE_SALT',       'nl5fgsw1q5lfjs3sr5lfoi81yqmdbkitnta8gorombc0dfa7hlmgqjasayponkj0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpww_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
