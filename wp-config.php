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
define( 'DB_NAME', 'parksWebsite_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|{O6a*)G$8cC4-qW8}XBql0qSHysxfIW2eaTyM6nXsegnM^.RU3</c%*5zu}-*%O' );
define( 'SECURE_AUTH_KEY',  'B}@qmBL;{`=e0F?7Frt3XvYm`H0A!&Vf#L[ja{CtbM6=-4<QAKEQu7SeeNF @X^>' );
define( 'LOGGED_IN_KEY',    'x0m)2yGS{:0H<&u/e9,a4vmwo/jG*@$5C WbeI(8&0N_,yf,d]S5Wk_ju(AiC?t)' );
define( 'NONCE_KEY',        'LfaZCi<n!qJ|= )(.eQC>b%^w<#x&M5[&<W#Vt,^nN+4/$I3B$]/ z}@H(E|CQP|' );
define( 'AUTH_SALT',        'l1:k93-.J~BJYWOHE9xR}OP~#ZRyYe({()Oh~U$6ts{tzK3xX +&#a>mCJgZ91%Y' );
define( 'SECURE_AUTH_SALT', '<$-jWKDEyL[@FI#rZ0IeQuRI-`gvcn.K(#>rr6K){IpsE`5[#FY2eyGUxn3IhJh3' );
define( 'LOGGED_IN_SALT',   'sOvN9Y;Mh3vq%1okJ4P+YcoWtG,HhIo?PE0GreY+gn,#asv[+DvhRpBFJY889;/:' );
define( 'NONCE_SALT',       '~wNcBQZ~/!>:wEi2axnGNRYV#b>{s-{Cj>R=a~IumI`[Ldzk3rLn{(P1-vMxN~$S' );

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
