<?php
/**
 * itereon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package itereon
 */

define( 'IT_URL', get_template_directory_uri() );
define( 'IT_DIR', get_template_directory() );
define( 'IT_CSS', get_template_directory_uri() . '/assets/dist/css/' );
define( 'IT_JS', get_template_directory_uri() . '/assets/dist/js/' );

require IT_DIR . '/inc/after-theme-setup.php';
require IT_DIR . '/inc/widgets.php';
require IT_DIR . '/inc/disables.php';
require IT_DIR . '/inc/login.php';
require IT_DIR . '/inc/svg-support.php';
require IT_DIR . '/inc/scripts-styles.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
