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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_themebuilder' );

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
define( 'AUTH_KEY',         'CF!VvkDy]To?#s1KY|u~>dE.K53}ZHI]5k-NNJX@U!M,O_O1YJ=o=#ULC?#QyfG.' );
define( 'SECURE_AUTH_KEY',  '^UUMge$604dVn8l/Gai]!/:L>FVuCS!=D~9l_1B#qm>`G%i~+QqtQ.pmv<K8l@ai' );
define( 'LOGGED_IN_KEY',    'Xl33Uoee(N;o_WS7_XH3,x_3-&Jab#E=l%dS}Z]8:%60kdPetsaVK@ qCyMc~,e3' );
define( 'NONCE_KEY',        'V]Fk@*Pv01_GQh*:72GhMvax^wioBCBv!g74R.O,gylwGq_zR];q,{3W{f_X(n;&' );
define( 'AUTH_SALT',        'y&wZLo*HnHJZf.jxx*-#Ut|VV^y3W/xPrE?@y((hC_HQ:h>4s+BG8,]nND%oDQp(' );
define( 'SECURE_AUTH_SALT', 'Q(ETlGhDvOA7U&VHdAuqucf4C,H*(uEbCqYulT!%6G~|ORP31JU^?YU+?k24)ECK' );
define( 'LOGGED_IN_SALT',   'gAS!hYeL9^Y2-(jZr~GcvgDc>4s},=[W&ip-!aio1)OVQ2~m*bmYzt{QK9BMu>2*' );
define( 'NONCE_SALT',       'Fiz4kQW_PvgG*m:&=*?~R<DKp!LYnj>/BZiqO:a9OOom1u.;nm9L[=bMJD[: ,9|' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
