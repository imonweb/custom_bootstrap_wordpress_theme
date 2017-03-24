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
define('DB_NAME', 'wp_bootstrap');

/** MySQL database username */
define('DB_USER', 'imon');

/** MySQL database password */
define('DB_PASSWORD', 'p@ssw0rd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-AQ)*EsQk$6P=lq/bO2>vrRu<BD%FgSGb#M+n6*gTQ3mz`&9]qZ&T`Nt_o~;TSo!');
define('SECURE_AUTH_KEY',  'za5+h](c.n+yg7Zq10%U#-2w|[@B &-QVm (L{7*t5x-q~A7$-{%cW[Ns>M* 1WR');
define('LOGGED_IN_KEY',    '39O}l1Dq`B&%@;.WabY3:Q+^MYF*2:!)h8!I9nc).%9HLN9Ri{[!n=3[h*HXWkZC');
define('NONCE_KEY',        '!SVAJ|r)C:]6*rH8Xu?ih5_((d/Sh|`CcX+q<DRh>6,(Dl.yI+ErcEgLW*E;Il*u');
define('AUTH_SALT',        'L7|[>Lp*[FE!` @cxyu}2Jlzf[VfHUyqx@JHq73IWL{O,,TcO#BV:]B)l++PN*Z/');
define('SECURE_AUTH_SALT', '4+2AS /=_Q`V{3+4V-.ShGk2bu@@vLbO+2`+X-8E<H&kDev*T,:`^82BlV]j|>]@');
define('LOGGED_IN_SALT',   'm)YtW|j |>7Ro*4r@a=/NAY@G;L-)m-]BSol7K=+.>>#9l/NcSFN9ivakZk_iBMz');
define('NONCE_SALT',       'L6%P7lA-eF(d:54)+KVz)]`B/}BKh2gBhjwT|&k+V9OnwX+XPl^zqb-J]?F/y0(x');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
