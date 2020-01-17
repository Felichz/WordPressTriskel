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
define( 'DB_NAME', 'wptriskel' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',          '-tooBdzy,(#DN;R{<Mc@CgS<!VD`P,AMl$zU P54:T5jSm29T*5x`Jt;u9vB<:f8' );
define( 'SECURE_AUTH_KEY',   ']R|YVj76@sGsDEzNc#[C:yN#C]KCxJ]k:l-bd:[;Q(]J!EgQ%CCd JA#qEoa/qgU' );
define( 'LOGGED_IN_KEY',     'zL5xFtd{,A&])#J:t%EGCm7S-|D7$nS)VB)Wc]kO8{&E*2NB@jCCLU~2Lp<#Dq{+' );
define( 'NONCE_KEY',         'PSe{21)}gX(`fnRX6)^O9FkG`^Yd1BC^E.0`x%,K!|he+2]Ljux>Y?:{A|A9N{Fe' );
define( 'AUTH_SALT',         'j~iHE| ;SKJCN{&H)6By}3y-1iH8?7mp(1)(5q#W*ePj<4-?Y @9@_1XYO7_6%74' );
define( 'SECURE_AUTH_SALT',  '67-!0WqcM=$;5{<QTSVa9z?6B9=DH&23X;,<>4[,4@(AH3`ufDruE7%<iWi0~%>3' );
define( 'LOGGED_IN_SALT',    '?#$5M682huH8W 3 lP@KpIrY=y1T=y0`hN[*4CexLsAQY0j#_%/7=q6$s-soTd6@' );
define( 'NONCE_SALT',        '4LKzAQZu-xYxA<eI5F@X3R>(rIXT]|Hm}.<6H3r(U=wzZY*=XtL:FxM(esyi~:t9' );
define( 'WP_CACHE_KEY_SALT', ':#m6@<iGSr7!XK8pa4fZqO+xbD84~S+ns~OwVi&(_fYQAt#$c%4Nkk*55l7m}>2U' );

define( 'WP_MEMORY_LIMIT', '256M' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'triskel_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
