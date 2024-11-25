jQuery(document).ready(function ($) {
    $('#cities-search').on('keyup', function () {
        let searchQuery = $(this).val();

        $.ajax({
            url: ajax_search.ajax_url, // Provided via wp_localize_script
            type: 'POST',
            data: {
                action: 'search_cities', // Custom action defined in PHP
                query: searchQuery,
            },
            success: function (response) {
                $('#cities-search-results').html(response);
            },
        });
    });
});
