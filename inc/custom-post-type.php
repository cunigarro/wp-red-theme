<?php
    $contact = get_option('activate_contact');
    if(@$contact == 1) {
        add_action('init', 'contact_custom_post_type');
        add_filter('manage_contact-form_posts_columns', 'set_contact_columns');
        add_action('manage_contact-form_posts_custom_column', 'contact_custom_colmun', 10, 2);
        add_action('add_meta_boxes', 'contact_add_meta_box');
        add_action('save_post', 'save_contact_email_data');
    }

    /* Contact CPT */
    function contact_custom_post_type() {
        $labels = array(
            'name'              => 'Messages',
            'singular_name'     => 'Message',
            'menu_name'         => 'Messages',
            'name_admin_bar'    => 'Message',
        );

        $args = array(
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'capability_type'   => 'post',
            'hierarchical'      => false,
            'menu_position'     => 26,
            'menu_icon'         => 'dashicons-email-alt',
            'supports'          => array('title', 'editor', 'author')
        );

        register_post_type('contact-form', $args);
    }

    function set_contact_columns($columns) {
        $newColmuns = array(
            'title'             => 'Full Name',
            'message'           => 'Message',
            'email'             => 'Email',
            'date'              => 'Date'
        );
        return $newColmuns;
    }

    function contact_custom_colmun($column, $post_id) {
        switch ($column) {
            case 'message':
                echo get_the_excerpt();
                break;

            case 'email':
                $email = get_post_meta($post_id, '_contact_email_value_key', true);
                echo $email;
                break;
        }
    }

    /* Contact add meta box */
    function contact_add_meta_box() {
        add_meta_box('contact_email', 'User Email', 'contact_email_callback', 'contact-form', 'side');
    }

    function contact_email_callback($post) {
        wp_nonce_field('save_contact_email_data', 'contact_email_meta_box_nonce');
        $value = get_post_meta($post->ID, '_contact_email_value_key', true);
        echo '<label for="contact_email_field">User Email Address: </label>';
        echo '<input type="email" id="contact_email_field" name="contact_email_field" value="'.esc_attr($value).'" size="25">';
    }

    function save_contact_email_data($post_id) {
        if(! isset($_POST['contact_email_meta_box_nonce'])) {
            return;
        }

        if (! wp_verify_nonce($_POST['contact_email_meta_box_nonce'], 'save_contact_email_data')) {
            return;
        }

        if (define('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        if (! current_user_can('edit_post', $post_id)) {
            return;
        }

        if (! isset($_POST['contact_email_field'])) {
            return;
        }

        $my_data = sanitize_text_field($_POST['contact_email_field']);
        update_post_meta($post_id, '_contact_email_value_key', $my_data);
    }
?>
