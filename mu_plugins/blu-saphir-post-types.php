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

  //Blu Saphir Recordings Artist Page Post Type
  register_post_type('blu_saphir', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Blu Saphir',
      'add_new_item' => 'Add New Blu Saphir Artist',
      'edit_item' => 'Edit Blu Saphir Artist',
      'all_items' => 'All Blu Saphir Artists',
      'singular_name' => 'Blu Saphir Artist'
    )
  ));

  //Digi Blus Artist Page Post Type
  register_post_type('digi_blus', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Digi Blus',
      'add_new_item' => 'Add New Digi Blus Artist',
      'edit_item' => 'Edit Digi Blus Artist',
      'all_items' => 'All Digi Blus Artists',
      'singular_name' => 'Digi Blus Artist'
    )
  ));

  //Blu Saphir Limited Artist Page Post Type
  register_post_type('blu_saphir_ltd', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Blu Saphir Ltd',
      'add_new_item' => 'Add New Blu Saphir Ltd Artist',
      'edit_item' => 'Edit Blu Saphir Ltd Artist',
      'all_items' => 'All Blu Saphir Ltd Artists',
      'singular_name' => 'Blu Saphir Ltd Artist'
    )
  ));

  //Events Page Post Type
  register_post_type('events', array(
    'support' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    )
  ));
}

add_action('init', 'blusaphir_post_types');

?>