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
define('DB_NAME', 'gaucho_site');

/** MySQL database username */
define('DB_USER', 'gaucho_siteus');

/** MySQL database password */
define('DB_PASSWORD', '<$ucesso$ince84>');

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
define('AUTH_KEY',         'Ca1en85C)[GgSEJBDGf{|cBCRWImPBiJz/(1SX}7,<_MqhQ&LdX*#k%HsRZGPGw@');
define('SECURE_AUTH_KEY',  'E>M&3OC~/t)+]~hfrQn8!kC>8`~4>q519X/&r@Ncpdgx^9gMu$-l:6gaS`tS$1&s');
define('LOGGED_IN_KEY',    'Gs ?/Ai_b$R v+<r8$$I>Q+&7gZWZwq9fl-~xe[fvytY4PKodTx|oTo6VCcn-Jv`');
define('NONCE_KEY',        '}8K#l)2DmS83)u71Wd4F[_i?O48CU@qh*pKMk@oqi..pvX^J<Iz~O7km^&QziK2n');
define('AUTH_SALT',        'b1~HdxG7*+BKgB/%m:r0?fY=-!q=;&J(]>OS/=qyks<8 clH6{ZM;|_4g5c{$bn+');
define('SECURE_AUTH_SALT', 'zTu7?{3rrsDGQ8Cj~BH+--~b.9LBehT9C5U9du|l}|Wnr|QS;46L[fd:XS=JDX|P');
define('LOGGED_IN_SALT',   'ET%9^dW,Oz<#n$5.,$o&ymCz_sF{!EY^j8j,bFOk^8o`t_mccVrXSoeF/k/h3/%F');
define('NONCE_SALT',       'O(Q(|fz#L;jtFi51jFK,BE-@{b!<&)#6#V.5o{Tk*Y>:xw`k|<A:WEg!|6:m{N;o');

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
