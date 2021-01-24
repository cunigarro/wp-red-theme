<?php
    function scripts_enqueue() {
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'scripts_enqueue');
?>
