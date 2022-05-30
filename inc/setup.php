<?php

/**
 * Setup
 */
if ( ! function_exists( '_s_setup' ) ) :
	function _s_setup() {
		load_theme_textdomain( '_s', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-right' => esc_html__( 'Primary Right', '_s' ),
				'menu-left' => esc_html__( 'Primary Left', '_s' ),
				'mobile-menu' => esc_html__( 'Mobile Menu', '_s' ),
				'footer-menu-about' => esc_html__( 'About Footer Menu', '_s' ),
				'footer-menu-last' => esc_html__( 'Links Footer Menu', '_s' ),
			)
		);
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', '_s_setup' );



/**
 * SVG Upload
 */

/*add_filter( 'upload_mimes', function() {
  $mimes['svg'] = ['image/svg+xml'];
  $mimes['mp4']  = ['video/mp4','video/mpeg'];
  $mimes['m4v']  = ['video/x-m4v'];
  $mimes['mov']  = ['video/quicktime'];
  $mimes['wmv']  = ['video/x-ms-asf','video/x-ms-wmv'];
  $mimes['avi']  = ['application/x-troff-msvideo','video/avi','video/msvideo','video/x-msvideo'];
  $mimes['mpg']  = ['audio/mpeg','video/mpeg'];
  $mimes['png']  = ['image/png'];
  $mimes['jpg']  = ['image/jpeg','image/pjpeg'];
  $mimes['pdf']  = ['application/pdf'];
  return $mimes;
});*/