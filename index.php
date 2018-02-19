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
      <h1><?php single_post_title(); ?></h1>

      <?php
        if (have_posts()) :
          while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>

        <?php endwhile;

        else:
          echo '<p>No content found</p>':
        endif;
      ?>

    </body>
</html>
