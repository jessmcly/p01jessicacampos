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
define('AUTH_KEY',         '7$9m3UZ_AgI>%}~&nPM5]8?DE!i`XSEu{NYQMMXcB4D!xNB y,<qE*okHM~^jTI;');
define('SECURE_AUTH_KEY',  'l7=C@*bW2Z s J2GI^sxE3j&mE ]:Ao(BC7Lqaz1}:mv`<~36Z*%Gh@QVuead).[');
define('LOGGED_IN_KEY',    '!*L<#:F0s&3.%nFPBCya7e.rmycd`!)DFT)%r<a>~T_K4WAMhe623qZA&KpjL}pr');
define('NONCE_KEY',        ' >jE=cH4J:T~ C5r*#gGHn0hHnczR_tF.o!SU%w-wc3?L)G|}S5K$H)(+ht2Ioak');
define('AUTH_SALT',        'sV-}@!3AHo?X9)2IfU_Z,l/&]ED?2.L:&B?0OiuaBY)ZavR<:}V/lLm`petvt>Ji');
define('SECURE_AUTH_SALT', '&}+{FCuHN9j(mwWlk !4~UDQa=a{J1DJqM^i?-t9%NBG7*M:(7}DZ@a2R/2jI7lz');
define('LOGGED_IN_SALT',   'Fklsqr}:?S{4c1P~)J%971nh6[$ .px4:mi-3&,#46q#`?=0i=r]gAnXSbtZj-g5');
define('NONCE_SALT',       'ytZD$UGR=/hXGmAm^l1;C,<gS-d@0]e(?.ngU9;X]*K3MNycy@.jJ>Wx(mY0_w7]');

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
