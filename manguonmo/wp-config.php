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
define('DB_NAME', 'manguonmo');

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
define('AUTH_KEY',         '4C/S:Oxb%!r^~<`?$jxy]!9mr7@(!A<<)MUZm[zL?AWn=:,Aa7_>F-mfg1E^4Pz!');
define('SECURE_AUTH_KEY',  '>X78`5vNj,}I8N{5ubvTRF5|~wK6snFOX#2ip,(hhoZ@O]r;&Qf4_aVhUBb4Gi&{');
define('LOGGED_IN_KEY',    'GZ|vNj>o8q*qyiy3b:2NvnP8fC|&kRrnx#H).SoA`Jg9~+_Z7,sS1Qi_,?5p< G3');
define('NONCE_KEY',        'LH-,[1d%m4$+,5R3BdArWs3 F ~ek^`HrRsN:hF:5;HHBm;^u%{s|H0cofb|I$9w');
define('AUTH_SALT',        '[d z9)yR=^]KSOgH!*sS=BNf=fqr_]he<59i^wAD2p;mZw]~%avJ6.TeQJ;>lsjc');
define('SECURE_AUTH_SALT', '^<UvUv*/$:HB:78NaX9 E$* wumhTmuxMDxeV,S5TP/ug0z0c2{`J+Q+JD{*Is`x');
define('LOGGED_IN_SALT',   'SpMf%L@G 1l*RT4fT.7I?p4YvF3mb3KKgB=f0O_nh~r@K3<]K|XZP~:TS8q~Qzr<');
define('NONCE_SALT',       'J=QS3;6okjCc_QtU1fLPUl$]+t@73,nxOVPPPN1,uK8d[=EH4m.rxl3abGgQLP-(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bng';

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
