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
      <h1 class="artist-headline">Artist's - Digital Blu's</h1>

      <section class="artist_digiblus">
        <div>
          <p>Cnof</p>
          <a href=""><img src="assets/images/artists/digi-blus/cnof.jpg" alt=""></a>
        </div>

        <div>
          <p>Paul SG</p>
          <a href=""><img src="assets/images/artists/digi-blus/paul-sg.png" alt=""></a>
        </div>

        <div>
          <p>ARTL</p>
          <a href=""><img src="assets/images/artists/digi-blus/artl.jpg" alt=""></a>
        </div>

        <div>
          <p>Velocity</p>
          <a href=""><img src="assets/images/artists/digi-blus/velocity.jpg" alt=""></a>
        </div>

        <div>
          <p>Euphorics</p>
          <a href=""><img src="assets/images/artists/digi-blus/euphorics.jpg" alt=""></a>
        </div>

        <div>
          <p>Sunny Crimea</p>
          <a href=""><img src="assets/images/artists/digi-blus/sunny-crimea.jpg" alt=""></a>
        </div>

        <div>
          <p>Rizla</p>
          <a href=""><img src="assets/images/artists/digi-blus/rizla.png" alt=""></a>
        </div>

        <div>
          <p>Dave Owen</p>
          <a href=""><img src="assets/images/artists/digi-blus/dave-owen.jpg" alt=""></a>
        </div>

        <div>
          <p>Krot</p>
          <a href=""><img src="assets/images/artists/digi-blus/krot.jpg" alt=""></a>
        </div>

        <div>
          <p>LaMeduza</p>
          <a href=""><img src="assets/images/artists/digi-blus/lameduza.jpg" alt=""></a>
        </div>

        <div>
          <p>Western Sea</p>
          <a href=""><img src="assets/images/artists/digi-blus/western-sea.png" alt=""></a>
        </div>

        <div>
          <p>M Jazzy</p>
          <a href=""><img src="assets/images/artists/digi-blus/m-jazzy.jpg" alt=""></a>
        </div>

        <div>
          <p>DJ Andrezz</p>
          <a href=""><img src="assets/images/artists/digi-blus/dj-andrezz.jpg" alt=""></a>
        </div>

        <div>
          <p>Sinistarr</p>
          <a href=""><img src="assets/images/artists/digi-blus/sinistarr.jpg" alt=""></a>
        </div>

        <div>
          <p>Nummix</p>
          <a href=""><img src="assets/images/artists/digi-blus/nummix.png" alt=""></a>
        </div>

        <div>
          <p>Simplification</p>
          <a href=""><img src="assets/images/artists/digi-blus/simplification.jpg" alt=""></a>
        </div>

        <div>
          <p>Underdog</p>
          <a href=""><img src="assets/images/artists/digi-blus/underdog.jpg" alt=""></a>
        </div>

        <div>
          <p>NotioN</p>
          <a href=""><img src="assets/images/artists/digi-blus/notion.jpg" alt=""></a>
        </div>

        <div>
          <p>Skyweep</p>
          <a href=""><img src="assets/images/artists/digi-blus/skyweep.jpg" alt=""></a>
        </div>

        <div>
          <p>DJ Clart</p>
          <a href=""><img src="assets/images/artists/digi-blus/dj-clart.jpg" alt=""></a>
        </div>

        <div>
          <p>Rowpieces</p>
          <a href=""><img src="assets/images/artists/digi-blus/rowpieces.png" alt=""></a>
        </div>

        <div>
          <p>Cutworks</p>
          <a href=""><img src="assets/images/artists/digi-blus/cutworks.jpg" alt=""></a>
        </div>

        <div>
          <p>Kasper</p>
          <a href=""><img src="assets/images/artists/digi-blus/kasper.jpg" alt=""></a>
        </div>

        <div>
          <p>Flowrian</p>
          <a href=""><img src="assets/images/artists/digi-blus/flowrian.jpg" alt=""></a>
        </div>

        <div>
          <p>Loz Contreras</p>
          <a href=""><img src="assets/images/artists/digi-blus/loz-contreras.jpg" alt=""></a>
        </div>

        <div>
          <p>Capsika</p>
          <a href=""><img src="assets/images/artists/digi-blus/capsika.jpg" alt=""></a>
        </div>

        <div>
          <p>Edward Oberon</p>
          <a href=""><img src="assets/images/artists/digi-blus/edward-oberon.jpg" alt=""></a>
        </div>

        <div>
          <p>Cybass</p>
          <a href=""><img src="assets/images/artists/digi-blus/cybass.jpg" alt=""></a>
        </div>

        <div>
          <p>The Ego</p>
          <a href=""><img src="assets/images/artists/digi-blus/the-ego.jpg" alt=""></a>
        </div>

        <div>
          <p>Furney</p>
          <a href=""><img src="assets/images/artists/digi-blus/furney.jpg" alt=""></a>
        </div>

        <div>
          <p>DJ Roots</p>
          <a href=""><img src="assets/images/artists/digi-blus/dj-roots.jpg" alt=""></a>
        </div>

        <div>
          <p>DJ Chap</p>
          <a href=""><img src="assets/images/artists/digi-blus/dj-chap.jpg" alt=""></a>
        </div>

        <div>
          <p>Jay Rome</p>
          <a href=""><img src="assets/images/artists/digi-blus/jay-rome.jpg" alt=""></a>
        </div>

        <div>
          <p>Kjell</p>
          <a href=""><img src="assets/images/artists/digi-blus/kjell.jpg" alt=""></a>
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
