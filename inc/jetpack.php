<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package jeshua-2.0
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function jeshua_2_0_infinite_scroll_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'jeshua_2_0_infinite_scroll_setup' );
