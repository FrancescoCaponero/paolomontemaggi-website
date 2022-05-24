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
define( 'DB_NAME', 'paolomontemaggi-website' );

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
define( 'AUTH_KEY',         '+R1;YIe3zK94MXp/dw&N7f~`ZCk0c.cdp0_*!GTsd;Af y.;8J-dZ*0Up,x> g67' );
define( 'SECURE_AUTH_KEY',  '41fjgiJ/5|bmb!ogIYQVf;QReI]G$:OF$q87_SbHJ:kvIwHSLFZ|y@:6Q}Tx!RDg' );
define( 'LOGGED_IN_KEY',    'rUcH+46C.fL=]QT1_8}Yw87Xx(M.)y,Ing50-2W )wcj<JC9rE[S! d/`aPza[-S' );
define( 'NONCE_KEY',        ' 32~)d/bHo2(kXzW%wy?iR:-njyz)=g2Khs[ue,M~jE0`R _/a[,M5f@FsmIB^>c' );
define( 'AUTH_SALT',        'mq4esl;&D y1knP*>_UbHr<=N8w=NA-lTS$&:0]Fyo0r1F<n^vu/!JZErNY[hN1l' );
define( 'SECURE_AUTH_SALT', 'tktYDS/M#oY&ns{^Z;mhsV:LPFg<]@tK)iqT1E%$i~L=+K/g*,ayo<]Zi4|,rd_K' );
define( 'LOGGED_IN_SALT',   'PB+S*n[CLao[Jv)JHTkUq+9asr2u&DB$BRy3DysosX-fp;2|jk6Ihb]{@e%@R8Z@' );
define( 'NONCE_SALT',       '*-+:lxOQdxe:Nh)jgJ,Sk:&TQAmpq5`X LNSN1y$`uQP269JFXb{-<[e?_<J%v!%' );

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
