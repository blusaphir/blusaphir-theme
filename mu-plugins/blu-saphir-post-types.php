<?php 

function blusaphir_post_types() {
  
  //Front Page Like Section Post Type
  register_post_type('like_section', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
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
?>