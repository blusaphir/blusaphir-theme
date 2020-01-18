<?php /* Template Name: Artists - DigiBlus */?>

<?php get_header()?>

  <!-- Loop to show all artist posts as a grid gallery -->
  <section class="artist-grid">
    <?php 
      $artistDigiBlus = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'artist_digi_blus'
      ));

      while($artistDigiBlus->have_posts()) {
        $artistDigiBlus->the_post(); ?>
          <div>
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
      <?php }
    ?>
  </section>
  <!-- End of loop to show all artist posts as a grid gallery -->    

<?php get_footer()?>