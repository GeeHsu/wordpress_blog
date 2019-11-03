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
define( 'DB_NAME', 'wordpress_blog' );

/** MySQL database username */
define( 'DB_USER', 'wpadmin_blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GMxHj9vw2zbO5cTi' );

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
define( 'AUTH_KEY',         '$jYe21qK~>;~k==hU,cxlqB[>m`:Dw8zrnpICD!%v=^{V(K#?(Km5YoVOH4^HX58' );
define( 'SECURE_AUTH_KEY',  'wU&Zw I:G4&+;x}Diw6K/6 _N@-Ye%x(.Q[g$LfO0Q^wbY{#v[+R253w=S(pYl#P' );
define( 'LOGGED_IN_KEY',    '{Se,`?G2S<g~<*Al^ce1$3|S{U=5B_Kl>UPzxoS?Tjc|~dmz*<+s:{c6.1%L!q@D' );
define( 'NONCE_KEY',        '(Os=#FR >|5LKz%P`G>Vj1X(;~1ZhWjy8$_wQRYt&W#lj^&N`_Duu/2B[y7w8C8Y' );
define( 'AUTH_SALT',        'ODL6u>|#R(@G7au&TlQ>_bgpuMN_!!4C44CG0?}t/iKh*i`@=n~:03vZzXz]Re30' );
define( 'SECURE_AUTH_SALT', '`[bIrm<ditl{d!5!$zCgVG{/ovF[1ahAHtL*^wLY.qf&ioje$3VBsq5.FKw92v0D' );
define( 'LOGGED_IN_SALT',   'm>J3b~G+l|/8A9sEQK^*>}f<2[}|y88E]EoVsH38#:Mh/8?S2?Y+9o6<~T<pMxmy' );
define( 'NONCE_SALT',       ')aUv8OJ6L&f&nd=pGcrdO7f^d$fsV;q-z#pm]Z1{p] 0Hn=s3:51.R4$Ar:}ds<P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
