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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '7?nHNED7S5w+~?X3Z`/08)MGp&_dH,NQ[~l3]Qi>EU4]`ol|?rs.yA@R)&0R};D*' );
define( 'SECURE_AUTH_KEY',  'ha9E@{Vyj/*1m1{oSY<9jQWo)He :<*q>j_2FJ@M,hLa@WPUv;H2z*ND/D;+o!eF' );
define( 'LOGGED_IN_KEY',    'S?7;]UEx<#eIV:^`zwo0GHIYO7G)2kara7xJjGv)J-lhrO,bi)M:^WAqS{H(=`0_' );
define( 'NONCE_KEY',        'fG^7olW@IK-VJkS>e?(Cu+TYixNJcT[W#|fI]*`M 4X,1qR6X@U?89P]@u/DDZ8]' );
define( 'AUTH_SALT',        'zGYK80L~aiD#NWxT.X/j@>I:QSUi+_psB}3/DK67)FR1G<~ayaITMLvo[Co~oUPe' );
define( 'SECURE_AUTH_SALT', 'B|FllZna .rs+`_G&Z)~Ms31S=6eI1fZ~GLaoGzvkt>4rrqr.VOy0k`U<4W!<BpU' );
define( 'LOGGED_IN_SALT',   'UJ&yMUR.[a>tpa2F++U0w?J8{yue{yAi4XRS6?#R(~tXc8Hc f/xxK0p`J|+cQ+2' );
define( 'NONCE_SALT',       'PI[7h_YN6H#WFjmi8A_Dr9rU 3_^/F7Au:dZ|yJH+8b4M<y4Rt7n4SJrQ}t/b~Rb' );

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
