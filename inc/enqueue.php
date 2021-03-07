<?php
    function scripts_enqueue() {
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all');
        wp_enqueue_style('material-design-icons', 'https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css', array(), '1.0.0', 'all');

        wp_enqueue_script('custom-js', get_template_directory_uri() . '/dist/js/main.min.js', array(), '1.0.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'scripts_enqueue');
?>
