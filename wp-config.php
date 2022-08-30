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
define( 'DB_NAME', 'yahyaecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.4.J3{Dj<ya3v!=Bey#@;`A?=}GHLZ:ubTCjm2LExp,CQB%*`#]$+uhz2*&Y%7hG' );
define( 'SECURE_AUTH_KEY',  '6+imU@rkC1AE@qE$9Q/{]#|/M5dr],x6@(_|tp;3PCpj&sosXij p`5=)a5)ni};' );
define( 'LOGGED_IN_KEY',    'CKG<a@5}J6rf3z)eM,}h#/ntw}z>}`TPBpGLTu=1(/K`09|,iTM-1pA,y~k9u9`|' );
define( 'NONCE_KEY',        '$@8!NA@OkU*FeWH~Pe+*G:mEL]J=:Enq,k~q|P2ep</YOclBY0ZBl[t0I0r4?Nrq' );
define( 'AUTH_SALT',        'Jw&(URAtxYB}Zp)@hVn2Gd1ySW<ty1zna~$s`(%_r(Rf,rZ+}8X&e`LL{O4j  dR' );
define( 'SECURE_AUTH_SALT', 'Noe]>Y?(EL*DfJ!Z>|y>cqR9nm!IYj{3=E_LJ=?g8]_?1c:vNU<=T y-#@.k=,Ys' );
define( 'LOGGED_IN_SALT',   'i_(1O|#txmX)?Idl_N2fV&.pjhMF{b+P)7*3e[qa@)~Bj21L&^2*z=W5?9yu#<9M' );
define( 'NONCE_SALT',       'ZcJGzrI|I}D=}!f%gIP/{mY0X,(I9-DrrgcT;GnMk uh1[%m.C_+_bk1p4FtoBb>' );

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
