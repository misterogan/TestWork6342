<?php
// Register the "Cities" custom post type
function create_cities_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Cities',
            'singular_name' => 'City',
            'add_new' => 'Add New City',
            'edit_item' => 'Edit City',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
    );
    register_post_type('cities', $args);
}
add_action('init', 'create_cities_post_type');
?>
