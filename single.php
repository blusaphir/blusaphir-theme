<?php get_header(); ?>

  <?php
    while(have_posts()) {
      the_post(); ?>
        <div>
          <h2><?php the_title(); ?></h2>

          <?php
            $args = array( 
            'post_type' => 'attachment', 
            'post_mime_type' => 'image',
            'numberposts' => -1, 
            'post_status' => null, 
            'post_parent' => $post->ID 
          ); 

          $attached_images = get_posts( $args );

          if ($attached_images) {
            echo get_the_content();
          } else if (!$attached_images) {
            the_post_thumbnail();
            echo get_the_content();
          }

          ?>
        </div>
    <?php }
  ?>

<?php get_footer(); ?>
