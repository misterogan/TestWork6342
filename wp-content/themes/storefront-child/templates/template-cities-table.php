<?php
/*
Template Name: Cities Table
*/

global $wpdb;
$cities = $wpdb->get_results("
    SELECT p.ID, p.post_title, t.name AS country
    FROM {$wpdb->posts} p
    LEFT JOIN {$wpdb->term_relationships} tr ON p.ID = tr.object_id
    LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
    LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id
    WHERE p.post_type = 'cities' AND p.post_status = 'publish'
");
?>
<table>
    <thead>
    <tr>
        <th>City</th>
        <th>Country</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cities as $city): ?>
        <tr>
            <td><?= esc_html($city->post_title); ?></td>
            <td><?= esc_html($city->country); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
