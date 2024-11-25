<?php
function add_cities_meta_boxes() {
    add_meta_box('cities_lat_lon', 'City Coordinates', 'cities_meta_box_callback', 'cities', 'normal', 'default');
}
add_action('add_meta_boxes', 'add_cities_meta_boxes');

function cities_meta_box_callback($post) {
    $latitude = get_post_meta($post->ID, '_latitude', true);
    $longitude = get_post_meta($post->ID, '_longitude', true);

    echo '<label for="latitude">Latitude:</label>';
    echo '<input type="text" id="latitude" name="latitude" value="' . esc_attr($latitude) . '" />';
    echo '<label for="longitude">Longitude:</label>';
    echo '<input type="text" id="longitude" name="longitude" value="' . esc_attr($longitude) . '" />';
}

function save_cities_meta($post_id) {
    if (array_key_exists('latitude', $_POST)) {
        update_post_meta($post_id, '_latitude', sanitize_text_field($_POST['latitude']));
    }
    if (array_key_exists('longitude', $_POST)) {
        update_post_meta($post_id, '_longitude', sanitize_text_field($_POST['longitude']));
    }
}
add_action('save_post', 'save_cities_meta');
?>
