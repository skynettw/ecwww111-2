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
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'gdGU{q[Z^Znki<LGOFCWt1yj(FVE#EW87M>l}O7c;LkDbUplu}vc.!k?_K3JaQM,' );
define( 'SECURE_AUTH_KEY',  'F0B={[ECy{T2)+OZE1!_?@tB+2 /rzA$q{upq`td~O4ePu;Sz!qhbe59G=*H}Ab_' );
define( 'LOGGED_IN_KEY',    'Nkjr[_TJ|ZRtlT$kC/YY^FwERO?s];&}-ZyM#-7kxYuQKMN`yy_:Ya/|E>d`7Xij' );
define( 'NONCE_KEY',        'Hr4X}#8w4QZ3_,oFl6QH|`5+wQR2DJ;wnFHbNH=%pO(2TCD}Vv>Km6@%EW`OHK+t' );
define( 'AUTH_SALT',        '&HUvB$hU%((ZqJO`hbgSyw|47e:t>C]3ASoJ5yq]<)~ra!it2:HwNIQlW9Ig9j@g' );
define( 'SECURE_AUTH_SALT', 'ZTpPAyMJ)RG`/H6Wte&?Ghz.`D}AZBaiKHa`%0uB{iPDK[j?oYS!#=w/D?%vh#V_' );
define( 'LOGGED_IN_SALT',   'HRHyIYB[h $Dh8aCW:Mvz`)EbFt&sm5TFl=_{1!c:Vum>gXvDoiipVjq_uN>(bK-' );
define( 'NONCE_SALT',       'ZsM> X4aJA/o`#aO:keuQJ<h*Gb1&V/x4a^L;OjNx8]Z/(AC%J[A,J_C|ogmSqS9' );

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
