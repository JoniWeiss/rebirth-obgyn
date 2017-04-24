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
define('DB_NAME', 'rebirthobgyn');

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
define('AUTH_KEY',         '-zGHps4lCw{ rJW&2]4.8 3A6=]Db L[z5Zg 3o]m$iJPA$=4~e:p*}ltxzeaqrN');
define('SECURE_AUTH_KEY',  'q1Fg5f;M:`]H;h90G4%RGG*HDWuIY~~-_Iij9}$cY( 4$]-ma1]UQrJN04#yO q&');
define('LOGGED_IN_KEY',    '1g-TWrTik&rTQq^F_V#wy^=ba%C+h@88<RDY[])}er8W/JXcz2|:?TSqTi@LR2aE');
define('NONCE_KEY',        'g$f_YR<r<e<e<c=!Q(Na,!]n*hV[_sb]q ?2+ ^w#m7nDrniy~feD?oe%vCbY?iq');
define('AUTH_SALT',        'P)hH;qil$zoYv0B*b`:Hw.]ah]8Nw*A 9lj6(i_27ZI*6`*H[(UG%YJ^tGU3j/`V');
define('SECURE_AUTH_SALT', 'k_%`Kzz}L{}io<Rc?u8u~#qj,Na_?(N(T`ia)W^>CC`-{`=!Y0}&9TA/j$:hY-vL');
define('LOGGED_IN_SALT',   'lbFQ{LpG!]dp)MmaYb3rw4*M,|QTvoR^b[CI@8B.R6#aYcMZ*-lJ1oe`FqS%`/5c');
define('NONCE_SALT',       '<83<|_z(S]pL[.1|;FtFdZed963DuPii._po%7ei~q;uYLsGvvb7h@U?d43:GU1=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wx_';

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
