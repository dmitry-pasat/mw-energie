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
define('DB_NAME', 'mwenergie');

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
define('AUTH_KEY',         ')-^+FiE9U|+`X3C,~[UPJ[L+J04 tOR:eqroS@+DMh3(5s[QVxGeHY{-l(dse8*1');
define('SECURE_AUTH_KEY',  '[L9JKHW 6YjB{3NVZm#S`YD61%+Fk76NBd&Xc,O0_xk^10JA@8RxCk1z$CaR09!E');
define('LOGGED_IN_KEY',    '{pL1<`SK9aADQ@SR@:QwRMc;&k`NcHFM*T{,x=rOD8Nr]j*V8{h6X$AfmccW71jU');
define('NONCE_KEY',        '#(M5lIO>|g|~q.IR6CW2x7J&%$ZN^&NP$w*p-#JXY`&,C+<.J62H|Mc[K%~Obno4');
define('AUTH_SALT',        '.uv&Qm;-_Qb[>c;?GC:RJ r5Lx(pkeuFy/8.#_K2jJofnzNj|U//?{rjgsG9T2F$');
define('SECURE_AUTH_SALT', 'XJ2a^-e]#FjZQCOiI/1$[$KOoCUz_Y%N*Ng6=(y=23=]&$7W!8X>f[J?EE[W-S32');
define('LOGGED_IN_SALT',   'e-$rdu5fEL!Q|;)aV}Wj^.J3*B*8t@dZ2` ebHRM6qnXwWYrc143fN<*UL6[08cC');
define('NONCE_SALT',       'd24nN wCq)ysdF]4n2Jo>4=k>++G]0o#/{l35OY;4Xv7k[@!_En*[VrQ%WxOAwTV');

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
