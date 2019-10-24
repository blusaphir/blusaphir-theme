<?php 

  function blusaphir_files() {
    wp_enqueue_script('blusaphir_js', get_theme_file_uri('/js/app.js'));
    wp_enqueue_style('blusaphir_main_style', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'blusaphir_files');

  function blusaphir_features() {
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'blusaphir_features');

?>

