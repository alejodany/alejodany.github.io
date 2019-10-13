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
define( 'DB_NAME', 'alejodany.github.io_db' );

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
define( 'AUTH_KEY',         '%p!A%HY$_QAcZ8@~7?K2sa2).iQ+zo &$9(F?p/u|99}i64V[G>F ]Ww qGvuJ2>' );
define( 'SECURE_AUTH_KEY',  'B:0OH@Nl7Q_Pa4TwwZ:zLo-b{f:knt7&kg?K]9E:M&3 `.]Ls-YYDQc8ftSrbjZ~' );
define( 'LOGGED_IN_KEY',    '[GRk>Q4Z>2]{yo|#<CL,eWDIc0ruW~|?:si0HU%SU~.G{3L=D6LW0MIpuG3K&@Vz' );
define( 'NONCE_KEY',        'wPeCS`Ikr=57? EeeX5^j`9r#MP@0gZW~n`4i{sPwW0pA.);!jC)>ayG`NJ q]5&' );
define( 'AUTH_SALT',        'glHfC.,z^E|$M#h5/CO I&/k7{$].Z7MYp+8UT{uf1mzo7:S[78:LWKA/I2_hR>2' );
define( 'SECURE_AUTH_SALT', 'GzE24^USo*)X4_v?/0+uG?CvLCj>%]9%xa+GIr@i6ca7gL|`/7=e1I(Jstxo9r7-' );
define( 'LOGGED_IN_SALT',   'wrv@TlLU*_PmuZfmYdB6I_.5ncI!S:uysyq/dFvL9=AF688_>P~.6hetU<<C0*6J' );
define( 'NONCE_SALT',       'r}1xZ|yiHlc]EjTx`)<DwwWp]ld^6&>Z$!!]w6pP[IrS^@aVQD @UgI&xwH@-{H*' );

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
