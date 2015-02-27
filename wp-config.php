<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'capitolpest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=5RM^w8}/:]IM<IXekv:qWc4vgIBwgQ8(-@)|&R#S=LE+DrgWJ.9y6Gn|Q{+0sZ6');
define('SECURE_AUTH_KEY',  '9.N7-UZq:8AiL*t9+%Cv vjl[}7J&.ovM@7[$|o,FysR};5)e|gyx$:Pm+vM;=y_');
define('LOGGED_IN_KEY',    '!$3Geu,P2yg1[-K&|#kT/,_{xy-A[)&Rc$+z7lDX*hlS;@t;apEUq}(${w!%5^dJ');
define('NONCE_KEY',        'NstmZ)wwXdZrP^l*VefKS|:p|d@iGm6nW]P%t+Txu3q#34Z5x(%}mERuQ(#>l|OW');
define('AUTH_SALT',        ':me3bhb;-;cY>?D5@A_fI1EOj;0;y~mnrU,r( @NC0 ^3-hG_(vSOK-J`VB.HkR(');
define('SECURE_AUTH_SALT', 'i<s,p>RRqwe^6SY^}$k|C!V+jF.wZ.s)@6fB}Ft=I4-<n0|~!w3n5)hC d5`b58I');
define('LOGGED_IN_SALT',   '/|MVZHUc}NE|*&aCf+tFmA2T)HuMyS&fF-_86jWq01J@@B~^nL+iv|&:=R[|>[s[');
define('NONCE_SALT',       'T^^&#cy#vt;yJ`Jr{V2({p+N(4NH/|~3xsg^xNf)TQ#?LQ1dY5<#KOs@,Rt:s;TC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
