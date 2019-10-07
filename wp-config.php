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
define( 'DB_NAME', 'textwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '^<ei7<N[x*J<*~2O{WZ*a;KjD6?CE(4cFB3[2k|]B7hI2#L8_d5H5c~Wp>V1)PB3' );
define( 'SECURE_AUTH_KEY',  '93kK#X2EFy_uObayn&0_2f|}=Zh( BRYuJg~*rRbvwF.I>C#}B= ?Z _>9Ea#D5>' );
define( 'LOGGED_IN_KEY',    '(]@5g?:?(2}F?]wyg,9!65G=`EUst`mOGBJ@E5A7e&@iUR>^C?v]rdDZ46Ueu#9j' );
define( 'NONCE_KEY',        '$+qZw,ub$X`2UZOt:_@=IWI%*LlG6/hcCXR*~`nEs.K!HEo>-m<nQ0Cx<8+O,]G^' );
define( 'AUTH_SALT',        '~cDw9hi 5,T3SeljhofMU1ob`*e.yVdx>]/D5O!/UC%JHq+d&tfH-s.wyiB1v?4w' );
define( 'SECURE_AUTH_SALT', 'PSPlm75^SGdK?A=rEkm)OIn+E5C2Gj7MzC:~X$/3C!4%:>%CzB+b!8(mpRArMLP^' );
define( 'LOGGED_IN_SALT',   'Qr-&6WCSL{#}Y<gSkg_N$cKD&N:{E/d;Y|M:y`QgR&GZo{yW%^X$$RU^7;fuBLKu' );
define( 'NONCE_SALT',       '+WIt taZrt#z-EzoeXqxXp]RR}sf?8]9P`jxkjV#W$9,%y@~*fFxV;<3.@d2(rR:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
