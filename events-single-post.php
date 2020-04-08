<?php

 /*
  * Template Name: Event
  * Template Post Type: post, page
  */

  get_header(); ?>

  <!-- Markup - Loop for Events Post page -->
  <?php
    while(have_posts()) {
      the_post(); ?>
        <div class="event-single-posts">
          <div class="event-single-posts-body">
            <h2><?php the_title(); ?></h2>
            <div class="event-single-posts-content">
              <?php echo get_the_content(); ?>
            </div>
          </div>
        </div>
    <?php }
  ?>
  <!--End of Markup - Loop for Events Post page -->

<?php get_footer(); ?>

