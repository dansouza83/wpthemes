<!DOCTYPE html>
<html lang="en">

<head>
 <title>Photography</title>
 <meta charset="<?php bloginfo('charset') ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css" class="css" />

 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" class="css" />
 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <header class="w3-container w3-teal">
  <div class="w3-col m9 l9">
   <a href="<?php echo home_url('/'); ?>">
    <h1><?php bloginfo('name'); ?></h1>
   </a>
  </div>
  <div class="w3-col m9 l3">
   <input class="w3-input" type="text" placeholder="Search..." />
  </div>
 </header>
 <div class="w3-row">
  <div class="w3-col m3 l3">
   <?php if (is_active_sidebar('sidebar')) : ?>
    <?php dynamic_sidebar('sidebar'); ?>
   <?php endif; ?>
  </div>

  <div class="w3-col m9 l9">
   <div class="w3-row">