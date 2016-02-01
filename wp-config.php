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
define('DB_NAME', 'fullcircle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'O/p0GorQhnFlvAowW)4~{d7vA~JGQi,~[wtkRdN}<mJ79XU/lF:ROw.7yPINjteh');
define('SECURE_AUTH_KEY',  't}49BXdsng%|Iu9Cy|~iz#a>SN;<=nO,-(~rxJmWJF+=ne_vLxsLniG--7;!hC&H');
define('LOGGED_IN_KEY',    'q4BFY|Iq[g<{M^uhc]qe f`ji||W,<.a%?!Rg.Rri:WOv<br^0rz{<8,K(r;|@OU');
define('NONCE_KEY',        's$p ~a{VzxJaipdK-+^e-)xb)/F|0#</ 1kCydbv${<)WWzGwyHN#]f{U9RL2TVI');
define('AUTH_SALT',        'r*-]^VWm9GV6HT>{-4hyv5xAHx@W*?},: eTdx{crOQ!Wb^G+{-e^|w2h&^!uVi:');
define('SECURE_AUTH_SALT', 'Hz8|}hh$;V,|hn;=+8FRbufkwQVYn36 8@w<#DzbV}bB3u)N:P7M2w0{`29sD;IW');
define('LOGGED_IN_SALT',   '+aW58:n,4YMhcK6>@6b>7V@e_eb|$`([8-dt[<?F[Dn|[iacE[r01b[vvW8J;P,[');
define('NONCE_SALT',       'L^Wcw> Z6GqM1Tk mLi{No==iwRhb/S;q-U0*|HI6-? DE~8ez]JZrsT?<(oihMl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kdt_';

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
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', false);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
