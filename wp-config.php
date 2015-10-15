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
define('DB_NAME', 'db_omori');

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
define('AUTH_KEY',         'a4L`j 8>x-k|~nc/j&Qf:zv0/T-=8e9#~&5zszI@xp26sQr%&2Wsj|xuQEv+?{bo');
define('SECURE_AUTH_KEY',  'H%6H{.*G0S!3x6&A @~Cde0_9!9?$?fr?G?^0] 5fNNcd4wcL8|#Jm?mzG%)HZLF');
define('LOGGED_IN_KEY',    'k)P]oPz^{ :eC*K!fsk0[+*2`3O`|1KGo/+)3Sh7T_K9(![q{,>+z|+c40#?R}.E');
define('NONCE_KEY',        'y:<Z-njS$RDVm0||HE]wa, U=,(O;Kfe+c9BZSO8*k[j6)1Dhe-PvaG ;+;$YKWZ');
define('AUTH_SALT',        'z?ExaA+!|loq)Z^=Eczr[LX+F#{Q.SteU=,<nlzhL..Si|*AINm@#wPa}},d!P=+');
define('SECURE_AUTH_SALT', 'iej(&||(|M[kj+/:s=d:|dT y26[,2Gx5S/jbkIN2)Q7*qbX4]-&A.^^mgkKD*}p');
define('LOGGED_IN_SALT',   'CE]-5YAo#7`D /?2bGPo|}68TMX81qHrDs||59j}+qt<Q0J1!( *GiQebv@z[_r#');
define('NONCE_SALT',       '-@(lx|4E}&JHi`ICIughB*-v~7Hd*LhE_gxxor`t$DKjNhUZ9yabzY-AgT,S#@r!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'omori_';

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
