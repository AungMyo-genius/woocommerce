<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Hait
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */

function hait_woocommerce_setup() {
	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	$gallery_zoom = hait_get_option( 'enable_gallery_zoom' );

	if( 1 == $gallery_zoom ){
		add_theme_support( 'wc-product-gallery-zoom' );
	}

}
add_action( 'after_setup_theme', 'hait_woocommerce_setup' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function hait_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'hait_woocommerce_active_body_class' );

//=============================================================
// Change number of product per page
//=============================================================
add_filter( 'loop_shop_per_page', 'hait_new_loop_shop_per_page', 20 );

if (!function_exists('hait_new_loop_shop_per_page')) {

	function hait_new_loop_shop_per_page( $cols ) {

		$product_per_page 	= hait_get_option( 'product_per_page' );

		$cols = absint( $product_per_page );

		return $cols;
	}
}

//=============================================================
// Change number of product per row
//=============================================================

if (!function_exists('hait_product_columns')) {

	function hait_product_columns() {

		$product_number = hait_get_option( 'product_number' );

		return absint( $product_number ); // number of products per row

	}

}

add_filter('loop_shop_columns', 'hait_product_columns');

//=============================================================
// Change number of related product
//=============================================================

if (!function_exists('hait_related_products_args')) {

	function hait_related_products_args( $args ) {

		$product_number = hait_get_option( 'product_number' );

		$args['columns']   		= absint( $product_number );

		$args['posts_per_page'] = absint( $product_number ); // number of related products

		return $args;
	}

}

add_filter( 'woocommerce_output_related_products_args', 'hait_related_products_args' );

// Disable Related Products
$disable_related_products = hait_get_option( 'disable_related_products' );

if( true === $disable_related_products ){
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
}

//=============================================================
// Change number of upsell products
//=============================================================

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

add_action( 'woocommerce_after_single_product_summary', 'hait_output_upsells', 15 );

if ( ! function_exists( 'hait_output_upsells' ) ) {

	function hait_output_upsells() {

		$product_number = hait_get_option( 'product_number' );

	    woocommerce_upsell_display( absint( $product_number ), absint( $product_number ) ); // Display 3 products in rows of 3

	}

}

// Remove sidebar in woocommerce page and add conditional sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Remove add to cart button from product listing
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'hait_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function hait_woocommerce_wrapper_before() {
		?>
			<main id="primary" class="site-main">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'hait_woocommerce_wrapper_before' );

if ( ! function_exists( 'hait_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function hait_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'hait_woocommerce_wrapper_after' );

// Remove sorting option
$hide_product_sorting = hait_get_option( 'hide_product_sorting' );

if( true === $hide_product_sorting ){
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}

// Remove Breadcrumb
$hide_product_breadcrumb = hait_get_option( 'hide_product_breadcrumb' );

if( true === $hide_product_breadcrumb ){
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
}

if ( ! function_exists( 'hait_header_add_to_cart_fragment' ) ) {
	/**
	 * Update number of items in cart and total after Ajax
	 *
	 * @return void
	 */
	function hait_header_add_to_cart_fragment( $fragments ) {

		global $woocommerce;

		ob_start(); ?>

		<span class="cart-value hait-cart-fragment"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>

		<?php

		$fragments['span.hait-cart-fragment'] = ob_get_clean();

		return $fragments;

	}
}

add_filter( 'woocommerce_add_to_cart_fragments', 'hait_header_add_to_cart_fragment' );
