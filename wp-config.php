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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'netflix' );

/** Database username */
define( 'DB_USER', 'netflix' );

/** Database password */
define( 'DB_PASSWORD', 'netflix' );

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
define( 'AUTH_KEY',         ')Ys=P(WAq3NivRY.MLuTcTAfZTgO!3rJQ[Y%N}zU2^kXPCXa3tp1$a=8FbT1Pq$?' );
define( 'SECURE_AUTH_KEY',  'fb,f*:en#,n|;K-o&>11(re$Z,U{.p6Cke5=WY710&]$H9@:u*X!t91s H xs~y.' );
define( 'LOGGED_IN_KEY',    ':_$bvZ]b?Ap=dHs3$9$B?<kkTv(YI+s;xaDt/`X@jx$c_pqW}*NFa5=0.#K1bORB' );
define( 'NONCE_KEY',        '<VjeIr wQr6UOeNr&c>Tq3Gt),q/offNQ>`s{AI+$a#EQihb+j7MNq~wGvD1:#m2' );
define( 'AUTH_SALT',        'PB:CHzP#+zZ3SZ0RVgFIfi^NJO- Rz,f)Cr2MUoRh]{BI/k,0Sk+8MhnyuU<,fOR' );
define( 'SECURE_AUTH_SALT', '6#S4[{PPt.[|g~Sh54Avx1,r57~|n{Gm3HWg#L#s$ ~CPkwE_R*MGX|@f24Qo7Q*' );
define( 'LOGGED_IN_SALT',   'ZZ~4|L=d~- g[q~re/KYntj#s@XU&9lP&j;isr7uYmGp)+9S613&>iY>y&9-^Kxr' );
define( 'NONCE_SALT',       'llZO5gn2P9`Isg2u+Zv@K9^2#3O<HIQV=n% l/U-+eftRdIitTPWmKOaW_r9N3t ' );

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
