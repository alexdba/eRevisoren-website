<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_USER', 'xunlight');

/** MySQL database password */
define('DB_PASSWORD', 'benjaMin11111111');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cas2tln5cone.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '0BBX<?-!Zd0`4jDs0--u+SU)lQ6,lG8ff,-/*:hFxF+rtK{<d-1W@L6+_0rQp@LD');
define('SECURE_AUTH_KEY',  '-O[FM+2Ox3tO*_v?^Kub%x.jGTBcZ-kmp3e0F[$8DjCH|B3,SU-4,ZPwP#?5k{LP');
define('LOGGED_IN_KEY',    't!gI%6{;wiNGkm)1IW{m8pM_A|_jp_I&~r9)2>p9L}as8p^c():rgVt%bs(w2`Tg');
define('NONCE_KEY',        'o6;;T(M:=#DS }xUY|5YQj&.q3AP=Un]i|=o3sgu7Oq0>|=@H>/f:@mfq<V@4Rc~');
define('AUTH_SALT',        'aw~4j95a|_a-A4D>9T*}{u9#bp<:e2]mZx0F]fyhr8dIM]/|r8/&-+DcZ5Sol:00');
define('SECURE_AUTH_SALT', '&?xj&_k5JI.?JIK+`qBwrH6:Q&*hZ:9JmSzTls6=}n.dt{qq,4 IEgbo>p/]ShvL');
define('LOGGED_IN_SALT',   '8jCqH2+>|. 9,R||5)gJJ5az54${Yp7.+.;nDrY30h9-w=uH|z?F3IJ`7=&`89TW');
define('NONCE_SALT',       ',RIh-S{Upb Pyxf4oZc4;^YuT[S =+*Yc9#yGIX-c/$H0]GgIX[PZMd{;5n-J7v*');

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
