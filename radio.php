<?php /* Template Name: Radio */ ?>

<?php get_header(); ?>

<!-- Loop to get the radio content from WP builder pages -->
<div class="page-title">
  <?php
    while(have_posts()) {
      the_post(); ?>
      <h1><?php the_title(); ?></h1>
    <?php }
  ?>
</div>

<section class="radio-container">
  <?php
    $radio = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'category_name' => 'radio'
    ));
  
    while($radio->have_posts()) {
      $radio->the_post(); ?>
      <div class="radio-content"><?php the_content(); ?></div>
    <?php }
  ?>
</section>
  
<?php get_footer(); ?>