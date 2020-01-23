<?php get_header(); ?>

  <!-- Markup - Loop for Single Post page -->
  <?php
    while(have_posts()) {
      the_post(); ?>
        <div class="single-posts">
          <h2><?php the_title(); ?></h2>

          <div class="single-posts-body">
          <?php echo get_the_content(); ?>
          </div>
          
        </div>
    <?php }
  ?>
  <!--End of Markup - Loop for Single Post page -->

<?php get_footer(); ?>
