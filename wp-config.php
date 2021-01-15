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
define( 'DB_NAME', 'wpDB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '>^r^+F Rb@.W3GB5e9udC!8!4D!;GfA9Ak*WQ4x:R;i(m:PJEanAm7O`]=O[SoWh' );
define( 'SECURE_AUTH_KEY',  'Qt{nk?!)|0?sgK*Bj@8yj[@ofwP>t$SVLIqx9U!UE`!?69nN?%r9^XrYp)g/z9|Z' );
define( 'LOGGED_IN_KEY',    '>?~3NFyFdz:|B&y1JT%=jFNu[!{2076r09iLB0`w>eB>;Ga)@-98t^S(XI9K_cr.' );
define( 'NONCE_KEY',        '#M])s5j33wYNP$@8p*uw+*m3ezXXh-Pi-ujRgcn!G>z(Vq&u%.uHHlX(=y9|#LS3' );
define( 'AUTH_SALT',        '.=9GW|oTKw$uJ@g/Ds5Q.J+5Jwsz|$:6Oi8Y[=!=6+5:NW6eNXB!ox{&JtH/7G1 ' );
define( 'SECURE_AUTH_SALT', '^^d8nFgW2PP4fr+>[V];({:K0i/y`r.IZ]~-,[:R5U3s>6s_HULuCqaq5SKx=#bv' );
define( 'LOGGED_IN_SALT',   'l$m&L.{^@}z{JF7zV*w_JF[saFg4I$F-Se8Un^_nj|CT(R-6gZE-Q_O`D-:^y820' );
define( 'NONCE_SALT',       'f?sp=yt]|+9i8a,o7j5%gjZs9thwy2/$0J78e-3caja^vl_8E;QId1uxefwhAGkj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
