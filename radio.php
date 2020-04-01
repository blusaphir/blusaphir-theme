<?php /* Template Name: Radio */ ?>

<?php get_header(); ?>

<!-- Loop to get the content from WP builder pages -->
<section class="radio-container">
  <?php
      while(have_posts()) {
        the_post(); ?>
        <div class="radio-content"><?php the_content(); ?></div>
      <?php }
  ?>
</section>
  
<?php get_footer(); ?>