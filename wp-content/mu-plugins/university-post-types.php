<?php
function university_post_types()
{
 // Event Post Type

 register_post_type('event', array(
  'supports'      => array('title', 'editor', 'excerpt'),
  'show_in_rest'  => true, // Switch to Guttenberg editor
  'has_archive'   => true, // Add archive
  'public'        => true, // Permission
  'menu_icon'     => 'dashicons-calendar', // Icon from right menu
  'rewrite'       => array('slug' => 'events'), // Plural to events link
  'labels'        => array(
   'name'          => 'Events', // Title
   'add_new_item'  => 'Add New Event',
   'edit_item'     => 'Edit Event',
   'all_items'     => 'All Events',
   'singular_name' => 'Event'
  )
 ));

 // Program Post Type

 register_post_type('program', array(
  'supports'      => array('title', 'editor', 'excerpt'),
  'show_in_rest'  => true, // Switch to Guttenberg Block Editor
  'has_archive'   => true, // Add archive
  'public'        => true, // Permission
  'menu_icon'     => 'dashicons-schedule', // Icon from right menu
  'rewrite'       => array('slug' => 'programs'), // Plural to events link
  'labels'        => array(
   'name'          => 'Programs', // Title
   'add_new_item'  => 'Add New Program',
   'edit_item'     => 'Edit Program',
   'all_items'     => 'All Program',
   'singular_name' => 'Program'
  )
 ));

 // Professor Post Type

 register_post_type('professor', array(
  'supports'      => array('title', 'editor','thumbnail'),
  'public'        => true, // Permission
  'show_in_rest'  => true, // Switch to Guttenberg editor
  'menu_icon'     => 'dashicons-welcome-learn-more', // Icon from right menu
  'labels'        => array(
   'name'          => 'Professor', // Title
   'add_new_item'  => 'Add New Professor',
   'edit_item'     => 'Edit Professor',
   'all_items'     => 'All Professor',
   'singular_name' => 'Professor',
  )
 ));

}

add_action('init', 'university_post_types');
