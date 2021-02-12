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
define( 'DB_NAME', 'yummuy' );

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
define( 'AUTH_KEY',         'oJ1r:zRZz=8ibIb4+@,iHf}&:F5Dt~fSH%Gj4)PFv9~Ug!^-86EWG;4yT(dmkv34' );
define( 'SECURE_AUTH_KEY',  ';$lX#VShz3>EoC{)MHZ,N$hJC{[K;c:-GHK<^f+2QB(|A#6F;Pz@gH;nQ8db)UQG' );
define( 'LOGGED_IN_KEY',    'hX.YnvbSgvlM>Dij.w-4z2v~?mN%!>!Mv].X5=UeIh;F|w`EVv5EP9A_k$B{PM{:' );
define( 'NONCE_KEY',        ')?b=V%hCc.L*Er>)]Wg_BXe-fTEMN4gV@LE{^FYcUY P;-iPEuu{o7An(#,55d0Y' );
define( 'AUTH_SALT',        'l)J{SQ-)|%9W;_e9EIr7}N8M!3g;/7FO?`(Jr`W90W$/K:jCDBCL@4V!rv|GHDgP' );
define( 'SECURE_AUTH_SALT', 'u9[3ri*?XlvT^m.jsxsRWQ)G$Yb;Dc|Hc^Xu3llYqP/<ZSWaK9B2]@$T8W$.<S#5' );
define( 'LOGGED_IN_SALT',   'FEc=mj7YDIT 7 wSBc&=)F,Xuq_S^f)_1_wDb-T<K1 K[72#~m[vz2})#Q8I;$d&' );
define( 'NONCE_SALT',       'zEfZpu!EZ~YGWE=N/I3dJIvX4R4naWz7mG1a#*z2IG=Hk{J:WQ&48.-ln$Labj+(' );

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
