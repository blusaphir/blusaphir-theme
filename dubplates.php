<?php /* Template Name: Dubplates */ ?>

<?php get_header(); ?>

<!-- Loop to get the dubplate post content -->
<div class="page-title">
  <?php
    while(have_posts()) {
      the_post(); ?>
      <h1><?php the_title(); ?></h1>
    <?php }
  ?>
</div>

<section class="dubplates-container">
  <?php 
    $dubplates = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'category_name' => 'dubplates'
    ));

    while($dubplates->have_posts()) {
      $dubplates->the_post(); ?>
        <div class="dubplates">
          <h2 class='highlight'><?php the_title(); ?></h2>
          <div class="dubplate-content"><?php echo the_content() ?></div>
        </div>
    <?php }
  ?>
</section>
  
<?php get_footer(); ?>