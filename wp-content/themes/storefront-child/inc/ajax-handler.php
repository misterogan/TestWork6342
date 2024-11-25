<?php
function search_cities_handler() {
    global $wpdb;

    // Get the search query from the AJAX request
    $query = sanitize_text_field($_POST['query']);

    // Query the database for matching cities
    $cities = $wpdb->get_results($wpdb->prepare("
        SELECT p.ID, p.post_title, t.name AS country
        FROM {$wpdb->posts} p
        LEFT JOIN {$wpdb->term_relationships} tr ON p.ID = tr.object_id
        LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
        LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id
        WHERE p.post_type = 'cities'
          AND p.post_status = 'publish'
          AND p.post_title LIKE %s
    ", '%' . $query . '%'));

    // Output the search results
    if (!empty($cities)) {
        echo '<table>';
        echo '<thead><tr><th>City</th><th>Country</th></tr></thead>';
        echo '<tbody>';
        foreach ($cities as $city) {
            echo '<tr>';
            echo '<td>' . esc_html($city->post_title) . '</td>';
            echo '<td>' . esc_html($city->country) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>No results found.</p>';
    }

    wp_die();
}
add_action('wp_ajax_search_cities', 'search_cities_handler');
add_action('wp_ajax_nopriv_search_cities', 'search_cities_handler');
?>
