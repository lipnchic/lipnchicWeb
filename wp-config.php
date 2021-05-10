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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lipnchic' );

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
define( 'AUTH_KEY',         'a+3k(KusVjJVeYiUy/~)-qJn9%Tp*Cv0),_W:H{sDR&mE&(:Hi.FD=?1sVp #Lq(' );
define( 'SECURE_AUTH_KEY',  'C^K9AK2g4M;h0;6;9r0<pAWHp 74Yf4HR?alSe5&&BA{|4(F4u+~.fHVm![.G,2T' );
define( 'LOGGED_IN_KEY',    '0CovpED(j+{opCEFy{Sk^!bh(}x7:_ehuCj? :WucMaNTSOj#/:Y _5?BE`+5Lmq' );
define( 'NONCE_KEY',        '~VuK&FtpWIbWdL{~0C[$^eE&0-&Lus>,L(3_q.E_52tCmm91j$|/],HMsEj!/!5@' );
define( 'AUTH_SALT',        'oar>v162rx+T!<DI1CuIZ:M3NzQ;^aH>}Vvr,e/~3;,n|FJJC{*l$_`?|}^~x>)U' );
define( 'SECURE_AUTH_SALT', '$KU{g^I&/.SP&:<HSO?sDl)E}AYM&bexohh?:rqQ]!&K- jVMQ{ASoiMGY<{]f&s' );
define( 'LOGGED_IN_SALT',   ']1hbx,9N%sqU|aE8RO2BFCQR1^ig :wti$u?1(GPI:W@!c(>VzfQtV!;z900S`N]' );
define( 'NONCE_SALT',       'wLN>aiC(WkduyF%5U&}YE _};/f`cIedLDv!d|2TFciW~FtkDf[bJW,04=@1Q)kw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lnc_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
