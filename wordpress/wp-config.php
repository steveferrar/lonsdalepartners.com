<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_lonsdalepartners');

/** MySQL database username */
define('DB_USER', 'lcp_adminuser');

/** MySQL database password */
define('DB_PASSWORD', 'Tn#&YXjBds!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|.Hf-HpkE+Pr0g:`_lvyWIc`tgJQ;%ZnL0G-|lk{1nc+OqNN5*_I3`^vFrT$@<:c');
define('SECURE_AUTH_KEY',  'tVKe}:a1qVHpLU;@tv)V<WV=_<(~@yi+c5!rk8dk%1EEqRmuQJ3eD|qh[ih+IGS-');
define('LOGGED_IN_KEY',    'tJ|HMxnTs@kGQ|^2v3K,YSYp0[nn9+Z8i7TMliNZinb^rN_g(|tcWjJB;@F>_jL@');
define('NONCE_KEY',        ';<>wr&e}<|*(%D{?z|@o*G<{>j-;yiI?pga< _)hN`f)R06**+,H~7@q-KJJWL+O');
define('AUTH_SALT',        '0D.?jZ ArouXxC~y-`|O(F1nOq]+Jv{&s4doCnR@s!^.o>FM+K5<;r:txM|eAG{g');
define('SECURE_AUTH_SALT', '*9y?~>Gv *<[~7,=EGrT8pQu+ ~!`.:={_7[1%T==S<t*-:[/eR[)?z%N}T-9r;H');
define('LOGGED_IN_SALT',   'CK08-|i6Z`5$w9l>v!+Hf{I#Noc*_HbJ# q>%KH{HMy|f(&x_),`{2>N_mQ n_(b');
define('NONCE_SALT',       'CZ 72=QSE}VpzM`|NluyIy[(W;QpHCK4J:Tzj^i>rE$EEZRE#Bsq+@v1J_+`%:Nl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_lonsdalepartners_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
