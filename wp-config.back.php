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

/*
 * cPanel & WHM® Site Software
 *
 * Core updates should be disabled entirely by the cPanel & WHM® Site Software
 * plugin, as Site Software will provide the updates.  The following line acts
 * as a safeguard, to avoid automatically updating if that plugin is disabled.
 *
 * Allowing updates outside of the Site Software interface in cPanel & WHM®
 * could lead to DATA LOSS.
 *
 * Re-enable automatic background updates at your own risk.
 */
define( 'WP_AUTO_UPDATE_CORE', false );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'icertech_wp');

/** MySQL database username */
define('DB_USER', 'icertech_wp');

/** MySQL database password */
define('DB_PASSWORD', 'p:&,0NIA');

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
define('AUTH_KEY',         'IJpUWBOtRm37oVtB8kyhh4opmGY44g5yn90iYLt8sPssgblhfBGi4NPe0Q5m_AwU');
define('SECURE_AUTH_KEY',  'PNWmwqQ3p3gYm8PxO0tTbSyntZXaROkOiSf3ncML78Wv6ry7X9DAC1CzJtrdNdDt');
define('LOGGED_IN_KEY',    'CM2H0eZWxLHQyqQVpOBfCW0WOwglGP_QgRL_oYfvRxr1xzpsf1J2Nfx7UwaZ5VVR');
define('NONCE_KEY',        'OS34UtfSIdmNWgPl5FWRj28n1r5iHcuV5gc3RVNLp4wQLCBUUCZQo2bCqga7CQGa');
define('AUTH_SALT',        '5wF1dQ9r6qKfLZqiUXgpTbBT5Q9sUiStfQdbhhdRExPfJnMvxadwiF1k0OF2hnHw');
define('SECURE_AUTH_SALT', 'cp6Z3BFTlfm590udUM1u7O4wCz_teY0ZUAbjxXqIekNl4IZpMqGH7zkpTaBbEAgb');
define('LOGGED_IN_SALT',   'CP5xAddGW_U7J8Nc7DlAhndNBIQKZ17LyoGlVVvB3a3mKAbxSlx6GmkkE2CkAiOf');
define('NONCE_SALT',       'tkvyCdbmjDbnIcT0FE3MCrfn5IgE5xwNCCDMNymsMfeMVGJeewtCvwuIXteJaQnu');

/**#@-*/

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
