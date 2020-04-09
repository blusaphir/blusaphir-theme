<?php /* Template Name: Radio */ ?>

<?php get_header(); ?>

<!-- Loop to get the radio content from WP builder pages -->
<div class="page-title">
  <h1><?php the_title(); ?></h1>
</div>

<section class="radio-container">
   <div class="radio-content"><?php the_content(); ?></div>
</section>
  
<?php get_footer(); ?>