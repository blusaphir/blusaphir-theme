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
    <body>

      <!-- Header and Navbar -->
      <header>
        <!-- Site Logo -->
        <div class="logo">
          <img src="images/blu-sig.png" alt="Blue-Saphir-Logo">
        </div>
        <!-- Banners -->
        <div class="banners">
          <img src="images/banner-1.jpg" alt="Banner-Image-1">
        </div>
      </header>

      <nav class="nav-container">
        <!-- Nav Menu -->
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

      <section class="slider">

      </section>

      <script src="assets/js/app.js" type="text/javascript"></script>
    </body>
</html>
