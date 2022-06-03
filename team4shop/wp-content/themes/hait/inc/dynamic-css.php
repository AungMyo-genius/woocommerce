<?php
/**
 * Dynamic Options hook.
 *
 * This file contains option values from customizer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hait
 */

if ( ! function_exists( 'hait_dynamic_styles' ) ) :
	function hait_dynamic_styles() {

		$custom_css = "";

		/*--------------------------------------------------------------
		## Logo Height
		--------------------------------------------------------------*/
		$logo_height =  hait_get_option( 'logo_height' );

		$custom_css .= "
		.site-branding img {
		  max-height: {$logo_height}px;
		  width: auto;
		}";

		wp_add_inline_style( 'hait-style', $custom_css );
	}
endif;

add_action( 'wp_enqueue_scripts', 'hait_dynamic_styles' );

