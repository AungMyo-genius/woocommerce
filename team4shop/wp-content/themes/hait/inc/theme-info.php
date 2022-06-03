<?php

//add admin page
add_action( 'admin_menu', 'hait_admin_menu' );

function hait_admin_menu() {
	add_theme_page(
        __( 'About Hait', 'hait' ),
        __( 'About Hait', 'hait' ),
        'edit_theme_options',
        'about-hait',
        'hait_theme_info_page'
    );

}

function hait_theme_info_page(){

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'hait' ) );
	}

	$theme_info = wp_get_theme(); ?>

	<div class="wrap about-wrap theme-info-wrap">
		<h1>
			<?php
			/* translators: 1: Theme Name 2: Version of the theme */
			echo sprintf( esc_html__( 'Welcome to %1$s - %2$s', 'hait' ), esc_html( $theme_info->get( 'Name' ) ), esc_html( $theme_info->get( 'Version' ) ) );
			?>
		</h1>

		<div class="about-text">
			<?php echo esc_html( $theme_info->get( 'Description' ) ); ?>
		</div>

		<p>
			<a href="https://dandure.com/" class="button button-primary" target="_blank"><?php echo esc_html__( ' View Demo', 'hait' ); ?></a>
			<a href="https://wpmanesh.com/hait-documentation/" class="button" target="_blank"><?php echo esc_html__( 'Documentation', 'hait' ); ?></a>
			<a href="https://wordpress.org/support/theme/hait/" class="button" target="_blank"><?php echo esc_html__( 'Support', 'hait' ); ?></a>
		</p>

		<div class="feature-section has-2-columns alignleft">
			<div class="card">
				<h3><?php echo esc_html__( 'Customize Everything', 'hait' ); ?></h3>
				<p><?php echo esc_html__( 'Start customizing every aspect of the website with customizer.', 'hait' ); ?></p>
				<p><a target="_self" href="<?php echo esc_url( wp_customize_url() ); ?>" class="button button-primary"><?php echo esc_html__( 'Go to Customizer', 'hait' ); ?></a></p>
			</div>
		</div>

	</div>
	<?php
}
