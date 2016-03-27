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
define('DB_NAME', 'display');

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
define('AUTH_KEY',         'W/gZh)_y;a,D5y:~^tBS:}JXU;MBZg{)$T0rE|(!A*5%KxtC=sJvzVw!tJDMm8gP');
define('SECURE_AUTH_KEY',  'O3A{w$z+6))893:f6&D)trjzK<b1)d|C*1-#UK36QA9h&^54KAqJ>nvV.|ryMF7g');
define('LOGGED_IN_KEY',    '3{[d.z+Cf^bI<5/U-T8V;^L?Cala`C8Mltd.vFZ>0h@#%O7Q;+Y{rO8f{Ib6)U-;');
define('NONCE_KEY',        'b)EgdHA9?.wz1CUS/!` 69vBukpBw9p$+le4|A>w3co8gJj%?-uCv6-vm5G43W,B');
define('AUTH_SALT',        '1~$U*(5ly8nk+9X_F.0,B{]E3P|7/S(R%ShL-0y~p{FgJ0Q-YcABTJu#z@C]I5n/');
define('SECURE_AUTH_SALT', 't?~ fHCu M+2DSX-}wW7F|OlWs3fOFA+[:CHs3YO-@h3!SY]xKss!s0g<I2pa#H|');
define('LOGGED_IN_SALT',   'TUvcpf#L dU2h?]aLQ;(.:E{hL?vH,uaDwX@kX:(j3M%M-u~+-.|LX3jE:G<9|Q-');
define('NONCE_SALT',       ':@~r/j@H#{(|kvdY?$/6a[Khw|rB9`&w*P:bdkP%{c2^eqx#7I!IK_zmT{e3FL|a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'display_';

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
