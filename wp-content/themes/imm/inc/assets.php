<?php

/***
 * Enqueue scripts and styles.
 */
if ( ! function_exists( 'imm_scripts' ) ) {
  function imm_scripts() {

    wp_enqueue_style( 'vendor', get_template_directory_uri() . '/assets/css/vendor.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css', array(), wp_get_theme()->get( 'Version' ) );

    wp_enqueue_script ( 'vendor', get_template_directory_uri() . '/assets/js/vendor.js', array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script ( 'theme', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );

  }
}
add_action( 'wp_enqueue_scripts', 'imm_scripts' );