<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopingportal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AzGpr5](2LEbC4kev?ozK|a~()mZ _LYay!^>|:l^#)mnMLO7h+G0f;UtA#0~,fN' );
define( 'SECURE_AUTH_KEY',  ',rUmz4N#{9l=PiD?j$#*A,hKOVKa=POI&<8NM0bQSGgH/X =&9^HL]?4kO.Oc;_t' );
define( 'LOGGED_IN_KEY',    'c$Om!oN5|o^+ZTtFt+(SdaoqwqZ7;-+hS*gQ3/YQv`zFI?8p$Rfi%pi|4oqI^8N+' );
define( 'NONCE_KEY',        '1~.`0t>H:HyK~_B.o@@KFumAb=&D4)o_S9i;p8AvAnnaG@vOE_MITo}PD9g/t8WY' );
define( 'AUTH_SALT',        't6UFA&mlS|OwiK$vC~OtB1qC#rSH^u0f|FC4iey|+`0Vt_55mmbm3y})KS!0j$7k' );
define( 'SECURE_AUTH_SALT', 'z  HL;yB!Xp}ahFq~F:]M%=/4r66=w.%te}(LptK:v&m ]l!TmwA[%x,`^#x/Teq' );
define( 'LOGGED_IN_SALT',   '*7<U67A*Ey:A-Z)<q?v#kQ2z_lD(7lG&9;Bd1aCw(Gu2lk5etMz(Q&JaV2F/wUcv' );
define( 'NONCE_SALT',       '7$vp?qx0QX?Cux1$@_.+[c!atUzF6`-QbzTEZYeYP?JihSK)e/qLYyCjclRPdIuN' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
