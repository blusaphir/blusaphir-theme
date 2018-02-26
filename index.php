<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <!--
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <link rel="stylesheet" type="text/css" href="assets/styles/css/styles.css">
      <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
      <title>Blu Saphir</title>
    </head>
    -->

    <body>

      <!-- Header and Navbar -->
      <header>
        <!-- Site Logo -->
        <div class="logo">
          <img src="assets/images/blu-sig.png" alt="">
        </div>

        <!-- Banners -->
        <div class="banners">
          <img src="assets/images/banner-1.jpg" alt="">
        </div>

        <div class="social-links">
          <ul>
            <li><a href=""><img src="assets/images/fb-icon.png" alt="Facebook"></a></li>
            <li><a href=""><img src="assets/images/youtube-icon.png" alt="YouTube"></a></li>
            <li><a href=""><img src="assets/images/spotify-icon.png" alt="Spotify"></a></li>
            <li><a href=""><img src="assets/images/soundcloud-icon.png" alt="Sound Cloud"></a></li>
            <li><a href=""><img src="assets/images/twitter-icon.png" alt="Twitter"></a></li>
            <li><a href=""><img src="assets/images/google-icon.png" alt="Google+"></a></li>
            <li><a href=""><img src="assets/images/blogger-icon.png" alt="Blogger"></a></li>
            <li><a href=""><img src="assets/images/mixcloud-icon.png" alt="Mix Cloud"></a></li>
          </ul>
        </div>

        <!-- Hamburger Menu Icon -->
        <div id="hamburger" class="hamburger-container">
          <div class="hamburger">
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
          </div>
        </div>
      </header>

      <!-- Navbar -->
      <nav id="nav" class="nav-container">
        <div class="nav-bar">
          <ul>
            <li><a href="">home</a></li>
            <li><a href="">artist</a></li>
            <li><a href="">about</a></li>
            <li><a href="">events</a></li>
            <li><a href="">radio</a></li>
            <li><a href="">dubplates</a></li>
            <li><a href="">release</a></li>
            <li><a href="">contact</a></li>
          </ul>

          <!-- Search Box -->
          <form class="search" action="/" method="post">
            <input class="search-box" type="text" name="search" placeholder="Search">
            <input class="search-icon" type="image" name="search-icon" value="Search" src="assets/images/search-icon.png">
          </form>
        </div>
      </nav>

      <!-- Image Slider -->
      <section class="image-slider-container">
        <div class="slider-box">
          <img src="assets/images/image-1.jpg" alt="">
          <img src="assets/images/image-2.jpg" alt="">
          <img src="assets/images/image-3.jpg" alt="">
          <img src="assets/images/image-4.jpg" alt="">
          <img src="assets/images/image-5.jpg" alt="">
          <img src="assets/images/image-6.jpg" alt="">
          <img src="assets/images/image-7.jpg" alt="">
          <img src="assets/images/image-8.png" alt="">
          <img src="assets/images/image-9.jpg" alt="">
          <img src="assets/images/image-10.jpg" alt="">
          <img src="assets/images/image-11.jpg" alt="">
        </div>
      </section>

      <!-- Main Content - All Features -->
      <div class="main-content">
        <!-- Featured Aritist -->
        <section class="featured-artist">
          <h3 class="featured-artist-title">Featured Artist</h3>
          <img src="assets/images/artist-1.jpg" alt="Featured Artists">
          <h3 class="featured-artist-name">Skyweep</h3>
        </section>

        <!-- Main Feature -->
        <section class="main-feature">
          <h2>MILKYWAY - THE FUTURE IS HERE EP</h2>
          <img src="assets/images/milkyway.jpg" alt="Milkway - The Future is here EP">
          <p>Milkyway is the collaboration of a relatively new duo of electronica producers from Ukraine. Beginning their journey in 2016, the couple have already been picked up by drum 'n bass heavyweights, Hospital Recordings, and its' sister label, Med School. Now on Blu Saphir Recordings, prepare to dance and get electrified.BLUS034 – MILKYWAY – THE FUTURE IS HERE EPA. THE FUTURE IS HEREB. MINTC. UNICORNS AND RAINBOWSSupport by : DJ MARKY, SIMON BASSLINE SMITH, MUFFLER, C4C, RANDOM MOVEMENT...Milkyway's debut EP on Blu Saphir is a fantastic one! The Future is Here ignites the speakers first with wavy-feeling piano chords to put the listener into meditative state. The air rises in the background...
          <br /><br />
          <a href="">Read More</a>
          </p>
        </section>

        <!-- Sub Feature -->
        <section class="sub-feature">
          <div class="sub-feature-one">
            <h2 class="sub-feature-h2">Various - Magdalena EP (Blu Saphir 033)</h2>
            <img src="assets/images/magdalena.jpg" alt="Magdalena EP">
            <p>The 33rd release of Blu Saphir, the Magdalena EP surges blissfully forward with a quartet of varied sounds, championed by Rafau Etamski, Skore, Dorian, Carter, Salem, FlashbackFm, and Readsense. Supported by some of the biggest players in the game, including DJ Hype, Nicky Blackmarket, S.P.Y., Noisia and many more, Blu Saphir looks to steadily exceed quality on each release. BLUS033 – Magdalena EP A. Dorian & Skore – Spring Fever B. Rafau Etamski – Feel Me C. Carter & Salem – Mag...
            <br /><br />
            <a href="">Read More</a>
            </p>
          </div>

          <div class="sub-feature-two">
            <h2>FlashbackFM & Archemy - Had My Way EP (Digital Blus 043)</h2>
            <img src="assets/images/hadmyway.jpg" alt="Had My Way EP">
            <p>The mastermind known as Vladimir Medvedev is better known by his moniker, FlashbackFm. The Russian is signed to a large slew of labels, including Liquid Brilliants, DNBB, WOW Signal, Gold Plate, Liquid Tones, Liquid Drops, Celsius, Influenza, Geometry, Soul Deep, and Live History. This time pairing up with Archemy for a quadruple drop of liquid floor-fillers for the newest on Blu Saphir's sister label, Digital Blus.DIGIBLUS043 – FLASHBACKFM & ARCHEMY HAD MY WAY EPA. NEVER LET ME GO B. DO W...
            <br /><br />
            <a href="">Read More</a>
            </p>
          </div>

          <div class="sub-feature-three">
            <h2>Western Sea & Liquid Waves ft. Hannah Eve - Inside You / Love Above All</h2>
            <img src="assets/images/westernseaandliquidwaves.jpg" alt="Western Sea & Liquid Waves EP">
            <p>Switzerland and Russia unite as Western Sea and Liquid Waves come through on Digital Blus’s 42nd release. It’s the answer to the universe, you know. The two have been putting forth quite an effort, with upcoming releases on Inform Records and Live History, in addition to remaining a staple on Blu Saphir’s digital imprint. Western Sea has collaborated with Cnof for Fizzy Beats. Keep your eyes peeled for Liquid Waves’s efforts on Atmomatix and Soul Deep. Featured on Love Above All, Hanna...
            <br /><br />
            <a href="">Read More</a>
            </p>
          </div>

          <div class="sub-feature-four">
            <h2>Lao Wai - Wiping Brains EP (Blu Saphir Limited 009)</h2>
            <img src="assets/images/laowai.jpg" alt="Lao Wai - Wiping Brains EP">
            <p>Lao Wai is smashing it proper all over the drum 'n bass circuit. From playing gigs around the world (the man just recently tore up Italy!) to releases on Natured Beatz and Horizons Music (alongside long time collaborator, Release), the future looks bright for this rising star.As seen with this EP, Lao Wai does it dark, deep and can take the music to the deepest confines of your soul – a truly fresh sound amidst much of the cookie cutter cut-n-paste these days.LAO WAI – WIPING BRAINS EP – B...
            <br /><br />
            <a href="">Read More</a>
            </p>
          </div>
        </section>
      </div>

      <!-- Social and Subscribe -->
      <section class="social">
        <div class="subscribe">
          <h4>Subscribe to our mailing list</h4>
          <input class="email" type="text" name="Email" placeholder="Email">
          <input class="submit" type="submit" name="Subscribe">
        </div>

        <div class="social-links">
          <ul>
            <li><a href=""><img src="assets/images/fb-icon.png" alt="Facebook"></a></li>
            <li><a href=""><img src="assets/images/youtube-icon.png" alt="YouTube"></a></li>
            <li><a href=""><img src="assets/images/spotify-icon.png" alt="Spotify"></a></li>
            <li><a href=""><img src="assets/images/soundcloud-icon.png" alt="Sound Cloud"></a></li>
            <li><a href=""><img src="assets/images/twitter-icon.png" alt="Twitter"></a></li>
            <li><a href=""><img src="assets/images/google-icon.png" alt="Google+"></a></li>
            <li><a href=""><img src="assets/images/blogger-icon.png" alt="Blogger"></a></li>
            <li><a href=""><img src="assets/images/mixcloud-icon.png" alt="Mix Cloud"></a></li>
          </ul>
        </div>
      </section>

      <!-- Footer -->
      <footer><p>All content © Blu Saphir Recordings Limited 2018. All Rights Reserved.</p>
        <p>Website designed and developed by Darshan Patel and Jason Williams.</p>
      </footer>

      <!-- JavaSscript File -->
      <script src="js/app.js" type="text/javascript"></script>
    </body>
</html>
