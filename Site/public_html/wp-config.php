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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id7162680_wp_2bc08a59b1f8ede74bc907e2d54eca04' );

/** MySQL database username */
define( 'DB_USER', 'id7162680_wp_2bc08a59b1f8ede74bc907e2d54eca04' );

/** MySQL database password */
define( 'DB_PASSWORD', '2fb4c9cbd1c72f03eb3cc535c704f5354efdbac0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lh0t=FC@fa,37tqA7R`SUN50L(XtHEZ*dUFP;:1}mba@x 1a_^&QeTBD|kJ1+Q?(' );
define( 'SECURE_AUTH_KEY',  'r;{]XHjw7.c!-=J&K!g<#X,(KWQ(ehS8ld;J*58-kUo9Z<>EXhcWclDrH+ZCw{Mm' );
define( 'LOGGED_IN_KEY',    'CtF^:e6>)UbBF>2n)G15#q02FOK4tj?_kZ=l:}WK:q}i~9I/8(MdI7x#1DVP`Z*4' );
define( 'NONCE_KEY',        '{tgK=tajIg7L+PW3`jRuM[bY?1=$w0W!HN~WI}XH`3rn8e*{6w)Jn+gK@tHlWmw?' );
define( 'AUTH_SALT',        '6!&%wnoYG=_w>:+[DN#B.K:*7t?A(/*c!>D;kvT`a<k$o<ywnskV`^L)}O$`25eE' );
define( 'SECURE_AUTH_SALT', '/eS,;+bOA4TZqJMV0<zR3:{{-G&..luI+F4F^6vL7JCYY^6Z+wI!-%MC1Y#Mg8Bk' );
define( 'LOGGED_IN_SALT',   'KX=K0&yT]YGo.T|kl(ch/R8DGV;LMvy3vkw9D1Gp`xf1xh{78_H1.wWwo8>+G%&y' );
define( 'NONCE_SALT',       '[b0?/02M^5+r,(kBw]b:7;~qi0o)=-1pb/4L`WsegToS!$ltr=;y2H+]qUN@bsR~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
