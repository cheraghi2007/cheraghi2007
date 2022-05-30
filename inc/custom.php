<?php

/**
 * ACF Option Page
 */
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// ACF > WYSIWYG — Custom Toolbar
add_filter('acf/fields/wysiwyg/toolbars', function ($toolbars) {

	// Unset Basic Type Toolbar
	unset($toolbars['Basic']);

	// [1] formatselect. bold, italic, bullist, numlist, blockquote, alignleft, aligncenter, alignright, link, wp_more, spellchecker, fullscreen, wp_adv
	// [2] strikethrough, hr, forecolor, pastetext, removeformat, charmap, outdent, indent, undo, redo, wp_help

	// Register a basic toolbar with a single row of options
	$toolbars['Full'][1] = [
		'formatselect',
		'fontsizeselect',
		'bold',
		'italic',
		'alignleft',
		'aligncenter',
		'alignright',
		'bullist',
		'numlist',
		'link',
		'unlink',
		'forecolor',
		'hr',
		'removeformat'
	];
	$toolbars['Full'][2] = [];

	return $toolbars;
});


// Customize mce editor font sizes
if (!function_exists('wpex_mce_text_sizes')) {
	function wpex_mce_text_sizes($initArray)
	{
		$initArray['fontsize_formats'] = "10px 12px 13px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px";
		return $initArray;
	}
}
add_filter('tiny_mce_before_init', 'wpex_mce_text_sizes');




// Remove Slug
function location_remove_slug($post_link, $post, $leavename)
{

	if ('location' != $post->post_type || 'publish' != $post->post_status) {
		return $post_link;
	}

	$post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);

	return $post_link;
}
add_filter('post_type_link', 'location_remove_slug', 10, 3);


function boats_remove_slug($post_link, $post, $leavename)
{

	if ('boats' != $post->post_type || 'publish' != $post->post_status) {
		return $post_link;
	}

	$post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);

	return $post_link;
}
add_filter('post_type_link', 'boats_remove_slug', 10, 5);



function na_parse_request($query)
{

	if (!$query->is_main_query() ||  !isset($query->query['page'])) {
		return;
	}

	if (!empty($query->query['name'])) {
		$query->set('post_type', array('post', 'location', 'boats', 'page'));
	}
}
add_action('pre_get_posts', 'na_parse_request');




/**
 * LANG Item
 */
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args)
{
	if ($args->theme_location == 'mobile-menu') {
		$items .= '<li id="lang" class="menu-item-has-children menu-item menu-item-type-post_type menu-item-object-page">
		<button><i class="fa fa-globe"></i> <div>LANGUAGES</div>
			<ul class="sub-menu">' . pll_the_languages() . '</ul>
		</button>
		</li>';
	}
	return $items;
}


// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('understrap_pagination')) {
	function understrap_pagination($args = array(), $class = 'pagination')
	{

		if (!isset($args['total']) && $GLOBALS['wp_query']->max_num_pages <= 1) {
			return;
		}

		$args = wp_parse_args(
			$args,
			array(
				'mid_size'           => 2,
				'prev_next'          => true,
				'prev_text'          => __('<i class="fa fa-angle-left"></i>', 'understrap'),
				'next_text'          => __('<i class="fa fa-angle-right"></i>', 'understrap'),
				'type'               => 'array',
				'current'            => max(1, get_query_var('paged')),
				'screen_reader_text' => __('Posts navigation', 'understrap'),
			)
		);

		$links = paginate_links($args);
		if (!$links) {
			return;
		}

?>

		<nav aria-labelledby="posts-nav-label">

			<h2 id="posts-nav-label" class="sr-only">
				<?php echo esc_html($args['screen_reader_text']); ?>
			</h2>

			<ul class="<?php echo esc_attr($class); ?>">

				<?php
				foreach ($links as $key => $link) {
				?>
					<li class="page-item <?php echo strpos($link, 'current') ? 'active' : ''; ?>">
						<?php echo str_replace('page-numbers', 'page-link', $link); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
						?>
					</li>
				<?php
				}
				?>

			</ul>

		</nav>

<?php
	}
}


/**
 * reading_time
 */
function reading_time()
{
	$content = get_the_content(get_the_id());
	$word_count = str_word_count($content);
	$readingtime = ceil($word_count / 150);
	if ($readingtime == 1) {
		$timer = " MINUTE";
	} else {
		$timer = " MINUTES";
	}
	$totalreadingtime = $readingtime . $timer;
	return $totalreadingtime;
}

/**
 * SOCIAL SHORTCODE
 */
function social_networks()
{

	$social = '<div class="socials">';
	$social .= '<div class="social-icon">';
	$social .= '<a href="' . get_field('facebook', 'option') . '" target="_blank"><i class="fab fa-facebook-f"></i></a>';
	$social .= '</div>';
	$social .= '<div class="social-icon">';
	$social .= '<a href="' . get_field('instagram', 'option') . '" target="_blank"><i class="fab fa-instagram"></i></a>';
	$social .= '</div>';
	$social .= '<div class="social-icon">';
	$social .= '<a href="' . get_field('linkedin', 'option') . '" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
	$social .= '</div>';
	$social .= '<div class="social-icon">';
	$social .= '<a href="' . get_field('youtube', 'option') . '" target="_blank"><i class="fab fa-youtube"></i></a>';
	$social .= '</div>';
	$social .= '</div>';

	return $social;
}

add_shortcode('social', 'social_networks');

pll_register_string('_s', 'READ MORE');
pll_register_string('_s', 'ALL HARBOURS');
pll_register_string('_s', 'ALL BOATS');



/**
 * remove unwanted links from sitemap
 */
function sitemap_exclude_taxonomy($value, $taxonomy)
{
	$taxonomy_to_exclude = array('location_cat', 'boats_cat');
	if (in_array($taxonomy, $taxonomy_to_exclude)) return true;
}
add_filter('wpseo_sitemap_exclude_taxonomy', 'sitemap_exclude_taxonomy', 10, 2);
