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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ceco' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '1iS&)7-=gRR4]0oQn:#t_EDFfvu<wvIR+Svdhe&73d(o6TwAlC*+siu]cdKv?hXT' );
define( 'SECURE_AUTH_KEY',  '%K(<UmZ}}*1zyOKyW#4w0MvC409GBXGt5aqEtX=04Eh$qCu$/C&5odQ=+s?O462z' );
define( 'LOGGED_IN_KEY',    'ykl5/Zo{&( YtnIBJNc,F[w^D[iif:N-;VnTGpo@aOKOghE0_ppu{[_7 eUSV-v`' );
define( 'NONCE_KEY',        '#pPVpaJ.xD4v|X+zoPH2O?`& A{e EFP5V&FR7}dRo`U{5N0QS]!34b;#U?iPl :' );
define( 'AUTH_SALT',        'jouc!]]6]nIJu-9(cHJo:3S3EQ:3X[^,`wpN$#Jz<eVs4,,lw%UN/~cpQGXz%:7K' );
define( 'SECURE_AUTH_SALT', ')D35~Y08A6NaKa*2=T0M;.dwKl;VUD#%b)r;!52K3]~/`a861ih@8aW]l3>P9D]4' );
define( 'LOGGED_IN_SALT',   'v}*CCg=tEpgV|T]T~Q`m7Jcq/iRM<=y7Lx*uc[&1RJ2Y2&l 3qWr>!o<a2s8UK 6' );
define( 'NONCE_SALT',       'joFJE==9`#TxvE9a;H;5P7-xis#7Ahan%l ))1[E(sSC=g1d7XqmjC3dnQ+k+hIH' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
