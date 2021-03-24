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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fatima' );

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
define( 'AUTH_KEY',         '+Te5TrIi{;MegrhrN23~gh+p6Fl!2Khr{B7?S1|H}n(@}uZOa43GF|aw,n9GZ,`9' );
define( 'SECURE_AUTH_KEY',  'p#lI;W!?}T+ESV*5J%xX|w~b]+%A:Y)Y&YWTZh7K6C4=~=6jiu;[>I5,{M0<Ddj@' );
define( 'LOGGED_IN_KEY',    '$+DO%ya.>-LN;4WTGfE/0+oD/#2OqZmb9kl;:Rc=1iEmBu[r`^6aG%<S_H|-+XA=' );
define( 'NONCE_KEY',        '%hgvq0`;uEXR~x}%|]-KiFC5j<p4;LAn|k{DPBtMk;a%]1FPYHnB9~EcUM<y@O#v' );
define( 'AUTH_SALT',        '1OYz$hcFEW@qd,Y-7mKjkmPIQTdC/@s<!_,D(G)|*!z`A =QA(;p%c^d~)0aDLwl' );
define( 'SECURE_AUTH_SALT', 'IRhi)]Ld,hE;IZuEt$k0uj$YKYC)JxIg7oEWxqa/Dlo`92&qBA2A,[vCckm@ qmi' );
define( 'LOGGED_IN_SALT',   ';:.(&Q6AUUkMT5;yk*,#[$4Dkqp|aMjgFXYGSq(jZb]RtwnCsh]({Z9|;#IH#Ox=' );
define( 'NONCE_SALT',       'ir~>(AiqqRO@,@Nl8FW_+.2Gs3fno<_U`<5+<%YLKW`_BVS`OH^HFQvQ$@#_TWIJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fs_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
