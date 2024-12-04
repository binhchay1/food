<?php

/**
 * Load core
 */
if (!defined('PARENT_THEME')) {
	define('PARENT_THEME', 'Food');
}

/**
 * Registers the WordPress features
 */
function food_setup()
{
	/*
	 * Makes theme available for translation.
	 */
	add_editor_style();
	add_theme_support('automatic-feed-links');
	add_theme_support('post-formats', array('gallery', 'video', 'audio'));
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('woocommerce');
	add_theme_support('custom-background');

	register_nav_menus(
		array(
			'top' => __('Top Menu', 'top-food'),
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
		)
	);

	remove_action('wp_head', 'wp_generator');
	add_filter('widget_text', 'do_shortcode');
}

add_action('after_setup_theme', 'food_setup');

/**
 * Enqueues scripts and styles
 */
function food_scripts_styles()
{
	wp_enqueue_script('jquery');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');

	if (is_single()) {
		wp_enqueue_style('style-post', get_stylesheet_directory_uri() . '/asset/css/post.css');
	}
}

add_action('wp_enqueue_scripts', 'food_scripts_styles');
remove_action('shutdown', 'wp_ob_end_flush_all', 1);

function food_admin_scripts_styles()
{
	wp_enqueue_style('wc-blocks-style');
	wp_enqueue_style('dashicons');
}
add_action('admin_enqueue_scripts', 'food_admin_scripts_styles');

function food_get_option($options, $default = NULL)
{
	global $post;
	global $wp_query;

	if (is_singular()) {
		if (is_singular('tribe_events')) {
			$post = $wp_query->post;
		}
		if (isset($post->ID)) {
			$meta = get_post_meta($post->ID, $options, true);
		}
		return $meta != '' ? $meta : ot_get_option($options, $default);
	}

	return ot_get_option($options, $default);
}

add_filter('xmlrpc_enabled', '__return_false');
add_action('init', function ($search) {
	add_rewrite_rule('search/?$', 'index.php?s=' . $search, 'top');
});

add_action('template_redirect', function () {

	if ((defined('DOING_CRON') && DOING_CRON) || (defined('XMLRPC_REQUEST') && XMLRPC_REQUEST) || (defined('DOING_AJAX') && DOING_AJAX)) return;

	if (is_admin()) return;

	global $wp_query;
	if ($wp_query->is_404 === false) {
		$paths = explode('/', $_SERVER['REQUEST_URI']);
		foreach ($paths as $path) {
			if ($path == '404') {
				if (end($paths) == '') {
					status_header(200);
					$wp_query->is_404  = false;
					return;
				}
			}
		}
	} else {
		$paths = explode('/', $_SERVER['REQUEST_URI']);
		foreach ($paths as $path) {
			if ($path == '404') {
				if (end($paths) == '') {
					status_header(200);
					$wp_query->is_404  = false;
					get_template_part(404);
					exit();
				}
			}
		}
	}
}, PHP_INT_MAX);
