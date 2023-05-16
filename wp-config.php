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
define( 'DB_NAME', 'id20270588_wp_f2c7d50ed02aff33d622dbd32b98bcc0' );

/** MySQL database username */
define( 'DB_USER', 'id20270588_wp_f2c7d50ed02aff33d622dbd32b98bcc0' );

/** MySQL database password */
define( 'DB_PASSWORD', '0f84983da8da30529e1966b995ecc5d385a04aef' );

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
define( 'AUTH_KEY',          'f>Li-lT^`_ycQw94#0LpN%v=sq%;oWrmt@r`nZ*$)ifn/[7k-l%FI$#kl%-&^4>-' );
define( 'SECURE_AUTH_KEY',   '?PU.83:k&}@;]c3?A/f%nMhy<R:d?az!@hO%*~p83q~oo_a=kqKIJa&`s!<yO6fA' );
define( 'LOGGED_IN_KEY',     'l:NEP#2<ijN0SN/5X+>,1whE;b_0Xt5vItV~o^Zg$s/RZ=p+rbkhYt8b)&CXu7>A' );
define( 'NONCE_KEY',         '`ieNJKgyt+hk~S#[_VTCRKT.Gr-b00b_zBe/glEoSk=S?I52c)2SB))!=lz}*vc`' );
define( 'AUTH_SALT',         'tib(SzGU=luZyZH.@&>^)f#>q;]*8.K^S7oT3]x,zVRkzOuC?uWk2HI?W`d&|fHR' );
define( 'SECURE_AUTH_SALT',  '9pg#Xbng:>gE0>%u8Rghm!=Knv4M`3Du@=2RUZEB>UYF6eg{itt[9Y6e/*(4Apb4' );
define( 'LOGGED_IN_SALT',    'z[@8x{j$W-_Vtt0lOElgwGi>[p>3nsg4)CKU<&bTobINsRg+coLy5/A/|~JP!ks1' );
define( 'NONCE_SALT',        'lkXNy%%.Joo^i]Vt;C`p}%]K:z;~#k~vV/e$x2+m_,GO%RKm%dPuMoBV?*HNTU1T' );
define( 'WP_CACHE_KEY_SALT', ']t8(lN{[+@Z0ISpZcG34!/.KKLY:ft$5mVsfs5BC-<%GQo;MDHv.4?4coMpg2R4t' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
