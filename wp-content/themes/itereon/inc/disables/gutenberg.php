<?php
/**
 * Disable gutenberg stuff
 *
 * @package iterion
 */

/**
 * Disable Gutenberg block styles
 */
function remove_block_css() {
	wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
