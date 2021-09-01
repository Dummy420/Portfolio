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
define( 'DB_NAME', 'Portfolio' );

/** MySQL database username */
define( 'DB_USER', 'Portfolio' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yblQsGVDZSuvdWlY' );

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
define( 'AUTH_KEY',         '75?py6%Z4C]yx%4eq(%8kQ1WI $-zZs_,!C*{;j#J9-;%d<lUX*%WmK@+1o$Aq/n' );
define( 'SECURE_AUTH_KEY',  '8GH3TPn<w+p@9Y[HkG5[~ V`/!Ev^vIrQ<J6-Cv3Y~3(B/lGj^LBa7U6znb{Fjb-' );
define( 'LOGGED_IN_KEY',    '}<26+61}#rS=}hJ/sCRVrmz$G2R*,I,i_tP`DHyF$VxhRn/zB!Y.qDeB3^sMHQTb' );
define( 'NONCE_KEY',        'PrlI3vsOe^x y>@{swn18yMw-ax-ZvC%_i#A^&TRSU0sCNq BX|febpo/[H.wePp' );
define( 'AUTH_SALT',        '&v[ttTruH4t4MMP{Xn6evsUaJ4]>q(pK5C>}Uf3X*gS`(.6$SIW`TGP 496)SWyg' );
define( 'SECURE_AUTH_SALT', 'v,Og=i:QT<-{zQd89kT5#Ai{b@l6b+qLL:$0 ;2x|`fD:tQ3B`IRSX}4W*,qK9D4' );
define( 'LOGGED_IN_SALT',   'k@#4B].NBNnBmpkME2C]OjWvY[V$Uk&7k^nFHYI3P%]50rqkr[},O4[8j.=SaYnY' );
define( 'NONCE_SALT',       'A*qt7-=yhJ1X%*ubUvbd`Cob@6gQH2x1]wrySEp$7oP~1iXbo!ICWduVEg^ihK+Q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cppf_';

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
