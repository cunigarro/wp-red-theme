<?php
    function contact_form_callback($atts, $content = null) {
        $atts = shortcode_atts(
            array(),
            $atts,
            'contact-form'
        );

        ob_start();
        include 'templates/contact-form.php';
        return ob_get_clean();
    }

    add_shortcode('contact_form', 'contact_form_callback');

    function archived_news_callback($atts, $content = null) {
        $atts = shortcode_atts(
            array(),
            $atts,
            'archived-news'
        );

        ob_start();
        include 'templates/archived-news.php';
        return ob_get_clean();
    }

    add_shortcode('archived_news', 'archived_news_callback');
?>
