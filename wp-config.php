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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '+UxMbBFms#?yaZw)nlF>e8_W.i$stD^F27F)-`c#YHw4iDSI_CKlmO(=/HDa;q8G' );
define( 'SECURE_AUTH_KEY',  '3=S+n:s R>VNBfJVSXu?59<IOf^j^%iewn-p24HguJv.;,_Op-?<`PnL^M+KP.0*' );
define( 'LOGGED_IN_KEY',    'zm;|YipVKtuqu.: $@?DKA9B<@2;Nv1DE;padW}S.fj.mKi{GlfN+zM$[7m_y7X*' );
define( 'NONCE_KEY',        '*jWl-;y!=$;T: (o2-dSt8$#n4hf$Z:8F1+|O@=piK[T3yW4ATI>`)$ct3[>h*|Y' );
define( 'AUTH_SALT',        ':;9=$/?|-~yYFUf}]d~j^V{`jnL+tsj;m*FmFAj*<T8CpY~p&)x}xi.O;eb@<%il' );
define( 'SECURE_AUTH_SALT', '5bGcuDCCXNmt;(sFQ[n2O)+oUw:z[jN4D8BY:ky5]/CfY79dVX$s)4AvRj/}h}[}' );
define( 'LOGGED_IN_SALT',   '8a<|8l ?m52iMu:_YGlFiov4 b>$/pUHxcwigFJMUeQqabUtV95x|ky`/BwEc!}|' );
define( 'NONCE_SALT',       '&~DC8xt)sa&[h;rp9>#U>drq<EB.4V!KOnS_k!spR2$~PHDcA$J5t4T[l,+PF{DF' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
