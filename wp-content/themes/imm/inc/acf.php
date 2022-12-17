<?php 

if ( ! function_exists( 'options_page_acf_init' ) ) {
  function options_page_acf_init() {
    acf_add_options_page( [
      'page_title' => __('Theme Settings', 'imm-theme'),
      'menu_title' => __('Theme Settings', 'imm-theme'),
      'menu_slug' => 'imm-theme-settings',
      'capability' => 'edit_posts',
      'redirect' => FALSE,
    ] );
  }
}

if ( function_exists( 'acf_add_options_page' ) ) {
  add_action( 'acf/init', 'options_page_acf_init' );
}