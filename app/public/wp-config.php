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
define('AUTH_KEY',         'xLn43AdviAHPLoq7cZdSRD7ufZrZLvrMCdWWsq5y90C4JttTKp3E0M6CL91DBOlt9Lvf0ivBZAaFfKLQWmIIbg==');
define('SECURE_AUTH_KEY',  '+gx4LyUAD/RXYJ7gzEp9lsStMvMlomrWd/aCpd6HAjsNtN7/q0LlpI/T5MEzz7bP3YMLHI4mNkFp5D6fEGMosQ==');
define('LOGGED_IN_KEY',    'sLZJq7/BEqQyixd92tXGPbepngS4Mxu9ztcfZKs7oR6i3QHza2MLtvf7Y7BnyDbfAfOD0tIkMo+dgov0/NJr+Q==');
define('NONCE_KEY',        'C0tONoZD3C3f8b3sBHA4eIzHQTxYr2nHBeanroMlrzzT4N8eDol0lhgLZeGc1dPmhFQEOYCCLC9iQdVaHxVnhQ==');
define('AUTH_SALT',        'kVE/at4QXPWHyCXOEjp0E/uqLrVHv8hQYHbNIexGBz0t6uTiPxvwDUAnRGMNDwg9I6YxT/0Z5Qa5kBd4Wt+mRA==');
define('SECURE_AUTH_SALT', '+I6Uj1+DtLHCGsp/FDcHghdOs6rz3tL2Bvvd1qxe5NAoxkJt++RsvNbPDJQU5VGgb7k0CaeISOT1w7EuX+etXw==');
define('LOGGED_IN_SALT',   'qTerQXECoJaY5tHDeRDF04ctuexC8DZgrLMwI8/BVQMOmkmEN3GWZbWSd8aYUUpxyBVu0YYWVy8xae6h89nMtw==');
define('NONCE_SALT',       'otgd7fWCbZ3cvdzvIM2Jj6A9Q2S7NLLKZyyVjG8KzHxHEVxP2rqrbGbfjwhmWhVLdxXxe35DytP40NpVcm570A==');

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
