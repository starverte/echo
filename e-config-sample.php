<?php
/**
 * The base configurations of the Project Echo.
 *
 * This file is modeled after wp-config.php, a part of WordPress.
 *
 * @package Project Echo
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for Project Echo */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Project Echo Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'e_';
