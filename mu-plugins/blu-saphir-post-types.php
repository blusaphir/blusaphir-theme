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

  //Radio Page Custom Post Type
  register_post_type('radio', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Radio',
      'add_new_item' => 'Add New Radio',
      'edit_item' => 'Edit Radio',
      'all_items' => 'All Radios',
      'singular_name' => 'Radio'
    )
  ));

  //Dubplates Page Custom Post Type
  register_post_type('dubplates', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Dubplates',
      'add_new_item' => 'Add New Dubplates',
      'edit_item' => 'Edit Dubplates',
      'all_items' => 'All Dubplates',
      'singular_name' => 'Dubplates'
    )
  ));

  //Contact Page Custom Post Type
  register_post_type('contact', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Contact',
      'add_new_item' => 'Add New Contact',
      'edit_item' => 'Edit Contact',
      'all_items' => 'All Contact',
      'singular_name' => 'Contact'
    )
  ));
}

function delete_post_type(){
  unregister_post_type( 'Artists' );
}
add_action('init','delete_post_type');

add_action('init', 'blusaphir_post_types');

?>