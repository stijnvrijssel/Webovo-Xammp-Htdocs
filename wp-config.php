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
define('DB_NAME', 'Webovo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@vXN^HZ1y9ejCZ0XlWQ)dVbr7%GudB9d]V*`R~VR`xsMZ5I$G@yO-E.BAQ.v!;R5');
define('SECURE_AUTH_KEY',  '+79x]wrza9tq_*-bKW07We]ieA/~!n_Y~N6Cm!#;4pi.l,w-o|G/4dL*1%=-=xB:');
define('LOGGED_IN_KEY',    'M8l?N516#X{XKY!~_4|a|cOX`y;XBlTWYT~$Rq1ro~J,W*-eN(Ygv%u>u(C8R9KG');
define('NONCE_KEY',        '}*(=xw5J`ln2*1o/rPu-.Cx.N7A|o@nG~A3},^rw~S^IlGaUmftHPl}ykeT|T.jz');
define('AUTH_SALT',        'mAZz*K+pfI(m?E*B#$tm68${lM5vA|^K9*,4Q%l IvF/srCW{~;qy(-Jr`qI]Urv');
define('SECURE_AUTH_SALT', '~<mn/8)`M#][Z<mTY.jK~H@`x5!WY#uQ<nm&$Jh;0(wF+{^iPG_,(rQ#=F&zo;l~');
define('LOGGED_IN_SALT',   'r]Y;~i;slN$W1Wi,)e>gQ;urnhmr+@WyBu<~i%KgiY2l(-~e}pqgr &JDH^w/J=;');
define('NONCE_SALT',       'O(~ZTaKkc.&DgFW.sT$;Sn6BK;%,{jr8tZ=?CA?Cs0cD4tkwkkIcrMzM/(2Z~<D%');

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
