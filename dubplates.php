<?php /* Template Name: Dubplates */ ?>

<?php get_header(); ?>

<!-- Loop to get the content from WP builder pages -->
<section class="dubplates">
  <?php
      while(have_posts()) {
        the_post(); ?>
        <?php the_content(); ?>
      <?php }
  ?>
</section>
  
<?php get_footer(); ?>