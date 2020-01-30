<?php


function blusaphir_files() {
    $manifest = json_decode(file_get_contents(dirname(__FILE__)."/dist/manifest.json"), true);
    wp_enqueue_script('blusaphir_js', get_theme_file_uri('/dist/'.$manifest['main.js']));
    wp_enqueue_style('blusaphir_main_style', get_theme_file_uri('/dist/'.$manifest['main.css']));
  }

  add_action('wp_enqueue_scripts', 'blusaphir_files');

  function blusaphir_features() {
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'blusaphir_features');

  function remove_img_attr($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
  }

  add_filter('post_thumbnail_html', 'remove_img_attr');

  // This will stop wordpress from automatically adding in "p" tags to paragraphs
  remove_filter('term_description','wpautop');
  remove_filter ('the_content', 'wpautop');
  remove_filter ('the_excerpt', 'wpautop');

?>
