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
define( 'DB_NAME', 'e-commerce-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ddKbR1KWUtvP.{&QOSK :5pekO1fU;RYkf=s9FCh~RyVhgD!o:dMHqxKb,77,m7>' );
define( 'SECURE_AUTH_KEY',  '=O,s).{J|{bl.?z&~k~@iB1;/,Oz9Vv;fe_f*pnj3:jX,CLf!WGk}5SJ`?WMbb]L' );
define( 'LOGGED_IN_KEY',    'q|m&%+&_1q9keKk^=s%P#UK&8$ voE7?v-T#iroXSySX8TIAo1;)uN<QG]b71vBI' );
define( 'NONCE_KEY',        ')0s[y?A8v,H@`xQ14-7pic6b|0/;Is[l9mkJ,>b9)9{.$yTVf`49F~rabnsLVCL!' );
define( 'AUTH_SALT',        'U;J$b.wCSly} m3q7=mB!Hjde3W{aEX7dr<yp^08*]867hi6FvCrsxB{W]aEQ~AG' );
define( 'SECURE_AUTH_SALT', '?}|x+Ehw(DT1IiA_z-+0[Q%b0Hj9;3rXB!$v3:kt97G |a#E_0ze0xUL,<wUI(4?' );
define( 'LOGGED_IN_SALT',   'jrA#`&V$flpyFR5d-T Z(o$K@~),8j,my3+*:brL|60YfOfKr$E*&~H40}a8q_ir' );
define( 'NONCE_SALT',       'U<8Lp{}x=1Ve>Xn!t[FDSLY|)c>0`r!OHEj:[?ORw&uX=:rIci*KJ:E1(naS,s6,' );

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
