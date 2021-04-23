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
define( 'DB_NAME', 'fds-wp' );

/** MySQL database username */
define( 'DB_USER', 'fdswpusr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FdsWp2275!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8k/HGsj3)*~;gZMz:3q4Ft3GGB1ExFsl|[DElRrjCp^-}ki8m[_NWamac`$=*|pz');
define('SECURE_AUTH_KEY',  'H@}jn0I}Wz=rM|2m-%d14_0X8uukleAPC%{DM9UYV0h//P8h;c_t.,IL+QSAku{m');
define('LOGGED_IN_KEY',    '[.CKnsWrS@^k<2O0(Sq.#|Mnn|Pk(@+4<]620Wd|&mw&%,1XevVlBoZ$40B&3ML.');
define('NONCE_KEY',        '8m7Ei7aT]L-xT_MIcKM0{ ,Ccd=g_Ob[mKwqS6#%+#An1BS/bM)[/%82w[&qm-4@');
define('AUTH_SALT',        'A^,t)%ID=T{J%_f@n7<<P5V*,;!WfwMU-ryLr|zkK8vFw@w;LIP>0+O{8Wi#_(`n');
define('SECURE_AUTH_SALT', '.c|r@W+n%EAiG$A`q4rT@-K(^k;xStW=.;Jh128v.]gbbv6-=?)+E1:ZTvl#D<bi');
define('LOGGED_IN_SALT',   ';GhFF$J6VnL?FHoAj5hrKO[MIm :[x7%5B:a<*`)NDZxNrY-S53YlY&qa;Lr{%JN');
define('NONCE_SALT',       'K3BJ;5p5VX>9QDL=wQp?Zz$SP`hXPK36}|:-<eQa !C0MLzDNDqhvfk-Kp9hb@8E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hdq_';

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
define( 'WP_DEBUG', false );
define('WP_MEMORY_LIMIT', '768M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
