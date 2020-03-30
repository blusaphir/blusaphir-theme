<?php /* Template Name: Release - DigiBlus */?>

<?php get_header()?>

<!-- Loop to get the page title -->
<div class="page-title">
  <?php
    while(have_posts()) {
      the_post(); ?>
      <h1><?php the_title(); ?></h1>
    <?php }
  ?>
</div>
<!-- End of Loop to get the page title -->

<!-- Loop to show all artist posts as a grid gallery -->
<section class="artist-grid">
  <?php 
    $artistDigiBlus = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'category_name' => 'release-digital-blus'
    ));

    while($artistDigiBlus->have_posts()) {
      $artistDigiBlus->the_post(); ?>
        <div>
          <h2 class='highlight'><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
    <?php }
  ?>
</section>
<!-- End of loop to show all artist posts as a grid gallery -->    

<?php get_footer()?>