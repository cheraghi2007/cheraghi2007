<?php

add_action( 'widgets_init', '_s_widgets_init' );

if ( ! function_exists( '_s_widgets_init' ) ) {
	/**
	 * Footer Widget.
	 */
	function _s_widgets_init() {
		/**
		 * How it Works Sidebar.
		 */
		register_sidebar(
			array(
				'name'          => __( 'Works Sidebar', '_s' ),
				'id'            => 'works_sidebar',
				'description'   => __( 'Works Sidebar Area', '_s' ),
				'before_widget' => '<aside id="%1$s" class="widgets %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h6 class="widget-title">',
				'after_title'   => '</h6>',
			)
		);
	}	
}