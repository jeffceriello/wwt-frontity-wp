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
define( 'DB_NAME', 'wwt' );

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
define( 'AUTH_KEY',         'WEr->_Jix(NT`x![9r-+/27vz&n^1-V/Z<,1)=RgFWhr`[nuR:%$i|DV8cn !Y~y' );
define( 'SECURE_AUTH_KEY',  '.pUzovn`oih0,w%:? TD!,hKv(,8+/(:nlm7fM%M-A!WE?5%Q[M$+av#vx]x!QJm' );
define( 'LOGGED_IN_KEY',    ',l)f7~(C`=bTF}#cKNj/_}Kg|d!`$;TL.c9]W;f8+z<<h{Zm# ]4hUJ,xKqdE}!O' );
define( 'NONCE_KEY',        'b0X,^{`6B=RoB{s=Z5IccRM0;L3+ZPvL>f^`s@*R<!kY6|t)q +U8#ZDg/69`SvF' );
define( 'AUTH_SALT',        'jKnJwI{5d:]MA$y.-m9m_+&sOB|D>n]{Yg|HU^AVO!9ywcNx&6vLGtd7/rS<9;w{' );
define( 'SECURE_AUTH_SALT', '!1:%N9Kxy%^lOlJ7!PLxAr/2iG1d(9w5qX$9?T^7tp*yeb/]r:F}%K[^0coq47z&' );
define( 'LOGGED_IN_SALT',   'T23-wwG61jyCp3o9UAo?5c9=H(s*6{FQng&6.)>5|vuf+o[fK$]Lm9k}(tf{=3B8' );
define( 'NONCE_SALT',       '6W9U3KpV#$i&$pC@G<XGv%6y?x1rejJrI.?Y%@^X7Sn~bvPm4QdhILy>+P=Korb^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'edx_';

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
