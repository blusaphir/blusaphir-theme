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

        <!-- Main Content -->
        <section class="main-content-wrapper">
          <!-- Front-Page Main Feature -->
          <!-- PHP Loop for the Main Feature Custom Post Type -->
          <?php
            $mainFeature = new WP_Query(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'category_name' => 'front-page-main-feature',
              'posts_per_page' => 1
            ));

            while($mainFeature->have_posts()) {
              $mainFeature->the_post(); ?>
                <div class="album-one">
                  <h2><?php the_title(); ?></h2>
                  <?php the_post_thumbnail(); ?>
                  <p><?php the_excerpt(); ?><br /><br /><a class="readmore" href="">Read More</a></p>
                </div>
            <?php }
          ?>
          <!-- End of PHP Loop for the Main Feature Custom Post Type -->
          <!-- End of Main Feature--> 

          <!-- Sub Feature -->
          <!-- PHP Loop for the Sub Feature -->
          <div class="sub-albums">
            <?php 
              $subFeature = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'front-page-sub-feature',
              ));

              while($subFeature->have_posts()) {
                $subFeature->the_post(); ?>
                  <div>
                    <h2 class="sub-feature-h2"><?php the_title(); ?></h2>
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_excerpt(); ?><br /><br /><a class="readmore" href="">Read More</a></p>
                  </div>
              <?php }
            ?>
          </div>
          <!-- End of PHP Loop for the Sub Feature Custom Post Type -->
          <!-- End of Albums 2 to 5 or Sub Feature Albums -->

          <!-- Feature Artist -->
          <div class="featured-artist">
            <h3 class="featured-artist-title">Featured Artist</h3>
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/artist-1.jpg" alt="Featured Artists"><br />
              <h3 class="featured-artist-name">Skyweep</h3>
            </a>
          </div>
          <!-- End of Feature Artist -->
          
        </section>
        <!-- End of Main Content -->

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