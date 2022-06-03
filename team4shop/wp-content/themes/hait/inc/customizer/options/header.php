<?php
/**
 * Header Options.
 *
 * @package Hait
 */

// Setting logo_height
$wp_customize->add_setting( 'theme_options[logo_height]',
	array(
		'default'           => $default['logo_height'],
		'sanitize_callback' => 'hait_sanitize_positive_integer',
	)
);
$wp_customize->add_control( 'theme_options[logo_height]',
	array(
		'label'       => esc_html__( 'Height of Logo (in px)', 'hait' ),
		'section'     => 'title_tagline',
		'type'        => 'number',
		'priority'    => 9,
		'input_attrs' => array( 'min' => 30, 'max' => 100 ),
	)
);

// Setting hide site title.
$wp_customize->add_setting( 'theme_options[hide_site_title]',
	array(
		'default'           => $default['hide_site_title'],
		'sanitize_callback' => 'hait_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[hide_site_title]',
	array(
		'label'    			=> esc_html__( 'Hide Site Title', 'hait' ),
		'section'  			=> 'title_tagline',
		'type'     			=> 'checkbox',
		'priority' 			=> 10,
	)
);

// Setting hide site tagline.
$wp_customize->add_setting( 'theme_options[hide_tagline]',
	array(
		'default'           => $default['hide_tagline'],
		'sanitize_callback' => 'hait_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[hide_tagline]',
	array(
		'label'    			=> esc_html__( 'Hide Tagline', 'hait' ),
		'section'  			=> 'title_tagline',
		'type'     			=> 'checkbox',
		'priority' 			=> 10,
	)
);


// Header Section.
$wp_customize->add_section( 'section_header',
	array(
		'title'      => esc_html__( 'Header', 'hait' ),
		'priority'   => 100,
		'panel'      => 'theme_option_panel',
	)
);

// Setting show_profile.
$wp_customize->add_setting( 'theme_options[show_profile]',
	array(
		'default'           => $default['show_profile'],
		'sanitize_callback' => 'hait_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[show_profile]',
	array(
		'label'    			=> esc_html__( 'Show Profile', 'hait' ),
		'section'  			=> 'section_header',
		'type'     			=> 'checkbox',
		'priority' 			=> 100,
	)
);

// Setting profile_link.
$wp_customize->add_setting( 'theme_options[profile_link]',
	array(
		'default'           => $default['profile_link'],
		'sanitize_callback' => 'sanitize_url',
	)
);
$wp_customize->add_control( 'theme_options[profile_link]',
	array(
		'label'    => esc_html__( 'Profile Link', 'hait' ),
		'section'  => 'section_header',
		'type'     => 'text',
		'priority' => 100,
	)
);


// Setting show_cart.
$wp_customize->add_setting( 'theme_options[show_cart]',
	array(
		'default'           => $default['show_cart'],
		'sanitize_callback' => 'hait_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[show_cart]',
	array(
		'label'    			=> esc_html__( 'Show Cart', 'hait' ),
		'section'  			=> 'section_header',
		'type'     			=> 'checkbox',
		'priority' 			=> 100,
	)
);
