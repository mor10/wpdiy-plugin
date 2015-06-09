<?php

/**
 * Add individual sections, settings, and controls to the theme customizer
 */

function wpdiy_customizer( $wp_customize ) {
	// Add a footer/copyright information section.
	$wp_customize->add_section( 
		'wpdiy-info' , 
		array(
		    'title' => __( 'WPDIY', 'WPDIY' ),
		    'description' => 'Where all the WPDIY Info Bar stuff happens.',
		    'priority' => 160, // At the very bottom.
	    ) 
    );

    // Course Title
	$wp_customize->add_setting(
	    'wpdiy_title_textbox',
	    array(
	        'default' => 'WordPress DIY',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	
	$wp_customize->add_control(
	    'wpdiy_title_textbox',
	    array(
	        'label' => 'Course Title',
	        'section' => 'wpdiy-info',
	        'type' => 'text',
	    )
	);

	// Company Name
	$wp_customize->add_setting(
	    'wpdiy_company_textbox',
	    array(
	        'default' => 'ACME',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);
	
	$wp_customize->add_control(
	    'wpdiy_company_textbox',
	    array(
	        'label' => 'Company Name',
	        'description' => 'Name of fictitious company or subject featured in course.',
	        'section' => 'wpdiy-info',
	        'type' => 'text',
	    )
	);

	// Disclaimer
    $wp_customize->add_setting(
	    'wpdiy_disclaimer_textbox',
	    array(
	        'default' => 'is a fictitious brand created by lynda.com solely for the purpose of training. All products and people associated with the brand and this site are also fictitious. Any resemblance to real brands, products, or people is purely coincidental.',
	        'sanitize_callback' => 'sanitize_text_field',
	    )
	);

	$wp_customize->add_control(
	    'wpdiy_disclaimer_textbox',
	    array(
	        'label' => 'Disclaimer',
	        'description' => 'Disclaimer is prefixed by the contents of the Company Name field.',
	        'section' => 'wpdiy-info',
	        'type' => 'textarea',
	    )
	);

	// Landing site URL
	$wp_customize->add_setting(
	    'wpdiy_url_textbox',
	    array(
	        'default' => 'http://wpdiy.net',
	        'sanitize_callback' => 'esc_url',
	    )
	);
	
	$wp_customize->add_control(
	    'wpdiy_url_textbox',
	    array(
	        'label' => 'Lander URL',
	        'description' => 'URL to the lander site for this course - ie photography.wpdiy.net.',
	        'section' => 'wpdiy-info',
	        'type' => 'text',
	    )
	);
}
add_action( 'customize_register', 'wpdiy_customizer' );

