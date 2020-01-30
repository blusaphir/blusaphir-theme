<?php get_header(); ?>

      <!-- Image Slider, Subscribe and Like-->
      <section class="image-slider-subscribe-like">
          <!-- Image Slider-->
          <div class="image-slider">
            <img src="<?php echo get_template_directory_uri(); ?>/images/image-1.jpg" alt="Image Slider">
          </div>
          <!-- End of Image Slider-->

          <!-- Subscribe and Like -->
          <div class="subscribe-like">
            <div class="subscribe">
              <p>Subscribe to our mailing list</p>
              <input class="email" type="text" name="Email" placeholder="Email">
              <input class="submit" type="submit" name="Subscribe">
            </div>

            <div>
              <?php
              $homepageLikeSection = new WP_Query(array(
                'post_type' => 'like_section'
              ));

              while($homepageLikeSection->have_posts()) {
                $homepageLikeSection->the_post(); ?>
                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                <div class="like" style="background: url('<?php echo $backgroundImg[0]; ?>') 
                  no-repeat center; 
                  background-size: cover; 
                  -webkit-background-size: cover;
                  -moz-background-size: cover; 
                  -o-background-size: cover;">
                  <p>Like Page | Be the first of your friends to like this</p>
                </div>
              <?php }
              ?>
            </div>
          </div>
          <!-- End of Subscribe and Like -->
        </section>
        <!-- End of Image Slider Subscribe and Like -->

        <!-- Front Page loop for recent posts -->
        <section class="main-content-wrapper">
          <?php 
            $recentPosts = new WP_Query(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => 5,
              'category_name' => 'releases'
            ));

            while($recentPosts->have_posts()) {
              $recentPosts->the_post(); ?>
                <div class="album-one">
                  <h2><?php the_title(); ?></h2>
                  <?php the_post_thumbnail(); ?>
                  <p><?php the_excerpt(); ?><br /><br /><a class="readmore" href="">Read More</a></p>
                </div>
            <?php }
          ?>
        </section>
        <!-- End of Front Page loop for recent posts --> 

        <!-- Front Page Artists -->
        <section class="front-page-random-artist-container">
          <?php
            $randomArtists = new WP_Query(array(
              'post_type' => 'post',
              'orderby' => 'rand', 
              'posts_per_page' => 2,
              'category_name' => 'artists'
            ));

            while($randomArtists->have_posts()) {
              $randomArtists->the_post(); ?>
                <div class="front-page-random-artist">
                  <h2><?php the_title(); ?></h2>
                  <?php the_post_thumbnail(); ?>
                </div>
            <?php }
          ?>
        </section>
        <!-- End of Front Page Artists -->

        <!-- Subscribe and Like - Markup for Samller Devices -->
        <div class="mobile-subscribe-like">
          <div class="subscribe">
            <p>Subscribe to our mailing list</p>
            <input class="email" type="text" name="Email" placeholder="Email">
            <input class="submit" type="submit" name="Subscribe">
          </div>

          <div>
            <?php
            $homepageLikeSection = new WP_Query(array(
              'post_type' => 'like_section'
            ));

            while($homepageLikeSection->have_posts()) {
              $homepageLikeSection->the_post(); ?>
              <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
              <div class="like" style="background: url('<?php echo $backgroundImg[0]; ?>') 
                no-repeat center; 
                background-size: cover; 
                -webkit-background-size: cover;
                -moz-background-size: cover; 
                -o-background-size: cover;">
                <p>Like Page | Be the first of your friends to like this</p>
              </div>
            <?php }
            ?>
          </div>
        </div>

<?php get_footer(); ?>