<?php get_header(); ?>

  <?php
    while(have_posts()) {
      the_post(); ?>
        <div class="single-posts">
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
          
          if ($attached_images) { ?>

          <!-- This is to get and display the image ONLY from the post content -->
          <?php 
            preg_match_all('/(<img [^>]*>)/', get_the_content(), $images);
            for($i=0; isset($images[1]) && $i < count($images[1]); $i++) {
                echo $images[1][$i];
            }
          ?>
          
          <!-- This removes the image from the post content allowing ONLY to display the text -->
          <p>
            <?php 
              $content = get_the_content();
              $content = preg_replace("/<img[^>]+\>/i", " ", $content);          
              $content = apply_filters('the_content', $content);
              $content = str_replace(']]>', ']]>', $content);
              echo $content;
            ?>
          </p>
          
          <!-- If there is no image within the content then the "featured" image will be displayed with the rest of the content -->
          <?php } else if (!$attached_images) {
            the_post_thumbnail(); ?>
            <p><?php echo get_the_content(); ?></p>
          <?php }

          ?>
        </div>
    <?php }
  ?>

<?php get_footer(); ?>
