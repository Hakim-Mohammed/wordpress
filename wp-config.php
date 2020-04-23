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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Kcr2cej9D0RTN&bU@;G$^%AB_g%ft1N}<+]ij{#QN3)CW,uGnf4T&6&~#YY~_bw5' );
define( 'SECURE_AUTH_KEY',  'v0M|XxMO-,]mAbM)bf`-)UY4yO6sh`7/Q8uhjgw?MJXJEeSRX0Y5goD%fL&EIiqY' );
define( 'LOGGED_IN_KEY',    '~<QufP.A,zwY]v:u?HEsIYmmF#D3s?GmZr<hib~Er/^RAV_y(1h3{ELQ{|SH:.=`' );
define( 'NONCE_KEY',        'x^>KVlHsl4hyu*>i6[L,eeC0K{$1x)R$k 6TISdDD2~7V_lI:LbOR=VI=dV6&z<>' );
define( 'AUTH_SALT',        '?.-XSYj8aViD,9PO}=Rlh@l3s^U7+OqF:`9o! iYr,a;?AU*2qtAR^7eE$k7{XH9' );
define( 'SECURE_AUTH_SALT', 'f| s{83[Q}m[vSLbzi<9s F*~%?8za?*fMYhhI8Q>!$99=o3+to$g8URH[m8Sgh=' );
define( 'LOGGED_IN_SALT',   '3Hvb,N$z3N/dvc:l$$F0=(hEQ13IVu~K~hT)-[N-{Tl]ONj{Q|.i#9J+5gk$231t' );
define( 'NONCE_SALT',       '+Kxc^0p3mwymJXBBf#dT5EjCe,g#70RpM}GF:gIe hks,b|46Wf[CPl!p<s)gt&b' );

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
