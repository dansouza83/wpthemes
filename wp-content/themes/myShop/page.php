<?php get_header(); ?>

<?php if (is_active_sidebar('showcase')) : ?>
 <div class="row showcase">
  <div class="large-12 columns">
   <div class="callout secondary">
    <?php dynamic_sidebar('showcase'); // the position of sidebar
    ?>

   </div>
  </div>
 </div>
<?php endif; ?>
<div class="row">
 <div class="large-8 medium-8 columns">
  <div class="products row">
   <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
     <div class="large-12 columns">
      <h3><?php the_title(); ?></h3>
      <?php if (has_post_thumbnail()) : ?>
       <?php the_post_thumbnail(); ?>
       <?php the_content(); ?>
      <?php endif; ?>
     </div>
    <?php endwhile; ?>
   <?php endif; ?>
  </div>
 </div>

 <div class="large-4 medium-4 columns">
  <?php if (is_active_sidebar('sidebar')) : ?>
   <?php dynamic_sidebar('sidebar'); ?>
  <?php endif; ?>
 </div>
</div>

<?php get_footer(); ?>