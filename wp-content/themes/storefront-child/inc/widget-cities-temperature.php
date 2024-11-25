<?php
class Cities_Temperature_Widget extends WP_Widget {
    function __construct() {
        parent::__construct('cities_temperature', 'City Temperature Widget', array('description' => 'Display a city and its temperature'));
    }

    function widget($args, $instance) {
        $city = $instance['city_name'] ?? 'New York';
        $api_key = '848afb629cab22a17c7e3855102a4971'; // Replace with your OpenWeatherMap API key
        $weather_api_url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$api_key}";

        $response  = wp_remote_get($weather_api_url);

        if (is_wp_error($response)) {
            $error_message = $response->get_error_message();
            echo "<p>Unable to retrieve weather data. Error: {$error_message}</p>";
        } else {

            $response = wp_remote_get($weather_api_url);
            $data = wp_remote_retrieve_body($response);
            $weather = json_decode($data, true);

            echo $args['before_widget'];
            echo "<h3>{$city}</h3>";
            echo "<p>Temperature: " . ($weather['main']['temp'] - 273.15) . " °C</p>";
            echo $args['after_widget'];

        }


    }

    function form($instance) {
        $city = $instance['city_name'] ?? 'New York';
        echo '<label for="' . $this->get_field_id('city_name') . '">City Name:</label>';
        echo '<input type="text" name="' . $this->get_field_name('city_name') . '" value="' . esc_attr($city) . '"/>';
    }
}
function register_cities_temperature_widget() {
    register_widget('Cities_Temperature_Widget');
}
add_action('widgets_init', 'register_cities_temperature_widget');
?>
