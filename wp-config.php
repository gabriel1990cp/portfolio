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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'lhfq*^bh^>a-lsdu^!{0FP:y[JT9!dE;jSnqh9Q_vbttWGt6&w/NOXUn.{+#<NS$');
define('SECURE_AUTH_KEY',  'kobH+FhmD6;G9(eja@c_k}]Air[bUSDA*C},)N,EQk#LB^JA?I7w/Cz:{A(OGWH>');
define('LOGGED_IN_KEY',    'vyb/k3Qe-~uvQ~=nhU,:4d8cp3)}vLwKgD*EHFii&7.#HHf5J`dsaU#1RAmNDacY');
define('NONCE_KEY',        's%5w--S!RO<]>zX*i+NU7xKZ$QausHm);%MyOS*R=@,r6g` [d$6-J`KUW$^)^c9');
define('AUTH_SALT',        'JoOp3e/;pSU,k5<.tCoHbut&*yxml_daCoC[.0R9uj.4pXIOi6.B_dB$a zj(UnG');
define('SECURE_AUTH_SALT', 'e9{d-SKHLV3D|,P*7k^T&(pl;LhB0Dx.z538 ~F^lF!DX,qaRtN=6wRm-17#=C&K');
define('LOGGED_IN_SALT',   'l[>bNhhZ^qLU NXu:G^GEV(F@c_CT<X Zb g-93Kd*K$<IQYEO2U03eOL,~UdYVS');
define('NONCE_SALT',       ';]V!1 1N7;xaTQd)d?,~tIa?D2M-t.QcG[`m,HNoPIjwb_D7.4#h{/y]WDMst18K');

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
