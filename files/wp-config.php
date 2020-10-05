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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpress');

/** MySQL database password */
define('DB_PASSWORD', 'Lad1Omri');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('DISABLE_WP_CRON', true);

define('AUTH_KEY',         't~|&pD^|(Jrs5om?Qc/,vK,+$Vof(c`@+0[.R)|UM{ddqsk77_foT]ou3-M>c3K_');
define('SECURE_AUTH_KEY',  '~=Hc|d+;T*Z|1~!c<P0+@ob5R6I/UE#d nX^a!XGqToE6p6_pY]mtH-8HHc3+^|~');
define('LOGGED_IN_KEY',    'FZy3-K;0#uh5E=M4q?;G#I|<J_)}Flj-uj2fg-yU*Ly_#<oh/6=;M6!|;t94aPT?');
define('NONCE_KEY',        '%ZL*W=BmT5I5k{V/qdj=%+mD%;uNCLQS wTv&,i^khboj#1c+{Q|uLIu]Vn^;(!l');
define('AUTH_SALT',        's@5QF<&6Cb+Fi!WQ>eV,l##IxJ~S3lLOd;$hf]|Dx(:VUpMU^~{%U(r4EWHf3&{1');
define('SECURE_AUTH_SALT', '?uvAMUNf<>+N6uVuPs(uoK??-?0u+y_lMKr*2?SjIfn87jq/o4xum#*l VVKaRD7');
define('LOGGED_IN_SALT',   'QP6{:7YF?6}H#7BP5u]N1kW7D2u@LAnr+o|H o=E4w6KtV(K&zt9fPf}L/lOV3}7');
define('NONCE_SALT',       '<@i@I;C>7.*zd6v{5J$h+oHxatS1SFMbGEkLxbvnd@,auh+9uc2r^>yhNwrilI]@');

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
