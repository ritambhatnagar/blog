<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'ky4+)tKIZH[&,-LQ~i:=kLCOCFy.&adh1|$;`I@42r35K|@[:+XqpTvfIng[m<5]');
define('SECURE_AUTH_KEY',  'lQ/;8d~hssa~SL^/S%0 Vgh^}|g+r74z? ]Zd!11)v^$H+2-fOFZgeA2<&+|UpG+');
define('LOGGED_IN_KEY',    'z?E:--LHrW~Rt/Ms`V1E@w8qe_5v^7$sZ`*ct 5,-aWOmo{RAcrV5bf^<;y^Ui=#');
define('NONCE_KEY',        '5(f9b!RCObwV M=g$UxR.Fya5f{`O|L`d)97u`R.Y+0jTFJhi44^DsLv|,}+;V)3');
define('AUTH_SALT',        'c{&W%*0I|UKl<]2@QVkGT,^mP=XlnK4Eh+(89T BT8&z-@cY9*{6a:Kj jdyuw(G');
define('SECURE_AUTH_SALT', 'k{p7T%~9CMa@+OAjeBVD5{]PZki|F5aqv+nYOG;c-.=+N~Ae-^w`#<Dcmcl+_/QP');
define('LOGGED_IN_SALT',   'pJ^jS]C@&0{dCSF2vWBKEA}d$08jyOuI(v5]NQAJy_aU}a_/u-RmL-ijy3kr<{Q7');
define('NONCE_SALT',       'j(m@+3I<{xb[uv{w|849`Ae=xprH#;sH_g75/uD5|v+9#sI-VGS6Q{4ZfxM/.HEp');

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
