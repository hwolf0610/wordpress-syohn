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
define( 'DB_NAME', 'wp-form' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '8UYP[z,EN:`^3P_Z6Q_Ced|)8( e+99]=K3!&<,~{U|-mrk(Be]1}YwpT4`5/(if' );
define( 'SECURE_AUTH_KEY',  'qHD#^wB)NSkI0w!._(6SS5W@|zT6P0gs7vmJGOUM+UJ}GM`O*5zU :Tts-84Iuu=' );
define( 'LOGGED_IN_KEY',    '008#oM?Lo*7E%*EM_34@I1.xe}.(MC]zXgIaqUn%-|J8<:yYHAaW&-mqE;5+]Bv4' );
define( 'NONCE_KEY',        'x~VbmXMfkE;QtKsPn[sH*Xl`SeoTOHiXw76%UMO[k:-teQG1@^x)Ui]4j6_:<L6p' );
define( 'AUTH_SALT',        '.7c_X4&;UT|?VOYPS<KzGE<^d*0A?FCAQ^z8sy6{} l,g%ba1@k8m<<BQ0V|;>YR' );
define( 'SECURE_AUTH_SALT', '^QlKq076/m||T|oBp^uw3?wP+6 l#nCU}5Z/@~Ql+|)SSFc}L(rTt*|C&CbaXVOl' );
define( 'LOGGED_IN_SALT',   'tVGTo1epiuzu^<?R[cUd=AL|,R)ZV9HxIL^@q.~><Z#[g9jP%:7}/^}a(KEHRrgA' );
define( 'NONCE_SALT',       'O<3DZ;2{-$jSy;a~sOUY*GMNzlVI)kQ =lj-wz6Us0;D4,<GG**g-K~hmjKI{v%B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hwolf';

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
