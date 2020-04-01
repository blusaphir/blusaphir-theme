<?php get_header(); ?>

  <section class="search-results">

    <h1>Search Results</h1>
    <?php
      while(have_posts()) {
        the_post(); ?>
        <?php the_content(); ?>
      <?php }
  ?>

  </section>

<?php get_footer(); ?>