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
define( 'AUTH_KEY',         ',au929Uk>j7{oa%_r@VxD~%;-GZ,U%5^m}Sp16XHFurNYzMn*>TS/z^RrI:%{DVv' );
define( 'SECURE_AUTH_KEY',  'cmS[vTN5OWN^L&_Mjp4=E%f=B!l4PjEuv,H{urx?.R9H4Whv/v4}e[J;Yt:Xp}V>' );
define( 'LOGGED_IN_KEY',    'Xl}Ce`W*Vcf/^8@.g+M[^;VWQmiHVQ;g+z:CY#(B5fHyHD3z>x@9,r}Vqe9P:b`(' );
define( 'NONCE_KEY',        '_u/sZl$Or1-$.2[`(Un(-_FWN=3&_:c^M5pn.w=GS.o)FP[abBc=S?r;,o^-oO=l' );
define( 'AUTH_SALT',        'Ec$FuLn)7RE,FZXt2PypX0GpBbG`wdv%B$-Y:4~>d<ZGrIeNCRsoV`E/C@S;YnjD' );
define( 'SECURE_AUTH_SALT', 's5hp?9]MzzX/C;*G]1I UOr*#oJs@/-0j# ,w]n6g2[9hPejjaK|1hm/gM^k(hk`' );
define( 'LOGGED_IN_SALT',   ';fD&8T*7B}:i8bdZSNb&K$?4p2JM]JX 3~[[O)).o>ZipQasQwN8~)uEsdK9dk)/' );
define( 'NONCE_SALT',       'zO8,#hF;+Vn[r;Q2VC|NItjJ!0D0rGn!9f4*-ah2ZU`/1$LiRqVPgHd/I`-Z_R}1' );

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
