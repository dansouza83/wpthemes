<?php

require_once('wp_bootstrap_navwalker.php');

function theme_setup()
{
	// Featured Image Support
	add_theme_support('post-thumbnails');

	// Nav Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));
}



add_action('after_setup_theme', 'theme_setup');
