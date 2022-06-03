<?php
/**
 * Core functions.
 *
 * @package Hait
 */

if ( ! function_exists( 'hait_get_option' ) ) :

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function hait_get_option( $key ) {

        if ( empty( $key ) ) {

            return;

        }

        $hait_default = hait_get_default_theme_options();

        $default = ( isset( $hait_default[ $key ] ) ) ? $hait_default[ $key ] : '';
        $theme_options = get_theme_mod( 'theme_options', $hait_default );
        $theme_options = array_merge( $hait_default, $theme_options );
        $value = '';

        if ( isset( $theme_options[ $key ] ) ) {
            $value = $theme_options[ $key ];
        }

        return $value;

    }

endif;

if ( ! function_exists( 'hait_get_default_theme_options' ) ) :

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function hait_get_default_theme_options() {

        $defaults = array();

        $defaults['logo_height']            = 50;
        $defaults['hide_site_title']        = false;
        $defaults['hide_tagline']      		= true;

        $defaults['show_search']      		= true;
        $defaults['show_cart']      		= true;
        $defaults['show_profile']      		= true;
        $defaults['profile_link']      		= home_url( '/my-account/' );

        // Shop page
        $defaults['product_per_page']       = 9;
        $defaults['product_number']         = 3;
        $defaults['hide_product_breadcrumb']= true;
        $defaults['hide_product_sorting']   = false;
        $defaults['enable_gallery_zoom']    = false;
        $defaults['disable_related_products']= false;

        $defaults['copyright_text']         = esc_html__( 'Copyright &copy; 2022 Hait. All rights reserved.', 'hait' );

        return $defaults;
    }

endif;

//=============================================================
// Get all options in array
//=============================================================
if ( ! function_exists( 'hait_get_options' ) ) :

    /**
     * Get all theme options in array.
     *
     * @since 1.0.0
     *
     * @return array Theme options.
     */
    function hait_get_options() {

        $value = array();

        $value = get_theme_mods();

        return $value;

    }

endif;
