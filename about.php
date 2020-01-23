<?php /* Template Name: About */ ?>

<?php get_header() ?>

<!-- Loop to show About Posts -->
<section class="about">
  <?php 
    $about = new WP_Query(array(
      'post_type' => 'about'
    ));

    while($about->have_posts()) {
      $about->the_post(); ?>

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