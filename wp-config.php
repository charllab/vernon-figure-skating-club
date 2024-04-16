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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_d#IK_.>|EJjMG]XgZ|jTzzqc4]:oI_p]K|bHXOG>s5+Bx4/Ru{v2}<s+T+PlJ~D');
define('SECURE_AUTH_KEY',  'hz&j|FU|,<``|I6CMFQ?e`9eDlK9mdDu9x2*DgD:UPJ.lPjY<(iPzB$Q%73)q:2a');
define('LOGGED_IN_KEY',    '-7nmBAGokXF5@m#KI$h<YMp`4MY1u%bLLa1ut~ 9<4y|[D_qA1u>YhQSWE4_BvCu');
define('NONCE_KEY',        '_u:E+%=vuLzDB@&.Kd}?P93d:4S Y7<X:cM&JX-lVU?e&>HO%|09]w#GqmL5pkxI');
define('AUTH_SALT',        '0E5SiJZSKf`L NKP-!fXvT-(Vq7r[w^hacy+6%D+)Bh:xp-u;K^ y:T]%(~K;8zb');
define('SECURE_AUTH_SALT', 'j$YH&(c~-O6+FR`[#N/fTdsaFPM?.-V>>2U16._N:@2YVh~deePl^^v@ZxGE68{}');
define('LOGGED_IN_SALT',   '$|]T+73tF[j#xE+OSQ9b4FW]I8Kj=u0t4y$Xdt5+5Nj[6IfZV.nkXZ-]G#iP-t|N');
define('NONCE_SALT',       'c,r%,w%fO/6XHd!)3/HOp@S3Ff>8d1Qh%RI9]ym|II>3QUpG 3/I pF0;g>A~ .s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
