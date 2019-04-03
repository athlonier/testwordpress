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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '-7,Ca!jObOm`ZTz%bdg3aY9O3O>{>b4+BR-OZ^e&hyz)(2qkD4`2i|d@SF?}vhsG' );
define( 'SECURE_AUTH_KEY',  '$C)Bow^sE[|T*3}b8l=k*]b1RDuw]0`ClfWa-X#&M5duVyre]s}T5$V]6pw7Dy;I' );
define( 'LOGGED_IN_KEY',    'RaXNTw-41d$&FPLR_[e<s.kXj 3wE2yqt+d8A%[:D}=@1!M;iPGz%I%(elkN?;3R' );
define( 'NONCE_KEY',        '/GGgphCiJ/@*[&)f3$^]wiuOWzaGiC;FAE7#;tzxm%G&7]@npRx{H2wX9sbv9ZUb' );
define( 'AUTH_SALT',        '(i^i3Ve[O1[$WkOwOcZ-R0o=kbbq)w76qyLXPFL|$5&3G9=O9)^1$J^6BV8Bh8A>' );
define( 'SECURE_AUTH_SALT', 'mU`~~Fc1nWTk3kc3%Eal5Yc%YO/ompU+Z .}T=,{L+*r}1_N5~WOzJ9r{:b[w(q%' );
define( 'LOGGED_IN_SALT',   'P1.[O2[{(p!#QLHbg5_!KY?8rpD=y]3 UznU!%+a@Jh}25yNn1F&]<lW0Q)r/67]' );
define( 'NONCE_SALT',       'Gy{&yKw62x=D%X?)e|_CyiAl5mg1|T`-jZ{oC|q.OQ.)xj.l1r]iJ2HI1 d^~GUw' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
