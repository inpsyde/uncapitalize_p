<?php # -*- coding: utf-8 -*-

/**
 * Plugin Name: Uncapitalize P
 * Description: Gives you the freedom to write «WordPress» as <em>you</em> want to.
 * Author:      Inpsyde GmbH
 * Author URI:  http://inpsyde.com
 * Version:     1.0.0
 * Licence:     MIT
 */

namespace UncapitalizeP;

add_action( 'wp_loaded', __NAMESPACE__ . '\clean_up', 11 );

/**
 * Remove filter 'capital_P_dangit' from the_content,
 * the_title, wp_title and comment_content
 *
 * @wp-hook plugins_loaded
 */
function clean_up() {

	foreach ( array( 'the_content', 'the_title', 'wp_title' ) as $filter )
		remove_filter( $filter, 'capital_P_dangit', 11 );

	remove_filter( 'comment_text', 'capital_P_dangit', 31 );
}