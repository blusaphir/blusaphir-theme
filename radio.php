<?php /* Template Name: Radio */ ?>

<?php get_header(); ?>

<!-- Loop to get the radio content from WP builder pages -->
<div class="page-title">
  <h1><?php the_title(); ?></h1>
</div>

<section class="radio-container">
  <?php
    while(have_posts()) {
      the_post(); ?>
      <div class="radio-content"><?php the_content(); ?></div>
    <?php }
  ?>
</section>
  
<?php get_footer(); ?>