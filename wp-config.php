<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// Эта настройка нужна, чтобы убедиться, что обновлениями WordPress можно корректно управлять в WordPress Toolkit. Удалите эту строку, если этот сайт WordPress больше не управляется WordPress Toolkit.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sendpulseapi' );

/** MySQL database username */
define( 'DB_USER', 'sendpulseapi' );

/** MySQL database password */
define( 'DB_PASSWORD', '7sk4m0MT!R' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/+*D5ih9lC#wMyzKt2b!X2R4bF*i#ntk9Y/2o*_Fff+YqD!)]|-Bl][0k0QM;a3/');
define('SECURE_AUTH_KEY', 'ZOQ7kq(9ec#]r|U@d(l586_HM77J94]Q7F4d+[3hxqC8Ej8]q14zN5Sn6-LhR&NS');
define('LOGGED_IN_KEY', '@6&n8XpMZGy7n6eOrd1m[2eo_)Mn)kJJr~o/6Q42V[F&0/%+!_)Gia*oD~4k02|Y');
define('NONCE_KEY', '3eNu~6p3-#+GYZ!W|!11x;&(H9pea#KCo570:6+4N8~6L:_[Om4%wY0bZ7G|0vR5');
define('AUTH_SALT', '29Z9S#4Q*-5qVS)h&B7HCSbc%591S7)!LKsq8f;;#0l!10RkJ(ebi9m3NEhed(1l');
define('SECURE_AUTH_SALT', 'Kbf3SwZV9nxNC4~85%Sd7~mL9vc1:+QAEO;;3u6lLKlRP6Clc)/d7)*XnQ%D|NLA');
define('LOGGED_IN_SALT', 'VhIF8#7_(JJ/6&/72cd6K&6xP3H5@~2/;:m4S7-;|_3i*0q#W38Sc(9]B~J-!YT)');
define('NONCE_SALT', 'yO3n[xK67Fi9_K5#2SZ//snH]!UlWD_:C1Fhs!Qu80A]H%w%W2%38my+1s(1@tp#');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
