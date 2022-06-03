<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Hait
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function hait_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class space-disabled if Disable space meta value is true
	$disable_space = get_post_meta( absint( get_the_ID() ), 'disable_space', true );

	if ( ( 'checked' === $disable_space ) && is_singular() ) {
		$classes[] = 'space-disabled';
	}

	return $classes;
}
add_filter( 'body_class', 'hait_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function hait_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'hait_pingback_header' );

/**
 * Add a dropdown icon to header menu.
 */
add_filter( 'nav_menu_item_title', 'hait_add_dropdown_icons', 10, 4 );

if ( ! function_exists( 'hait_add_dropdown_icons' ) ) {

	function hait_add_dropdown_icons( $title, $item, $args, $depth ) {

		$icon = '<svg role="img" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="square"/></svg>';

		if ( 'menu-1' === $args->theme_location && (0 === $depth || 1 === $depth) ) {
			foreach ( $item->classes as $value ) {
				if ( 'menu-item-has-children' === $value || 'page_item_has_children' === $value ) {
					$title = $title . '<span role="presentation" class="dropdown-menu-toggle">' . $icon . '</span>';
				}
			}
		}

		return $title;

	}

}

/**
 * Include recommended plugins
 */

add_action( 'tgmpa_register', 'hait_register_required_plugins' );

if ( ! function_exists( 'hait_register_required_plugins' ) ) {

	function hait_register_required_plugins() {

		$plugins = array(

			array(
				'name'      => esc_html__( 'WooCommerce', 'hait' ),
				'slug'      => 'woocommerce',
				'required'  => false,
			),

			array(
				'name'      => esc_html__( 'WooCommerce Product Tabs', 'hait' ),
				'slug'      => 'woocommerce-product-tabs',
				'required'  => false,
			),

		);

		tgmpa( $plugins );
	}
}
