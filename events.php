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
            <li><a href="">artists</a></li>
            <li><a href="about.php">about</a></li>
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
      <section class="events">
        <div class="event">
          <p class="event__info">Blu Saphir Labelnight @ Roxy, Vienna (14.05.2016)</p>
          <img class="event__img" src="assets/images/events/event-27.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">JAZZSTICKS LABELNIGHT @ ROXY CLUB, VIENNA (12.02.2016)</p>
          <img class="event__img" src="assets/images/events/event-26.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">BEAT IT @ FLEX (11.02.2016)</p>
          <img class="event__img" src="assets/images/events/event-25.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">JAZZSTICKS LABELNIGHT @ ROXY CLUB, VIENNA (13.11.2015)</p>
          <img class="event__img" src="assets/images/events/event-24.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">BEAT IT @ FLEX (12.11.2015)</p>
          <img class="event__img" src="assets/images/events/event-23.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">RAVE-VOLUTION - ROMANIA (26-27.06.2015)</p>
          <img class="event__img" src="assets/images/events/event-22.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">BEAT IT @ FLEX (14.11.2014)</p>
          <img class="event__img" src="assets/images/events/event-21.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">BEAT IT! @ FLEX (24.07.2014)</p>
          <img class="event__img" src="assets/images/events/event-20.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">G´s BDAY BASH (NITRI - SLOVAKIA)</p>
          <img class="event__img" src="assets/images/events/event-19.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">LET IT ROLL (CZECH OPEN AIR)</p>
          <img class="event__img" src="assets/images/events/event-18.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">BEAT IT @ FLEX</p>
          <img class="event__img" src="assets/images/events/event-17.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">SIGNALL_FM @ BRATISLAVA (12.10.2012)</p>
          <img class="event__img" src="assets/images/events/event-16.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">SUN&BASSDRIVE 2012</p>
          <img class="event__img" src="assets/images/events/event-15.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">CHROME! @ FFM, GERMANY (30.06.2012)</p>
          <img class="event__img" src="assets/images/events/event-14.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">VOLLKONTAKT @ FLUC, WIEN (06.06.2012)</p>
          <img class="event__img" src="assets/images/events/event-13.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">JAZZSTICKS LABELNIGHT @ COMO, VIENNA (02.06.2012)</p>
          <img class="event__img" src="assets/images/events/event-12.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">GLOBAL BEATZ vs. SCHALLWARE @ POSTGARAGE - GRAZ, AT</p>
          <img class="event__img" src="assets/images/events/event-11.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">JAY ROME @ BEAT IT!, FLEX - VIENNA (31.05.2012)</p>
          <img class="event__img" src="assets/images/events/event-10.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">JAY ROME @ DUTCH&BASS, SAO PAULO, BRAZIL</p>
          <img class="event__img" src="assets/images/events/event-9.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">160+ vs. Blu Saphir (08.05.2012)</p>
          <img class="event__img" src="assets/images/events/event-8.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">JAY ROME @ NEBULA, CASA BABYLON (05.05.2012)</p>
          <img class="event__img" src="assets/images/events/event-7.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">JAY ROME @ REWIND, SANTIAGO DE CHILE - CHILE (27.04.2012)</p>
          <img class="event__img" src="assets/images/events/event-6.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">BLU SAPHIR SPECIAL EDITION @ JUNGLE ATTACK, MACAÉ - RIO DE JANEIRO (14.04.2012)</p>
          <img class="event__img" src="assets/images/events/event-5.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">FUTURE MASHUP @ MACHBAR, KLOSTERNEUBURG, AT (16.03.2012)</p>
          <img class="event__img" src="assets/images/events/event-4.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">LIQUID FLIGHTS presents JAY ROME ( BLU SAPHIR ) (26.01.2012)</p>
          <img class="event__img" src="assets/images/events/event-3.jpeg" alt="">
        </div>

        <div class="event">
          <p class="event__info">NU:SOUL presents MUFFLER vs. BIG BUD (10.12.2011)</p>
          <img class="event__img" src="assets/images/events/event-2.jpg" alt="">
        </div>

        <div class="event">
          <p class="event__info">THRU THE NIGHT (31.10.2011)</p>
          <img class="event__img" src="assets/images/events/event-1.jpg" alt="">
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
