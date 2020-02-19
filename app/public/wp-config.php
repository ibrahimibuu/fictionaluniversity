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
define('AUTH_KEY',         '33i1zeX/5AxX3Tij0C8VqCh40hgo0OKjwTF0it5zYdSMWOs0sxO9hjdXK7OPl4wt2sx6H5j0IYnJcwCSUj1x6Q==');
define('SECURE_AUTH_KEY',  'RPO1uuyuTsU+COMlCg2vX7T2JWpihizKnBaB08zIQboAA33Q9iaLgz8OjwEOYVl1fLJcudK0/r/dXasQN80b0A==');
define('LOGGED_IN_KEY',    '//B12TcEPR5L7IOb4F2J8gqypEK4GWXoy3CSFM8ENP+c5ozr2gEBXZD3QpicWVG3E+MGXArE7SXX+/mBG0pqeQ==');
define('NONCE_KEY',        'WqPt06cbWTuLB0jyISwjUuQv+z8vx2BTKgnnbOMilY1ZqALG+rZiJteT5ibj7tbU4DYYwkJUekGSyZCRU1CE8Q==');
define('AUTH_SALT',        't8JrtcDcFdygcVgjVq3wcDtWsTH76dXJEoI8tH6g5bTu0Q+2D7ieX9cTp4hu1/Z3DKvMOkOFNSLb58UZPCwrWA==');
define('SECURE_AUTH_SALT', 'e5/82lEP92cqr79omEQh3Ww6AbwtzAsrJ1yDHHzZBl7ig/PrhUjeX2r7Ncs3v2T4FCcjXIV9tXmOVZOm1RQWvg==');
define('LOGGED_IN_SALT',   'FlI+fuurKMTJMi+iQu3PV1EKwVsqc1f+Kz4KR0nAXg0xxN9I4VFearHYIVyt/oEAkTxwd1/K5AQAxlfMSObJMA==');
define('NONCE_SALT',       'ei8tnIh43eUiiftKtXwuazKI/IamI2dSxsrqPpvallEzYyys7L3STpA3UbpARvoHkX3SoxwcSDShhNEj/qN+wg==');

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
