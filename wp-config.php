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
define('AUTH_KEY',         'Lvu6`[U1@FS`rX$>-o2f=c(/NX-V7#(IePq{~.0SvDDxuD|*h6}AmaY20:6lf^>_');
define('SECURE_AUTH_KEY',  'OFFM65$M6x[X*NmQ]sSrO&!1-x<ZhzKup~FLf8!JD.OY+mHCPd`E+}KmB~a}{D<9');
define('LOGGED_IN_KEY',    'ss,WQ;7(;~ri!79~P76.vZzHu~m U9W}f@GpA>yPY=*SF/O-TI e@]D$Pu_@])WM');
define('NONCE_KEY',        'rxn;e=(hRQ{aL&h#1ZKB<Au,4S.u[@Pkql|./l](2eO8%SWA]?FZi3Dq4DMp$O5z');
define('AUTH_SALT',        'v6>7]h<+(s0M=H-K-Ox.GIl8P0t4<f-{MC?*GGSBR8Dn,W_jG-+?.=tbt+$WVjYh');
define('SECURE_AUTH_SALT', '~l0Is~JBh>t#NjIFHZ?-@UCs=!Y aY,F:>< tc e`jT-F-7QJ$6&-^=S))x.2+wY');
define('LOGGED_IN_SALT',   'cDFb|qj_0Ap,gMavvp<9rXp q#j37ugndeZSX-GkR]i?MW>L+1I:*Dn7;(Au2m>M');
define('NONCE_SALT',       'ePuFzfpEJs{d&HwQ2NZ2&N10KR!{uzQK1kcKW9(tNQ ~tEV;MKsj23>4~@5$0Kw~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nrk';

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
