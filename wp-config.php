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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         'mY.]L)EDDV,te4by+[/*&j6{^@6Gt;Cto{{tGWN[3`P0)Z[&6LNV*e8DOR(B(Wl_' );

define( 'SECURE_AUTH_KEY',  'Gtu&>*np[Y;wD4fVVtL0j=pRJI?6gnEEGd1C#(J(w:lW(G{KOP]0}?NOi:5{q!-c' );

define( 'LOGGED_IN_KEY',    'Hj8}]>PNhy$H}FhIQ]A7 y/s(FPTtJ4(qDR[!iC>YEbyI^7;# @r#fJgG*W,`{@Q' );

define( 'NONCE_KEY',        'x:bnjmsu`yh&Dr?NA*N@a*]6;`V74#Qlikx6YN(#-;$S<I2n3lgW;64J.[2d/:Xx' );

define( 'AUTH_SALT',        'XQPsyh0(>TPA3DBNSJN:dnzUVtY9*|e2SigWcc|q=nX*X1}!J:*!JPMmY)L1-tJ0' );

define( 'SECURE_AUTH_SALT', 'v:L1_vF<][B4~rd<:I7TZ_?J{rKLUlbap;$3]%g4d+WbyiA;[NADjJV[,|Tk`?Sc' );

define( 'LOGGED_IN_SALT',   'qh83{ 8AQ]Sz+f!1dmdhnl:Y<l]3xqC<0oRsu3vLKtF;?m8zh*yQjs),#yaA?_3q' );

define( 'NONCE_SALT',       'z[b9>c22f=.zNWyI[?X`BydR6:[/rj.(%` wNm/32 //fYIO.(Y3c^aP1;*]Zt$H' );


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

