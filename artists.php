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
      <section class="artist-main">
        <a href=""><img class="artist-main__icon" src="assets/images/digiblus.png" alt=""></a>
        <a href=""><img class="artist-main__icon" src="assets/images/blusltd.jpg" alt=""></a>
        <a href=""><img class="artist-main__icon" src="assets/images/syncsaphir.png" alt=""></a>
        <a href=""><img class="artist-main__icon" src="assets/images/blusaphir2.png" alt=""></a>
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
