<?php 

function blusaphir_post_types() {
  register_post_type('main_feature', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Main Feature',
      'add_new_item' => 'Add New Main Feature',
      'edit_item' => 'Edit Main Feature',
      'all_items' => 'All Main Features',
      'singular_name' => 'Main Feature'
    )
  ));

  // Front-Page Sub-Feature Post Type
  register_post_type('sub_feature', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Sub-Feature',
      'add_new_item' => 'Add New Sub-Feature',
      'edit_item' => 'Edit Sub-Feature',
      'all_items' => 'All Sub-Features',
      'singular_name' => 'Sub-Feature'
    )
  ));

  //Front Page Like Section Post Type
  register_post_type('like_section', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Like',
      'add_new_item' => 'Add New Like',
      'edit_item' => 'Edit Like',
      'all_items' => 'All Like',
      'singular_name' => 'Like'
    )
  ));
}

add_action('init', 'blusaphir_post_types');

?>