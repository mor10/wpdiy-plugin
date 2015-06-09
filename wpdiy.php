<?php
/*
Plugin Name: WPDIY plugin
Plugin URI:  http://wpdiy.net
Description: The WPDIY plugin that adds the WPDIY header and footer to the site. Activate on live WPDIY demo sites only after recording is complete.
Version:     0.2
Author:      Morten Rand-Hendriksen
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/* Enqueue plugin stylesheet */
function WPDIY_scripts() {
	// Load plugin stylesheet.
	wp_enqueue_style( 'WPDIY-styles',  plugin_dir_url( __FILE__ ) . 'wpdiy-styles.css' );
    wp_enqueue_style( 'WPDIY-icons', plugin_dir_url( __FILE__ ) . '/icons/style.css' );
    wp_enqueue_script( 'WPDIY-js', plugin_dir_url( __FILE__ ) . '/js/functions.js', array('jquery'), true );
}
add_action( 'wp_enqueue_scripts', 'WPDIY_scripts' );

/* Output the global header */
function WPDIY_header() {
	include('partial-header.php');
}
add_action( 'wp_footer', 'WPDIY_header');

// Bring on the Customizer function
include( 'customizer/customizer.php');
