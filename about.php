<?php /* Template Name: About */ ?>

<?php get_header() ?>

<!-- Loop to show Posts from the About Page -->
<section class="about">
  <?php
    while(have_posts()) {
      the_post(); ?>

      <div class="content-wrapper">
        <p><?php echo get_the_content(); ?></p>
      </div>
      
    <?php }
  ?>
</section>
<!-- End of Loop to show About Posts -->

<?php get_footer() ?>