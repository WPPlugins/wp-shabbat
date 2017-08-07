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
define('DB_NAME', 'work_wp');

/** MySQL database username */
define('DB_USER', 'work_admin');

/** MySQL database password */
define('DB_PASSWORD', 'toNaDQq73iG8tz2');

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
define('AUTH_KEY',         'P.8,=+zIV=E)hlj1$dx3X`d)<QqCl-TmHkFK=K9r*,VmL3}blh29uzq%tLx5kNQ|');
define('SECURE_AUTH_KEY',  '2*sp&l>Ri/D}>AhR4.6+%]NN*kMPLO-wg2! ARgJKI0t.rtGt,N>:]#,F,K>879]');
define('LOGGED_IN_KEY',    'wr<FeRWujtMvRu?&{!4KR4Zci?1CaKKcf-0Z=hvqjZ`H2G<n:*_(]pCw^<S2P-;+');
define('NONCE_KEY',        'I@m4a-&Ry9d^p(BviKgH3EV`q=bzdAF$]!buR&o^..CM|Fsx-0gHui!]X4-64_@X');
define('AUTH_SALT',        'rGfLc=HH;XzT3Rs8hmkM}E?Ku`]fPD[Ml*u=_Lepje=c5vLCoq^`x+fwS7px.SQ|');
define('SECURE_AUTH_SALT', 'T#:XSW.-s;oP7.#WJ!RaKfZm@GQj#Z/=iWY28Kj+|4dKy lUe4-#(qyM-0n(#)N/');
define('LOGGED_IN_SALT',   '8v$(KOIZB/v4o.iq>H^iDa`)4mTYwh+J_/|2}ZNV~Z39_g@J:zjvP9~z|AX!<F3*');
define('NONCE_SALT',       '8R% Ak Ex#k-S4_^HrDMqqtS89GCE}.mX-{qKH}sc?,^2oG>cci,tN,*}M@Fzm`5');

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
