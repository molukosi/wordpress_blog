<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdatabase' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

/** Database hostname */
define( 'DB_HOST', 'wordpressdatabase.cmm4z4nkjmwg.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         '$7}+]LWU9-/](,e-]k~*,#CboR<a$|nd;x=g|,>0HJDbEN;e-3mv $~-+DhJYPQk');
define('SECURE_AUTH_KEY',  '.Cny&;qGNZK;A$NKV^b~R*UJ[d==mpH%M  JkhEi[Qkf4$=Z)q*wFcEMmI,S|+!,');
define('LOGGED_IN_KEY',    '#+>[D+n>XaE52Z/AJ2H]Fr(Kn2|HRz6S6Bh.)5^/m6foZK%`fY1M= M3+[L4?3;*');
define('NONCE_KEY',        '+3<66b)I5iC0,t5TjZVuG.|i5faH|,5FRQ%n}U7/zL}Y|RbKl@&w7g@CNL3E!TPO');
define('AUTH_SALT',        '$TU5zV-|C-?W4~|v/_bxjggA|D(LFw/aA ;V?[[+:Y-qaK0.X{+:gXYC?2Nr7H~U');
define('SECURE_AUTH_SALT', '~/Ng)<F`Yg^{3.o$GllnEj}-d+{eiSA@Ofsu3_AQ;Eq<S_O@fBe92h^{IU>snN-L');
define('LOGGED_IN_SALT',   'G!3-otFa=K|]HyRp,tWTd%9;Z,3s6/3rc4yo*k4Ndp5rwrr9-Q|f@&#]L1)Xtp+S');
define('NONCE_SALT',       'A)3[{s$OB|[ Q3:iFK$C`=:iRrMwYJ&kQ(6L.Y4G=Qr47kU[vxmJdHfXc{F]-CFX');



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
