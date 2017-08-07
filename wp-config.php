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
//define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager
define('DB_NAME', 'custom-tigress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '& &a~(6K ,;|4!+Uetu*Lj%69y}m-ZQpbzj-*IR|kFd6(.dpcOdTVz|j~lWjZ>jG');
define('SECURE_AUTH_KEY',  'A>7ht,T/nxbQGuJ|R%kKIt8Xb(l_!gro%-aw(.=+|{?q#lP*|YCcZX=92/{| j%p');
define('LOGGED_IN_KEY',    'sqmaFtPXF1i(7:w&Ao<5QI(rzWZ`}Ia<|a-K15*R:]InN:4+F,K0{Sm61u $475O');
define('NONCE_KEY',        'jm>sbI+je&]B`BKW>zme|^{AHOl.1[aW!$MN/~ (`;<Sh-Nd~OMP9eQ q_`.@,b(');
define('AUTH_SALT',        'pUrL$GBij2oCOv3GIuux8GzXtP)AdB9M-Z66HmdcR&C<It<.TGLRG|9,X.-RVTY)');
define('SECURE_AUTH_SALT', 'FQ*_=a.yXpR6KG}oa~io|tJC!:u@s#[+ukZcmZu)0%-Hm$61/QN:W2J^V5bJ.2Nl');
define('LOGGED_IN_SALT',   '>bu4%kIeTEP,+KKUK|{V>KiI8*@z#:u^z2V9z/:t1+dkJAc.F l#kB5s@&zf,NfH');
define('NONCE_SALT',       'tCxfa^6pc5p9M]ib[_aq9>tn-SSugPh[/X?e, [Z zbdzN@+`gt8g}])eyY{C5(|');

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

define('FS_METHOD', 'direct');
