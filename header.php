<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="UTF-8">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <script type="text/javascript"> var ABSPATH = "<?php bloginfo('template_url'); ?>"; </script>

        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <body>

      <!-- Mobile View Search Box -->
      <div class="mobile-search-box">
        <?php get_search_form()?>
      </div>
      <!-- End of Mobile View Search Box -->

      <!-- Header -->
      <header>
        <!-- Site Logo -->
        <div class="logo">
        <a href="<?php echo site_url('/home/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blu-sig.png" alt="Blu Saphire"></a>
        </div>

        <!-- Site Heading -->
        <div class="heading">
          <h2>Blu Saphir <br /><span class="recordings">Recordings<span></h2>
        </div>

        <!-- Banners -->
        <div class="image-banners-container">
          <?php 
            $imageBanners = new WP_Query(array(
              'post_type' => 'post',
              'orderby' => 'rand',
              'posts_per_page' => 1,
              'category_name' => 'image-banners'
            ));

            while($imageBanners->have_posts()) {
              $imageBanners->the_post(); ?>
                <?php echo get_the_content()?>
            <?php }
          ?>
        </div>

        <div class="search-icon-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" alt="search-icon-mobile">
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
      <!-- End of Header -->

      <!-- Navbar -->
      <div class="nav-container">
        <nav id="nav" class="nav nav-bar">
          <ul>
            <li><a href="<?php echo site_url('/home/'); ?>">home</a></li>
            <li><a href="<?php echo site_url('/artists/'); ?>">artists</a></li>
            <li><a href="<?php echo site_url('/about/'); ?>">about</a></li>
            <li><a href="<?php echo site_url('/events/'); ?>">events</a></li>
            <li><a href="<?php echo site_url('/radio/'); ?>">radio</a></li>
            <li><a href="<?php echo site_url('/dubplates/'); ?>">dubplates</a></li>
            <li><a href="<?php echo site_url('/shop/'); ?>">shop</a></li>
            <li><a href="<?php echo site_url('/contact/'); ?>">contact</a></li>
          </ul>

          <!-- Search Box -->
          <?php get_search_form()?>
          <!-- End of Search Box -->
        </nav>
      </div>
      
      <!-- End of Navbar -->
