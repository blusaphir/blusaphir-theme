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

  //Artists Post Type
  register_post_type('artists', array(
    'supports' => array(),
    'public' => true,
    'labels' => array(
      'name' => 'Artists'
    )
  ));

  //Blu Saphir Recordings Artist Page Post Type
  register_post_type('artist_blu_saphir', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'show_in_menu' => 'edit.php?post_type=artists',
    'labels' => array(
      'name' => 'Blu Saphir',
      'add_new_item' => 'Add New Blu Saphir Artist',
      'edit_item' => 'Edit Blu Saphir Artist',
      'all_items' => 'All Blu Saphir Artists',
      'singular_name' => 'Blu Saphir Artist'
    )
  ));

  //Digi Blus Artist Page Post Type
  register_post_type('artist_digi_blus', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'show_in_menu' => 'edit.php?post_type=artists',
    'labels' => array(
      'name' => 'Digi Blus',
      'add_new_item' => 'Add New Digi Blus Artist',
      'edit_item' => 'Edit Digi Blus Artist',
      'all_items' => 'All Digi Blus Artists',
      'singular_name' => 'Digi Blus Artist'
    )
  ));

  //Blu Saphir Limited Artist Page Post Type
  register_post_type('artist_blu_saphir_ltd', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'show_in_menu' => 'edit.php?post_type=artists',
    'labels' => array(
      'name' => 'Blu Saphir Ltd',
      'add_new_item' => 'Add New Blu Saphir Ltd Artist',
      'edit_item' => 'Edit Blu Saphir Ltd Artist',
      'all_items' => 'All Blu Saphir Ltd Artists',
      'singular_name' => 'Blu Saphir Ltd Artist'
    )
  ));

  //Sync Saphir Artist Page Post Type
  register_post_type('artist_sync_saphir', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'show_in_menu' => 'edit.php?post_type=artists',
    'labels' => array(
      'name' => 'Sync Saphir',
      'add_new_item' => 'Add New Sync Saphir Artist',
      'edit_item' => 'Edit Sync Saphir Artist',
      'all_items' => 'All Sync Saphir Artists',
      'singular_name' => 'Sync Saphir Artist'
    )
  ));

  //Release Post Type
  register_post_type('release', array(
    'supports' => array(),
    'public' => true,
    'labels' => array(
      'name' => 'Release'
    )
  ));

  //Blu Saphir Recordings Release Page Post Type
  register_post_type('blu_saphir_release', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'show_in_menu' => 'edit.php?post_type=release',
    'labels' => array(
      'name' => 'Blu Saphir',
      'add_new_item' => 'Add New Blu Saphir Release',
      'edit_item' => 'Edit Blu Saphir Release',
      'all_items' => 'All Blu Saphir Releases',
      'singular_name' => 'Blu Saphir Release'
    )
  ));

  //Digi Blus Release Page Post Type
  register_post_type('digi_blus_release', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'show_in_menu' => 'edit.php?post_type=release',
    'labels' => array(
      'name' => 'Digi Blus',
      'add_new_item' => 'Add New Digi Blus Release',
      'edit_item' => 'Edit Digi Blus Release',
      'all_items' => 'All Digi Blus Releases',
      'singular_name' => 'Digi Blus Release'
    )
  ));

  //Blu Saphir Limited Release Page Post Type
  register_post_type('blu_ltd_release', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'show_in_menu' => 'edit.php?post_type=release',
    'labels' => array(
      'name' => 'Blu Saphir Ltd',
      'add_new_item' => 'Add New Blu Saphir Ltd Release',
      'edit_item' => 'Edit Blu Saphir Ltd Release',
      'all_items' => 'All Blu Saphir Ltd Releases',
      'singular_name' => 'Blu Saphir Ltd Release'
    )
  ));

  //Sync Saphir Release Page Post Type
  register_post_type('sync_saphir_release', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'show_in_menu' => 'edit.php?post_type=release',
    'labels' => array(
      'name' => 'Sync Saphir',
      'add_new_item' => 'Add New Sync Saphir Release',
      'edit_item' => 'Edit Sync Saphir Release',
      'all_items' => 'All Sync Saphir Releases',
      'singular_name' => 'Sync Saphir Release'
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