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
define('DB_NAME', 'tuanpham');

/** MySQL database username */
define('DB_USER', 'tuanpham');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V%C3O5T!76MU^jI1J~,|a-AozQ)]bhG51PLP(Ls)KB9QUwE/]E#<_6xx,KP;/5O|');
define('SECURE_AUTH_KEY',  'KNc)= J{QL~W_gw;^)s-7W;II?X0kDaW7&~YQ@)F92cT38;A[Y:bUgtx+JAfEZRI');
define('LOGGED_IN_KEY',    '{&2O~ hOm*j1s?.0[sO)U))[Sd#Ho!ix*N+ wC^q[R(mF&iFLsTHy-_!nBHSQpGd');
define('NONCE_KEY',        'tBEZ^0,r}nTOYOrYsh_k)IgEv$s:[ffk-,6B7P|8T[j+wPx*|Kxqg?IQ1kCwoqWf');
define('AUTH_SALT',        'hLDIdcKYo=h*={+w<AR#$Y!#M(S|quS;Z^g;7F_}~Ig~QprRK#ZlYVLL5QY^rLll');
define('SECURE_AUTH_SALT', '2eT2$g]B@%!:oNQjzMC6by{nd@-`~B9Nn{V!eTa~$yI_EK4xK?i*aEkw^P}{.8@<');
define('LOGGED_IN_SALT',   '[;I5JpZG)3J|| S,sy!ETY2[P7[+zsP``/PS?LXmg}^Yx]Tq~aM-e}L6F2J>LO[2');
define('NONCE_SALT',       'IY%{U*0M4xRBJBGo;]!6Lm{6U9GmWglInZkjVm%r#)b@=U;K^MXwUY0G:GYdWxvQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
