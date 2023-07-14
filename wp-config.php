<?php
define( 'WP_CACHE', true );




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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'timlghvm_wp640' );

/** Database username */
define( 'DB_USER', 'timlghvm_wp640' );

/** Database password */
define( 'DB_PASSWORD', '(d2.ep(S0-v6B)zt' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'lksfwfajzos4ihywvqukux8pa4nqpptund66zhgbon9koxixfil6dmr8j07auhvq' );
define( 'SECURE_AUTH_KEY',  'nmgta7ncfdg6fkyhgx0lhevmnn6w7xkwu5v00kha1kva94dw135dujynpuoqnke4' );
define( 'LOGGED_IN_KEY',    'f4hen1pdqd8qop1klxhwyeavucpsjbmiwypvjmwpwwtvadwmgq1kcxswiycp94x6' );
define( 'NONCE_KEY',        'g9pwnmw1ae61sp2l7gvqf7bnoxc6jqrsfxbffoemaip6gl25hx10jhmwj1ll5sie' );
define( 'AUTH_SALT',        'tfyyqvipoi1erbxqmjdc4ndnreq4pbhckgebzahwwhz2ciblxppsrbploy1b4jpg' );
define( 'SECURE_AUTH_SALT', 'ssrfigysgwva2uns4zoipokg8gfrojk4finhdukjkem8ukjqp7z0rkzvs5so5nph' );
define( 'LOGGED_IN_SALT',   'zbgzmmwqbjx98qeij8bd7fx8xttclfaazdpdkogsz9b5p5r2im4jioya4ghmnv0h' );
define( 'NONCE_SALT',       'nnzx4ucwhxiz5pmraq3mlogtibduhmafxyr15soem6tmycked0d3xkuv2nm2bb6o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
