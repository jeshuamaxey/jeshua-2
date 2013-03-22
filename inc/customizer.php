<?php
/**
 * jeshua-2.0 Theme Customizer
 *
 * @package jeshua-2.0
 * @since jeshua-2.0 1.2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @since jeshua-2.0 1.2
 */
function jeshua_2_0_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'jeshua_2_0_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since jeshua-2.0 1.2
 */
function jeshua_2_0_customize_preview_js() {
	wp_enqueue_script( 'jeshua_2_0_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130304', true );
}
add_action( 'customize_preview_init', 'jeshua_2_0_customize_preview_js' );
