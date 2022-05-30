<?php

/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

define("THEME_DIR_URI", get_template_directory_uri());
define("THEME_DIR", get_template_directory());

//remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove rss feed links
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

// remove wp-embed
add_action('wp_footer', function () {
	wp_dequeue_script('wp-embed');
});




/**
 * Setup
 */
require THEME_DIR . '/inc/setup.php';


/**
 * Enqueue
 */
require THEME_DIR . '/inc/enqueue.php';


/**
 * Custom
 */
require THEME_DIR . '/inc/custom.php';


/**
 * Block additions.
 */
require THEME_DIR . '/inc/blocks.php';


/**
 * Widget
 */
require THEME_DIR . '/inc/widget.php';


/**
 * Widget
 */
require THEME_DIR . '/inc/postTypes.php';
