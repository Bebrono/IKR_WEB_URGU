<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'kM_Er`p]2Q}8h0YV/Fx1u)L&WF/MVa`FPBlx-1yik9N8x8IP/K?{^j-I*gn4?F~)' );
define( 'SECURE_AUTH_KEY',  'P(9dqlLTht+|ztY]sh_B6 1-b[}Ch~EbyO&B{URN1Dm]V|bf&pfK|v2>U) :B|F^' );
define( 'LOGGED_IN_KEY',    '19z5KW)&&2~2l<qb-{.DU[T9#*u!mCtvhb(G`%(u]%MP95[6B]9SrY653W5^#u3E' );
define( 'NONCE_KEY',        '*08dSoKeGUr6RRaCHcOoMu/~SYVJ[kn]V#l-Qo6HJB{*#Y~F4]yOQFp:JZcs#6*!' );
define( 'AUTH_SALT',        'g12IANiB>:Lu;-IXC2%cd<$i7T]^NwD?#t.5@>t2idt^^1i9!x/ Rixp7N=i,eKx' );
define( 'SECURE_AUTH_SALT', '&t];3TsP)vsHs[#@p(!$hc/$|(fL%&;C.kPqyY} 1,s*wl`+W3ioj.1uK59{n#rk' );
define( 'LOGGED_IN_SALT',   'd.EYTQYNlA[Xq>C[h[KFR(x4i`5k;ISq$1mJ95`j0HcQk/0Yw1sESSb)H3LDak9{' );
define( 'NONCE_SALT',       'c(7/0!NF,R$l|zN|ZUT8 MW-Ys^c;yIaSCc9#)3oxwiDtg~7,DnaRYJ]kUI}du.9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
