<?php
// Enqueue parent and child theme styles
function storefront_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', array('parent-style'));
    wp_enqueue_script('ajax-search', get_stylesheet_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), null, true);

    // Localize script for AJAX calls
    wp_localize_script('ajax-search', 'ajax_search', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'storefront_child_enqueue_styles');

// Include all functionalities
require_once get_stylesheet_directory() . '/inc/custom-post-types.php';
require_once get_stylesheet_directory() . '/inc/meta-boxes.php';
require_once get_stylesheet_directory() . '/inc/taxonomies.php';
require_once get_stylesheet_directory() . '/inc/widget-cities-temperature.php';
require_once get_stylesheet_directory() . '/inc/ajax-handler.php';
?>
