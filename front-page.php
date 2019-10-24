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

            <div class ="like">
              <p>Like Page | Be the first of your friends to like this</p>
            </div>
          </div>
          <!-- End of Subscribe and Like -->
        </section>
        <!-- End of Image Slider Subscribe and Like -->

        <!-- Main Content -->
        <section class="main-content-wrapper">
          <!-- Album 1 or Main Feature Album -->

          <!-- PHP Loop for the Main Feature Custom Post Type -->
          <?php 
            $homepageMainFeature = new WP_Query(array(
              'posts_per_page' => 1,
              'post_type' => 'main_feature'
            ));

            while($homepageMainFeature->have_posts()) {
              $homepageMainFeature->the_post(); ?>
                <div class="album-one">
                  <h2><?php the_title(); ?></h2>
                  <?php the_post_thumbnail(); ?>
                  <p><?php echo get_the_content(); ?>
                  <br /><br />
                  <a class="readmore" href="">Read More</a>
                  </p>
                </div>
            <?php }
          ?>
          <!-- End of PHP Loop for the Main Feature Custom Post Type -->
          <!-- End of Album 1 or Main Feature Album -->

          <!-- Albums 2 to 5 or Sub Feature Albums -->
          <div class="sub-albums">
            <div class="album-two">
              <h2 class="sub-feature-h2">Various - Magdalena EP (Blu Saphir 033)</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/magdalena.jpg" alt="Magdalena EP">
              <p>The 33rd release of Blu Saphir, the Magdalena EP surges blissfully forward with a quartet of varied sounds, championed by Rafau Etamski, Skore, Dorian, Carter, Salem, FlashbackFm, and Readsense. Supported by some of the biggest players in the game, including DJ Hype, Nicky Blackmarket, S.P.Y., Noisia and many more, Blu Saphir looks to steadily exceed quality on each release. BLUS033 – Magdalena EP A. Dorian & Skore – Spring Fever B. Rafau Etamski – Feel Me C. Carter & Salem – Mag...
              <br /><br />
              <a class="readmore" href="">Read More</a>
              </p>
            </div>

            <div class="album-three">
              <h2>FlashbackFM & Archemy - Had My Way EP (Digital Blus 043)</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/hadmyway.jpg" alt="Had My Way EP">
              <p>The mastermind known as Vladimir Medvedev is better known by his moniker, FlashbackFm. The Russian is signed to a large slew of labels, including Liquid Brilliants, DNBB, WOW Signal, Gold Plate, Liquid Tones, Liquid Drops, Celsius, Influenza, Geometry, Soul Deep, and Live History. This time pairing up with Archemy for a quadruple drop of liquid floor-fillers for the newest on Blu Saphir's sister label, Digital Blus.DIGIBLUS043 – FLASHBACKFM & ARCHEMY HAD MY WAY EPA. NEVER LET ME GO B. DO W...
              <br /><br />
              <a class="readmore" href="">Read More</a>
              </p>
            </div>

            <div class="album-four">
              <h2>Western Sea & Liquid Waves ft. Hannah Eve - Inside You / Love Above All</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/westernseaandliquidwaves.jpg" alt="Western Sea & Liquid Waves EP">
              <p>Switzerland and Russia unite as Western Sea and Liquid Waves come through on Digital Blus’s 42nd release. It’s the answer to the universe, you know. The two have been putting forth quite an effort, with upcoming releases on Inform Records and Live History, in addition to remaining a staple on Blu Saphir’s digital imprint. Western Sea has collaborated with Cnof for Fizzy Beats. Keep your eyes peeled for Liquid Waves’s efforts on Atmomatix and Soul Deep. Featured on Love Above All, Hanna...
              <br /><br />
              <a class="readmore" href="">Read More</a>
              </p>
            </div>

            <div class="album-five">
              <h2>Lao Wai - Wiping Brains EP (Blu Saphir Limited 009)</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/laowai.jpg" alt="Lao Wai - Wiping Brains EP">
              <p>Lao Wai is smashing it proper all over the drum 'n bass circuit. From playing gigs around the world (the man just recently tore up Italy!) to releases on Natured Beatz and Horizons Music (alongside long time collaborator, Release), the future looks bright for this rising star.As seen with this EP, Lao Wai does it dark, deep and can take the music to the deepest confines of your soul – a truly fresh sound amidst much of the cookie cutter cut-n-paste these days.LAO WAI – WIPING BRAINS EP – B...
              <br /><br />
              <a class="readmore" href="">Read More</a>
              </p>
            </div>
          </div>
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

          <div class="like">
            <p>Like Page | Be the first of your friends to like this</p>
          </div>
        </div>

<?php get_footer(); ?>