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
}

add_action('init', 'blusaphir_post_types');

?>