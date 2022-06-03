<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hait
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hait' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-header-inner">
				<div class="site-branding">
					<?php if ( has_custom_logo() ) : ?>
						<div class="site-logo">
							<?php the_custom_logo(); ?>
						</div>
					<?php endif; ?>

					<div class="site-title-tagline">
						<?php
						$hide_site_title =  hait_get_option( 'hide_site_title' );

						if( $hide_site_title === false ) {
							if ( is_front_page() && is_home() ) :
								?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
						}

						$hide_tagline =  hait_get_option( 'hide_tagline' );

						if( $hide_tagline === false ) {
							$hait_description = get_bloginfo( 'description', 'display' );
							if ( $hait_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $hait_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif;
						} ?>

				</div><!-- .site-title-tagline -->
				</div><!-- .site-branding -->

				<div class="main-navigation-wrap">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="menu-bar"></span><span class="menu-bar"></span><span class="menu-bar"></span></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->

					<div class="additional-items">
						<div class="additional-items-inner">
							<?php

							$show_profile = hait_get_option( 'show_profile' );

							if ( true == $show_profile ) {

								$icon_user = '<svg width="29px" height="33px" role="img" viewBox="0 0 29 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="user-icon" transform="translate(1.000000, 1.000000)" stroke="currentColor" stroke-width="2"><circle id="Oval" cx="13" cy="9" r="9"></circle><path d="M0,31.5 C0,24.0435 6.0435,18 13.5,18 C20.9565,18 27,24.0435 27,31.5" id="Path"></path></g></g></svg>';

								$profile_link = hait_get_option( 'profile_link' );

								if( !empty( $profile_link ) ) {
									$account_link = $profile_link;
								}else {
									$account_link = get_permalink( get_option('woocommerce_myaccount_page_id') );
								} ?>
								<div class="top-icon-wrap top-login-wrap">
									<a class="top-icon top-login-link" href="<?php echo esc_url( $account_link ); ?>"><?php echo $icon_user; ?></a>
								</div>
								<?php
							}

							$show_cart = hait_get_option( 'show_cart' );

							if ( true == $show_cart && class_exists( 'WooCommerce' ) ) {

								?>
								<div class="top-icon-wrap top-cart-wrap">
									<a class="top-icon top-cart-link" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
										<span class="cart-value hait-cart-fragment"><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ); ?></span>
									</a>
								</div>

								<?php

							} ?>
						</div><!-- .additional-items-inner -->
					</div><!-- .additional-items -->
				</div><!-- .main-navigation-wrap -->
			</div><!-- .site-header-inner -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
