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
define('DB_NAME', 'kaihilo_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'l6`->$%7zy7f_wx/+u^|V|#0,kOh{q2Vgvzv~2/WP:x,_Y0%g~D.5O[@ALbtL!r(');
define('SECURE_AUTH_KEY',  'YS35SPYr2=g@R4[(>).THY({SW&%7ff&v/6/ rE;e*L<VzA>k9ZLUj8hw l5$c|:');
define('LOGGED_IN_KEY',    'TO:r=#}Vt%syxfnJ=3eW37{8.ED_BB<ejlsX]:W1k@5E%V[DOBWNkR/J ]SboE]H');
define('NONCE_KEY',        'rt7dZGr{Ojd-WD9a@tAmhiSLWKI 7Ye5IW32@F&cYxC?cn#:Fhp{fYu%s%e7KoQM');
define('AUTH_SALT',        'FPy^|FwFsLyQ*|/pnfG+8k_0]r04.<+(v86Q6C}cj5+}3)O9YLp9M75P=@VN~N@j');
define('SECURE_AUTH_SALT', '<+,S~ZvJPSv*brjY3Knewo6BQqSs^hwfUmVr:Hv6;3Tgn;J14wPXU VN^s|g/tj&');
define('LOGGED_IN_SALT',   '0G/uV5{!-qEiys8>;4vX-b86OC%_~TDs3-3([ycocx8E@m^XwU_3joZa2&LzPw,>');
define('NONCE_SALT',       '~Ozrn#$2<iT*5d[t7<I5SugE?u9 yj 2Fb[P&RNZLeZ~sG5.AM0SC{403Y}n*+>V');

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
