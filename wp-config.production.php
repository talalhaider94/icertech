<?php
/**
 * Production environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment
 * in this file.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


 // ** MySQL settings - You can get this info from your web host ** //
 /** The name of the database for WordPress */
 define('DB_NAME', 'icertech_wp');

 /** MySQL database username */
 define('DB_USER', 'icertech_wp');

 /** MySQL database password */
 define('DB_PASSWORD', '37TW+m%5#JrN');

 /** MySQL hostname */
 define('DB_HOST', 'localhost');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

// ** Site URL - since this is used as default, I'm setting what the URL to redirect to should be. ** //
/** The name of the database for WordPress */
define('WP_HOME','https://icertech.sigweb.co.uk/');
define('WP_SITEURL','https://icertech.sigweb.co.uk/');