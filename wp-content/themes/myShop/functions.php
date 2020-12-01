<?php
require_once('widgets/class-wp-widget-categories-custom.php');

// Theme Support
function ms_theme_support(){
 add_theme_support('custom-logo');
 // Nav Menus
 register_nav_menus(array(
  'primary'=>__('Primary Menu')
 ));
 //Featured Image Support
 add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'ms_theme_support');

// Widgets location
function ms_init_widgets($id){
 register_sidebar(array(
  'name' => 'Sidebar',
  'id'   => 'sidebar',
  'before_widget' => '<div class="callout"',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'

 ));

 register_sidebar(array(
  'name' => 'Showcase',
  'id'   => 'showcase',
  'before_widget' => '',
  'after_widget'  => '',
  'before_title'  => '',
  'after_title'   => ''

 ));
}

add_action('widgets_init', 'ms_init_widgets');


// Register Widgets

function ms_register_widgets(){
 register_widget('WP_Widget_Categories_Custom');
}
add_action('widgets_init', 'ms_register_widgets');
