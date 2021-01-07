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
define( 'DB_NAME', 'sarcdb' );

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
define( 'AUTH_KEY',         '(keG/9+|aDX>1<G%HY-$zzfgQ_PFiGKhgl1+>P53S^+&}b%;EJU.0tX78MMJ^tmS' );
define( 'SECURE_AUTH_KEY',  'RW28:D*`fQLQ~FM1LA+p<dgmOcQXiQpDg(1-TQq:;T@HRk.)T7;}>9CjyJQ>$#Js' );
define( 'LOGGED_IN_KEY',    '}0/G9bi-*>l>p_)H:%z.A,8<K?LVV]y?8h.-=DWL}n3DT80Jj[)|c6-]7A%d<#nm' );
define( 'NONCE_KEY',        'h?>Ja+{:_)DqW`8nmDx,I=05qe2M?q)-POv$OV$U!K)rDuzXTFt^`,#%bz3lAXoF' );
define( 'AUTH_SALT',        '7K`L=/s{!Qr?(O7t}SNA;$K4pF:#QM!P)2H83*Q|Rzp>>|vu,~Wg$vO<90xGb`tA' );
define( 'SECURE_AUTH_SALT', 'T6T)0u>u)Y-Lw[Yzo${0pH;L46pK8HtiC&:lvJ;!SF>q[?34?Tvwv:E?.q`uQp=U' );
define( 'LOGGED_IN_SALT',   '*]A@PW<1Zr]au95^dMUN/~?Qhr}*0+i/t^5D)VuqKZLGxVa!fk|DR[}Bg?L^+B,(' );
define( 'NONCE_SALT',       'PV2KDq[xJ_~GyPd+~-[p<wXY EZ~%tE9Es6*e?eA(%XiQUKD4]tal8;:Wih)GO-;' );

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
