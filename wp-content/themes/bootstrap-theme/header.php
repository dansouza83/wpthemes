<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

 <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

 <meta name="description" content="">
 <meta name="author" content="">

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <div class="container">
  <div class="row">
   <div class="col-12">
    <h1>
     <a href="<?php echo home_url('/'); ?>">
      <?php bloginfo('name'); ?>
     </a>
     <small><?php bloginfo('description'); ?></small>
    </h1>
   </div>
  </div>
 </div>

 <header class="header-bg">
  <div class="container">
   <div class="h_right">
    <form method="get" action="<?php esc_url(home_url('/')); ?>">
     <input type="text" name="s" placeholder="Search...">
    </form>
   </div>
  </div>
 </header>



 <nav class="nav main-nav">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
   integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  <div class="container">

   <?php
			$args = array(
				'theme_location' => 'primary',
				'menu_class' => 'navbar-nav font-weight-extra-bold ml-auto',
				'container' => '',
				'li-class' => 'nav-item',
				'a_class' => 'nav-link',
				'active_class' => 'active'

			);
			?>

   <?php wp_nav_menu($args); ?>
  </div>
 </nav>