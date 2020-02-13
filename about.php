<?php /* Template Name: About */ ?>

<?php get_header() ?>

<!-- Loop to show "About" Posts on the About Page -->
<section class="about">
  <?php 
    $aboutPosts = new WP_Query(array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'category_name' => 'about'
    ));

    while($aboutPosts->have_posts()) {
      $aboutPosts->the_post(); ?>
        <div class="content-wrapper">
          <h2><?php the_title(); ?></h2>
          <?php the_post_thumbnail(); ?>
          <p><?php echo get_the_content(); ?></p>
        </div>
    <?php }
  ?>
</section>
<!-- End of Loop to show About Posts -->

<?php get_footer() ?>