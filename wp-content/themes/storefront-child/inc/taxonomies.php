<?php
function create_countries_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => 'Countries',
            'singular_name' => 'Country',
        ),
        'hierarchical' => true,
        'public' => true,
    );
    register_taxonomy('countries', 'cities', $args);
}
add_action('init', 'create_countries_taxonomy');
?>
