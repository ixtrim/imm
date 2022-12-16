<?php 

/***
 * This theme requires WordPress 8.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '8.1', '<' ) ) {
	//require get_template_directory() . '/inc/back-compat.php';
}

/***
 * IMM Theme Setup Base
 */
if ( ! function_exists( 'imm_theme' ) ) {
	function imm_theme() {

    add_theme_support( 'title-tag' );
		
    // Register Navigation
    register_nav_menus(
			array(
				'top-menu' => esc_html__( 'Top menu', 'imm' ),
				'footer-menu-1'  => esc_html__( 'Footer menu 1', 'imm' ),
        'footer-menu-2'  => esc_html__( 'Footer menu 2', 'imm' ),
			)
		);

    // Register thumbnail size
    add_image_size( 'image-16-9', 1600, 900, true );

	}
}
add_action( 'after_setup_theme', 'imm_theme' );

foreach ( glob( get_template_directory() . '/inc/*.php' ) as $file ) {
  include $file;
}