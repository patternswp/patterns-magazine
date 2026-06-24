<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Magazine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Magazine
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_MAGAZINE_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_MAGAZINE_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_MAGAZINE_VERSION', '2.0.0' );
define( 'PATTERNS_MAGAZINE_THEME_NAME', 'patterns-magazine' );
define( 'PATTERNS_MAGAZINE_OPTION_NAME', 'patterns-magazine' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_MAGAZINE_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_magazine_run() {
	new Patterns_Magazine();
}
patterns_magazine_run();
