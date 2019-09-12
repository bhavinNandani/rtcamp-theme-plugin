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
define( 'DB_NAME', 'rt_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',R}EfJi>6D2GQfTD301EzGVgdHKb%yo%D&35!5_8:Wf9>DtMm{M7|i63]~GG%8E!' );
define( 'SECURE_AUTH_KEY',  'K*m6GoD#60oI2ap28!7eBIxE+WD9hrlVnn-lB1 hT(0|l-Dbzxkn~G(^<Kr&c <~' );
define( 'LOGGED_IN_KEY',    '{Uym0M9}b(gf1mK^lx?pCzZ@8}#w-.K;r<d|1uDpIUyIlax30B|g[eW{yOl$puGw' );
define( 'NONCE_KEY',        '1c~icU@ng:g4QPj!qc<NHs{Y#=ioVI(-)KS}/JBEass7`(qtLc8PlU]sZOsR/v,c' );
define( 'AUTH_SALT',        'ugCAX?+4uZi:UfSk%MaHP(z#FuRDUnC;QPF#}X{2M~c5On2jlL}dnp,hHgc0f7V;' );
define( 'SECURE_AUTH_SALT', 'ryDHxOtH>!iXe4Bf-O61aTRc@-4]z8$E}8arXzFy%thdSY0PLuP<W-FQ9CDf 6!_' );
define( 'LOGGED_IN_SALT',   '[kT9+UJ$Un&f+h|L({ROODe:1-i`;<NrZ]J@O`T[%9!mDb.i%fDqn6Bx*97bTkuX' );
define( 'NONCE_SALT',       ',5h-5?Qa?G g>9v1s!lUh|v[`xcr*8_fNc|P$;cvKTE&03kAGINd2[E`O?9>takX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rt_wordpress_';

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
