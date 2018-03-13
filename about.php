<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>

      <!-- Header and Navbar -->
      <header>
        <!-- Site Logo -->
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/blu-sig.png" alt="">
        </div>

        <!-- Banners -->
        <div class="banners">
          <img src="<?php echo get_template_directory_uri(); ?>/images/banner-1.jpg" alt="">
        </div>

        <div class="social-links">
          <ul>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.png" alt="Facebook"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png" alt="YouTube"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/spotify-icon.png" alt="Spotify"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/soundcloud-icon.png" alt="Sound Cloud"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" alt="Twitter"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/google-icon.png" alt="Google+"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/blogger-icon.png" alt="Blogger"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/mixcloud-icon.png" alt="Mix Cloud"></a></li>
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
            <li><a href="index.php">home</a></li>
            <li><a href="artists.php">artists</a></li>
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
            <input class="search-icon" type="image" name="search-icon" value="Search" src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png">
          </form>
        </div>
      </nav>

      <!-- Main Feature -->
      <section class="about">
        <div class="about-feature about-feature-one">
          <img class="about-feature__img" src="assets/images/blusaphir.jpg" alt="">
          <div class="content-wrapper">
            <h2 class="about-feature__heading">Blu Saphir</h2>
            <p class="about-feature__info">Blu Saphir Recordings was created in 2005 on the grounds of improving and expanding the variety of sounds that drum and bass has to offer. Jay Rome got in contact with Muffler, Kaleb, and Contour back in 2004. He loved their music and decided to work with them on a new label to release proper music. “Twintone and I had completed a tune entitled I Try, which had such good feedback that Muffler decided to do a remix. We had these tunes ready for the label, so we started Blu Saphir Recordings to release it.”

            Contour, Twintone, DJ Rome (the label owner's moniker), and Kaleb went on to produce two successful releases – Contour on Synapse and Twintone & DJ Rome on I Try for release number one; followed by a duo produced by Kaleb & Contour for BLUS002 – Straight Ahead and Hold My Love.

            Following the immense attention these two releases received, the third release gave the remix treatment to the first release – Muffler reworking I Try and Bungle rearranging Synapse. Blu Saphir continued acquiring an A-list of talent for its roster, including Aspect, Electrosoul System, DK Foyer & Jebar, Chino, Submorphics, The Ego, DJ Roots, Peyo, Cloud Nine, Soul Mozaics and W.T.</p>
          </div>
        </div>

        <div class="about-feature about-feature-two">
          <img class="about-feature__img" src="assets/images/blusltd.jpg" alt="">
          <div class="content-wrapper">
            <h2 class="about-feature__heading">Blu Saphir Limited</h2>
            <p class="about-feature__info">As evolution would have it, the force behind the Blu Saphir camp wasn't done – 2013 dawned a new era of techy, deep, dark and rolling drum 'n bass in the amalgamation of Blu Saphir LTD. Introducing a pair of thunderous rollers by Japan's Hayato, the imprint has gone on to release bangers by DJ Snare, Monologue, DJ Chap, Roy Green & Protone, and NME Click. Up & coming release by DJ Chap & DJ Snare.</p>
          </div>
        </div>

        <div class="about-feature about-feature-three">
          <img class="about-feature__img" src="assets/images/digiblus.png" alt="">
          <div class="content-wrapper">
            <h2 class="about-feature__heading">Digital Blus</h2>
            <p class="about-feature__info">As Blu Saphir matured, Digital Blus was formed three years later in 2008 with the mission in mind to release the highest quality drum 'n bass in digital format. The focus was shifted to cater to upcoming producers putting out quality releases that have yet to see a vinyl release. The digital label was widely accepted and praised by the likes of Chrissy Chris (1XTRA), DJ Marky, Fabio, Ash Attack, Random Movement, Specific, Submorphics and many more. From this day on, all Blu Saphir tunes would be available through Beatport, iTunes, Finetunes, and Trackitdown.</p>
          </div>
        </div>

        <div class="about-feature about-feature-four">
          <img class="about-feature__img" src="assets/images/syncsaphir.png" alt="">
          <div class="content-wrapper">
            <h2 class="about-feature__heading">Sync:Saphir</h2>
            <p class="about-feature__info">After numerous successful releases on both labels, label owners, Jay Rome of Blu Saphir and Syncopix of (you guessed it!) Syncopix Recordings have combined forced to create a new collaboration, Sync:Saphir.

            “The goal behind Sync:Saphir is to push out some fresh minimal, deep and liquid drum and bass music by both talent new artists and well known producers,” Jay Rome of Blu Saphir goes on - “At first , I had the idea to release an EP with Syncopix, but then we decided to make a bigger wave with an LP and two sampler vinyls. The  SYNC:SAPHIR LP will be a double CD album.  On the other CD we will present 13 tracks by both well known and fresh newcomer producers.”</p>
          </div>
        </div>
      </section>

      <!-- Social and Subscribe -->
      <section class="social">
        <div class="subscribe">
          <h4>Subscribe to our mailing list</h4>
          <input class="email" type="text" name="Email" placeholder="Email">
          <input class="submit" type="submit" name="Subscribe">
        </div>

        <div class="social-links">
          <ul>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.png" alt="Facebook"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png" alt="YouTube"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/spotify-icon.png" alt="Spotify"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/soundcloud-icon.png" alt="Sound Cloud"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" alt="Twitter"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/google-icon.png" alt="Google+"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/blogger-icon.png" alt="Blogger"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/mixcloud-icon.png" alt="Mix Cloud"></a></li>
          </ul>
        </div>
      </section>

      <!-- Footer -->
      <footer><p>All content © Blu Saphir Recordings Limited 2018. All Rights Reserved.</p>
        <p>Website designed and developed by Darshan Patel and Jason Williams.</p>
      </footer>

      <!-- JavaSscript File -->
      <script src="<?php echo get_template_directory_uri(); ?>/js/app.js" type="text/javascript"></script>
    </body>
</html>
