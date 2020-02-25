<?php get_header(); ?>

  <!-- Markup - Loop for Single Post page -->
  <?php
    while(have_posts()) {
      the_post(); ?>
        <div class="single-posts">
          <div class="single-posts-body">
          <h2><?php the_title(); ?></h2>
          <?php echo get_the_content(); ?>
          <?php the_tags(); ?>
          </div>
        </div>
    <?php }
  ?>
  <!--End of Markup - Loop for Single Post page -->

<?php get_footer(); ?>
