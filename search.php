<?php get_header(); ?>

  <section class="search-results">

    <h1>Search Results</h1>
    <?php
      while(have_posts()) {
        the_post(); ?>
        <div>
          <h2 class='highlight'><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
      <?php }
  ?>

  </section>

<?php get_footer(); ?>