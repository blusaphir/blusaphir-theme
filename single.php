<?php get_header(); ?>

<?php
    while(have_posts()) {
      the_post(); ?>
        <div>
          <h2><?php the_title(); ?></h2>
          <?php the_post_thumbnail(); ?>
          <?php echo get_the_content(); ?>
        </div>
    <?php }
  ?>

<?php get_footer(); ?>