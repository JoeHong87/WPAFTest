<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Joe1');

/** MySQL database username */
define('DB_USER', 'JoeHong');

/** MySQL database password */
define('DB_PASSWORD', 'Eunhai2000');

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
define('AUTH_KEY',         '4>at.2 A|~z^x!85F)R>M$k-: &j3-t5u@;s:ZB2]|-d/|hruf6/i$:5rFD9^|</');
define('SECURE_AUTH_KEY',  'a;3x>^_juH)wj*SgO3oaw(A!6om.NhsJ/`#=!bs$5QuGt,mn%SS]>gL<RH>lb))|');
define('LOGGED_IN_KEY',    '`7uRst<HK+~Fp}H}<rHy#9-<956@@%B(?+4_B @&+vR/_qC4Fsp6u<>;y qxDkc2');
define('NONCE_KEY',        'X9j%0jm&OE-G!.1f+}CwPVn^P98Rmz^9D.Hj{2oJq[(_XwmHRWg&e*C_.ewVJF 3');
define('AUTH_SALT',        ' `P|5W!kxX}x5I)jtYO !U|.Wkw~ @ex}-bE>WrpND4a8h9$.gB,fv;Y.b4kP8(d');
define('SECURE_AUTH_SALT', 'DSP7C}WA`5=9W&nO^z9$;BohoBcdUz?#8Oz3f0cT<qbaO2jq-s]^~:=`nk}k#x<N');
define('LOGGED_IN_SALT',   '6zK/bu?dXBeHO!uCt:>{;k^>T*U|E^%%B]lqhDkfg%NZ}|=ey=#-9R.(OoQ9BFVZ');
define('NONCE_SALT',       '{o(|Trl7/K A2pJNG}O^Cqsp.Zd;5B3$:Av3R(Go{-_V[6-u>3q=aU_ kz=EQ=6e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
