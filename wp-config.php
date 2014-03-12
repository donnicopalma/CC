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
define('DB_NAME', 'CITT_Clab');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'k#yXQy!Sr4~)-AzP~{ADG#gm!cl6.TyOzf<T2zleK$UiQ[d1gZblB`m]p|hg;{V0');
define('SECURE_AUTH_KEY',  'OzKPp39%+9FR<?9f8nz%ExFMaz@<:I&=Va/}%ZO*2_=~~pLa$oghmwfKuZ}o]u**');
define('LOGGED_IN_KEY',    ')!8W]6X/x5b<I]&b}=D[Kq-pn1~PDEqy%i}ep7(7Y(:Dd|=Jz :{Ll DdH+7>rdt');
define('NONCE_KEY',        '2gs9t+$#K$VTKLo#Pf?a/BAw2>5*E`=aE&Ir`v0%w%4,.OVS{tx;3u9j_/SgxsY*');
define('AUTH_SALT',        '}*[8kb!9HXP}!3K!%d2@?Wl8$tj#=ol(Py]2]8q3*EJU:+8oX+/W@ax_3*GW[DyR');
define('SECURE_AUTH_SALT', 'bt-FW@eT;dwEh.^BE!StB^dJv<k2KW=>b)db5t9UeVgO/rTra4CQ?Kw8tt_s5p>Y');
define('LOGGED_IN_SALT',   'RK*!gu~u@RK&c(-C&(,.Xm&-9O{4RcIpLF#nemG;GIoDyNFpGQk-[s}qikE}3jmG');
define('NONCE_SALT',       'e8h)lJ.f}h>ZNzwtReGS2<w89[LqKgmEuQPE Q0O%p_*[ Tmw=kMPy0p.KQaX:`O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
