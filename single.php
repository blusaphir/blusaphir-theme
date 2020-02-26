<?php get_header(); ?>

  <!-- Markup - Loop for Single Post page -->
  <?php
    while(have_posts()) {
      the_post(); ?>
        <div class="single-posts">
          <div class="single-posts-body">
          <h2><?php the_title(); ?></h2>
          <?php echo get_the_content(); ?>

          <?php
            $args = array(
              'tag__in' => array($tag->term_id),
              'caller_get_posts' => 1
            );
            $my_query = new WP_Query($args);
            if($my_query->have_posts()) {
              while ($my_query->have_posts()) : $my_query->the_post();
              the_post_thumbnail();
            endwhile;
            }
          ?>

          
          </div>
        </div>
    <?php }
  ?>
  <!--End of Markup - Loop for Single Post page -->

<?php get_footer(); ?>