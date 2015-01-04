<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package parkview
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function parkview_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'parkview_jetpack_setup' );
