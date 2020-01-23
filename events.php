<?php /* Template Name: Events */ ?>

<?php get_header(); ?>

<!-- Main Content -->

<!-- Loop - Event Custom Post's -->
<div class="eventsgrid">
  <?php 
    $eventspageEvents = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'events'
    ));

    while($eventspageEvents->have_posts()) {
      $eventspageEvents->the_post(); ?>
      <div class="event">
        <h3><?php the_title(); ?></h3>
        <?php the_post_thumbnail(); ?>
      </div>
    <?php }
  ?> 
</div>
<!-- End of Loop - Event Custom Post's -->
<!-- End of Main Content -->

<?php get_footer(); ?>