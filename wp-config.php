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
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'Clock124');

/** MySQL hostname */
define('DB_HOST', '198.199.91.236');

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
define('AUTH_KEY',         'Y@[Y^43j%rET`7mE.J<@A.VOXQx~+<LQ0M:_{+|m8v4*$z9*=KC7fb2OOJiGhqdD');
define('SECURE_AUTH_KEY',  'PC-J a0jyd7V `lv1m`BRzZW h+.d?h{D!I}Ps58fffO_.Ogj=Z?RWyu.hjwhSnE');
define('LOGGED_IN_KEY',    'k!Y`3,ONp:rSx!%3d;p1vZMd>NPXCezSwv/c7}3>f*8rb}<XToX&oU+p;&.N]G@U');
define('NONCE_KEY',        'Hm1t:++w7Ou/KdE-56U;U5]V3jht{g@4y9GGx-j#Z%kqt4wYb]wDhqq9m%+Maqa_');
define('AUTH_SALT',        'h4H[6~b`OPc#P1ZTlW:;`#>gx%_]DB_OD2G@i<c1<1)t3y3QM8ZEwO<:62(0c+xC');
define('SECURE_AUTH_SALT', '{22{aDN9a/| _oDS2bZ(U3KL@:B>G5~&/1P0.j0AHk=&c11&pv39#o_,#(<LgX[=');
define('LOGGED_IN_SALT',   '5)0Z)G$NQoGpOACoOP8p!0]p87Mckpi~]E?1U@d,rFd{>!XhUBZW3>0~Mo^{mF-J');
define('NONCE_SALT',       'JtY`]g;uueZ4:$^u9WCXQEaWh8ds Vsvr_+u=zM}%oZ {XaPdCbIup*uXGHMYG c');

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
