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
define('DB_NAME', 'webdesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7n&y=IfSF(S+,,[{`g1FbN@WBMGR@@Mz;H|!WqqP}|8AK@-Gdpe*NUv=j0F-#>.0');
define('SECURE_AUTH_KEY',  's0yGmBoNC2TdgqrB] TZIh1kh5;rWG,uyt:8:=BJw=XuMzdNn+tTu=EF)Xo8j D ');
define('LOGGED_IN_KEY',    'XFHM5,G%N1VyC.?Z@Z0yd;?{@V2^I+NN.DRc[v8s]hn5P@R4lKjO:tHEm/@~Jz6l');
define('NONCE_KEY',        'Hr9Oc9E3)]`!bhoEo szGejX7L(JV_~v6I2Jb*aJ8B{cu9A@>oeCI!~wjRr`EEh0');
define('AUTH_SALT',        '[3 8=kd|Lt8g#s5]*Z[&]cHs&%I.6?q-kmpZkgp^2yJM>kJWM `L;|y$8o},,w5k');
define('SECURE_AUTH_SALT', ',k6wTg$mxPAxR!eO7Gc3JPYBuJ4eh}{]D!R%2Z3j*?vGjZ-f3Tm_)q?-B*>i>$=f');
define('LOGGED_IN_SALT',   ';1$`L&c_F@h!h6xzt}Ar*4cPz0vEe;pyc5eF+hHfKmMO<e}#it[t$-6X_d8fu~Q+');
define('NONCE_SALT',       '~!v/D+Yz+g)^rKwIsZwpyx5%p(%f,9dJ,W14N6,o>.+unG[?QgGu23*KI.Lpazan');

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
