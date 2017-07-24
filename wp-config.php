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
define('DB_NAME', 'calais');

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
define('AUTH_KEY',         'JIB<pg4%J:W@[sb1Stv8%5_usIL8]~IU/3~KksUc%MM|//#IRId@1Axw!#{TsCP]');
define('SECURE_AUTH_KEY',  '{+l,=05>3g&YgiEU]M?<A_o=}m}#a]m#d%h/E,:v[ps}=o=TMgT.|;_p6)U_aTt!');
define('LOGGED_IN_KEY',    'j4?`,BVVaUs~Qb0<jFIry9Oi&70R:wMh&_PooAc!9o/jjDA2W7[~k`3P1 [?8 4Z');
define('NONCE_KEY',        'w{O?s%^E^+8KBcx<0OgCqR[^Vvp$(s1J/`E!{q_dwuz6^U-lj*N F%UC2+I.E9,.');
define('AUTH_SALT',        'X?HfXt;pwZ[,Wge0#xyOikDkRSCq?aIWi3|<}8[%~~#]5#~MLy/F8iq7T.lo;1L1');
define('SECURE_AUTH_SALT', 'T&D8aM#my5yu*/w.(jQhOElqQ;L:lIV]s Q-$iKs,W&4U1CLN6,n3MS;hJ1+jr/y');
define('LOGGED_IN_SALT',   '0$hwaOPH-bPmH/#suhME2*a88?Nqqn2uC3X,a9bYR#[:yIr!xSqug<Cp44L3rgs.');
define('NONCE_SALT',       '.Nt]qVwL$k^8ci;ITf{NiJ+|nd.!?y}R/VZm(LjBSQTs29j8^7nyh,FMs_Iqb]C{');

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
