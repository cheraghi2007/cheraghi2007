<?php

/**
 * Enqueue scripts and styles.
 */
function _s_scripts(){
	wp_enqueue_style('_s-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.6.0.min.js', null, null, false);

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins%3A600%7CLora%3Aregular%7CInter%3A300%2Cregular%2C600%2C700%2C800%7CRoboto%3Aregular&subset=devanagari%2Clatin-ext%2Cvietnamese%2Ccyrillic%2Clatin%2Ccyrillic-ext%2Cgreek%2Cgreek-ext&display=swap', false );

	wp_enqueue_style('_app', THEME_DIR_URI . '/dist/css/app.css', array(), _S_VERSION);
	wp_enqueue_style('_all', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), _S_VERSION);

	wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', null, null, true);
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js', null, null, true);

	wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), _S_VERSION);
	wp_enqueue_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', null, null, false);

	wp_enqueue_script('mixitup', 'https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js', null, null, true);
	
	wp_enqueue_script('swiperJs', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', null, null, true);
	wp_enqueue_style('swiperCss', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', null, null, false);

	wp_enqueue_script('fancyJs', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', null, null, true);
	wp_enqueue_style('fancyCss', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', null, null, false);

	wp_enqueue_script('_app', THEME_DIR_URI . '/dist/js/app.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', '_s_scripts');


function block_admin_css(){
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins%3A600%7CLora%3Aregular%7CInter%3A300%2Cregular%2C600%2C700%2C800%7CRoboto%3Aregular&subset=devanagari%2Clatin-ext%2Cvietnamese%2Ccyrillic%2Clatin%2Ccyrillic-ext%2Cgreek%2Cgreek-ext&display=swap', false );
	wp_enqueue_style('adminCss', THEME_DIR_URI . '/template-parts/block-css/adminCss.css', array());
	wp_enqueue_style('bootstrap-css-admin', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', array());
	wp_enqueue_script('bootstrap-js-admin', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', array());
	wp_enqueue_script('swiperJs', 'https://unpkg.com/swiper@8/swiper-bundle.min.js',array());
	wp_enqueue_style('swiperCss', 'https://unpkg.com/swiper@8/swiper-bundle.min.css',array());
	wp_enqueue_script('mainAdmin', THEME_DIR_URI . '/template-parts/block-js/mainAdmin.js',array());
}

global $pagenow;
if (!empty($pagenow) && ('post-new.php' === $pagenow || 'post.php' === $pagenow))
	add_action('admin_enqueue_scripts', 'block_admin_css');
add_action('admin_print_scripts-post.php',     'block_admin_css');
