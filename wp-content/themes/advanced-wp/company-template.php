<?php
/*
Template Name: Company Layout
*/

?>
<?php get_header(); ?>

<div class="container content">
 <div class="main block">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <article class="page">
   <h2><?php the_title(); ?></h2>
   <p class="phone">Call us: 1-236-688-7354</p>
   <?php the_content(); ?>
  </article>
  <?php endwhile; ?>
  <?php else : ?>
  <?php echo wpautop('Sorry, no posts were found'); ?>
  <?php endif; ?>
 </div>

 <div class="side">
  <div class="block">
   <h3>Sidebar Head</h3>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus lacus sit amet orci eleifend suscipit.
    Quisque sit amet congue elit, sit amet dictum nisl</p>
   <a class="button">More</a>
  </div>
 </div>
</div>
<?php get_footer() ?>

</body>

</html>