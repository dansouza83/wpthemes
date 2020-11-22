<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('conten', get_post_format()); ?>
<?php endwhile; ?>
<?php else : ?>
  <?php echo wpauto('Sorry, there are no post') ?>
<?php endif; ?>
<?php get_footer(); ?>