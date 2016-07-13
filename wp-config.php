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
define('DB_NAME', 'wp_training');

/** MySQL database username */
define('DB_USER', 'developer');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         '1TywL+&Sqen6IInFYmG A1,i(g~2}uhJq;fqLS| ;~LqkcY=XOjS/c*d :J7C -N');
define('SECURE_AUTH_KEY',  '$;gf:_j)>g.,cgfs=ngo->@x>i@+b6b*jN.k8p`9mEk`U(|hQ nJuFeYqsm_#NEh');
define('LOGGED_IN_KEY',    'XeM)Raj2;|<4#RmF;P+;cDazNC>Wmw6QwV@dCd!n0Jcw2E8DJS2u-gz]WU97HY=,');
define('NONCE_KEY',        'Z~NmwKNoVsdy=*2aL-ZPnp#pueDhJMy5mJ& 4wAH_0`*}aq6g|=`ZBS!?<$^gFNL');
define('AUTH_SALT',        '(`nIx1:|M+IdA8hZ((4]p~4Tui F&X{4#RiH]Q,RTsS7LR>Pp6]cIoyB`noveWc]');
define('SECURE_AUTH_SALT', '+JLKI7;wFb9)G7*,&f)#<!{U$5)g]=74>dNs,*6`hUihc[W~3ait_=%V >*zaQK@');
define('LOGGED_IN_SALT',   'SyJFWsMgj%,y+f}f~5.sw5G4}if/S(y,q3.i-{n>+2yVAJk!f9|V/Be*C(D3cZw%');
define('NONCE_SALT',       'dUdA$A f9rIz9Xdi:b}IH}X$Xv.tR>%dluUJ,UIm:Zmrsl=1!^(v@Tp>C-Pv)d?5');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
