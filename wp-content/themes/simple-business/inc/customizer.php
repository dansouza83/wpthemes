<?php

function business_customize_register($wp_customize)
{
	// Banner Section
	$wp_customize->add_section('banner', array(
		'title' 			=> __('Banner', 'simple-business'), // Title and Theme
		'description' => sprintf(__('Options for homepage banner', 'business')), // Description above
		'priority'		=> 130
	));

	//  Heading setting
	$wp_customize->add_setting('banner_heading', array(
		'default' => _x('Banner Heading Sample', 'simple-business'),
		'type' 		=> 'theme_mod'
	));

	//  Heading control
	$wp_customize->add_control('banner_heading', array(
		'label' 	=> _x('Heading', 'simple-business'),
		'section' => 'banner',
		'priority'	=> 20
	));

	//  Text setting
	$wp_customize->add_setting('banner_text', array(
		'default' => _x('Cras justo odio, dapibus ac facilisis in,
		egestas eget quam. Fusce dapibus, tellus ac cursus commodo,
		tortor mauris condimentum nibh, ut fermentum massa justo sit
		amet risus.', 'simple-business'),
		'type' 		=> 'theme_mod'
	));

	//  Text control
	$wp_customize->add_control('banner_text', array(
		'label' 	=> _x('Text', 'simple-business'),
		'section' => 'banner',
		'priority'	=> 20
	));

	//  Button Text setting
	$wp_customize->add_setting('banner_btn_text', array(
		'default' => _x('Sign Up', 'simple-business'),
		'type' 		=> 'theme_mod'
	));

	//  Button Text control
	$wp_customize->add_control('banner_btn_text', array(
		'label' 	=> __('Button Text', 'simple-business'),
		'section' => 'banner',
		'priority'	=> 20
	));

	//  Button URL setting
	$wp_customize->add_setting('banner_btn_url', array(
		'default' => _x('https://text.com', 'simple-business'),
		'type' 		=> 'theme_mod'
	));

	//  Button URL control
	$wp_customize->add_control('banner_btn_url', array(
		'label' 	=> __('Button URL', 'simple-business'),
		'section' => 'banner',
		'priority'	=> 20
	));

	//  Background Image setting
	$wp_customize->add_setting('banner_image', array(
		'default' => get_bloginfo('template_directory') . '/img/banner.jpg',
		'type' 		=> 'theme_mod'
	));

	//  Background Image control
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
		'label' 		=> __('Background Image', 'simple-business'),
		'section' 	=> 'banner',
		'settings' 	=> 'banner_image'
	)));

	// Boxes Section

	$wp_customize->add_section('boxes', array(
		'title' => __('Boxes', 'simple-business'),
		'description' => sprintf(__('Oprions for homepage boxes', 'simple-business')),
		'priority' => 130
	));

	// BOX 1

	// Box 1 Heading Setting
	$wp_customize->add_setting('box1_heading', array(
		'default' => _x('Box 1 Heading', 'simple-business'),
		'type' => 'theme_mod'
	));

	// Box 1 Heading Control
	$wp_customize->add_control('box1_heading', array(
		'label' => __('Box 1 Heading Sample', 'simple-theme'),
		'section' => 'boxes',
		'priority' => 20
	));

	// Box 1 Text Setting
	$wp_customize->add_setting('box1_text', array(
		'default' => _x('Box 1 text -> Tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus', 'simple-business'),
		'type' => 20
	));

	// Box 1 Text Control
	$wp_customize->add_control('box1_text', array(
		'label' => __('Box 1 Text', 'simple-business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//  Box 1 Icon Settings
	$wp_customize->add_setting('box1_icon', array(
		'default' => _x('bar-chart', 'simple-business'),
		'type' => 'theme_mod'
	));

	// Box 1 Icon Control
	$wp_customize->add_control('box1_icon', array(
		'label' => __('Box 1 Icon', 'simple-business'),
		'section' => 'boxes',
		'priority' => 20
	));

	// BOX 2

	// Box 2 Heading Setting
	$wp_customize->add_setting('box2_heading', array(
		'default' => _x('Box 2 Heading', 'simple-business'),
		'type' => 'theme_mod'
	));

	// Box 2 Heading Control
	$wp_customize->add_control('box2_heading', array(
		'label' => __('Box 2 Heading Sample', 'simple-theme'),
		'section' => 'boxes',
		'priority' => 20
	));

	// Box 2 Text Setting
	$wp_customize->add_setting('box2_text', array(
		'default' => _x('Box 2 text -> Tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus', 'simple-business'),
		'type' => 20
	));

	// Box 2 Text Control
	$wp_customize->add_control('box2_text', array(
		'label' => __('Box 2 Text', 'simple-business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//  Box 2 Icon Settings
	$wp_customize->add_setting('box2_icon', array(
		'default' => _x('code', 'simple-business'),
		'type' => 'theme_mod'
	));

	// Box 2 Icon Control
	$wp_customize->add_control('box2_icon', array(
		'label' => __('Box 2 Icon', 'simple-business'),
		'section' => 'boxes',
		'priority' => 20
	));

	// BOX 3

	// Box 3 Heading Setting
	$wp_customize->add_setting('box3_heading', array(
		'default' => _x('Box 3 Heading', 'simple-business'),
		'type' => 'theme_mod'
	));

	// Box 3 Heading Control
	$wp_customize->add_control('box3_heading', array(
		'label' => __('Box 3 Heading Sample', 'simple-theme'),
		'section' => 'boxes',
		'priority' => 20
	));

	// Box 3 Text Setting
	$wp_customize->add_setting('box3_text', array(
		'default' => _x('Box 3 text -> Tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus', 'simple-business'),
		'type' => 20
	));

	// Box 3 Text Control
	$wp_customize->add_control('box3_text', array(
		'label' => __('Box 3 Text', 'simple-business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//  Box 3 Icon Settings
	$wp_customize->add_setting('box3_icon', array(
		'default' => _x('desktop', 'simple-business'),
		'type' => 'theme_mod'
	));

	// Box 3 Icon Control
	$wp_customize->add_control('box3_icon', array(
		'label' => __('Box 3 Icon', 'simple-business'),
		'section' => 'boxes',
		'priority' => 20
	));
}

add_action('customize_register', 'business_customize_register');
