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
define( 'DB_NAME', 'dwujezyc_efectivowork' );

/** Database username */
define( 'DB_USER', 'dwujezyc_efectivowork' );

/** Database password */
define( 'DB_PASSWORD', '2GY297maU8' );

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
define( 'AUTH_KEY',         'SBWdN!wL7+@O,2Kv6]oi%?B7CT7oX*E[~5)j|F6KZ3J40MnKJwb:6bCjsE]|O^9>' );
define( 'SECURE_AUTH_KEY',  '%-3#LJblZbk|ygW%>?+tBBNpgNX:v,$qMI.]*jq(2+Uy/zQ-cuYpgZGTJ7qc1{@t' );
define( 'LOGGED_IN_KEY',    'b#=.~?M{Wu/ya%6WO>3I/;/?+FY/y^f5`x6yA31KdYKlG3^ajP20k1W8H.J;z(mz' );
define( 'NONCE_KEY',        'eT)46k:IDIKk~FZZe63@sRy:{ahe(0&+*cwsM:FQeFE3Oig4#P3Uj|)E%fP:XpkC' );
define( 'AUTH_SALT',        'Q:S,E7Z9iu0%Ey5i10u2]K_9`=;B8O(znESM#9,lcPn.UaYpvi>NLh-<$Ky}(~<C' );
define( 'SECURE_AUTH_SALT', 'mnki;zR +PJ)Z`rx%hI*o9XxzoLDW@S4GPP-qk;Nr74se c%1JH/@^!H5/@o0(qH' );
define( 'LOGGED_IN_SALT',   'Ire2YV:R?)94Z6?E6RmQy(BTl%#MFR0=}<}[Oe|$aFQGg${g]CLcSaNiJ`.6?7q9' );
define( 'NONCE_SALT',       '6SoUHC_cFEaFogIsa2rCWQW||fHKPM6rXWFkBdxnjW}?j%caQd)?FZ7&d#_n*%JC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sd3_';

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
