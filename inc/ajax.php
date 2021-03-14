<?php

/*

@package sunsettheme

	========================
		AJAX FUNCTIONS
	========================
*/
add_action( 'wp_ajax_nopriv_sunset_save_user_contact_form', 'sunset_save_contact' );
add_action( 'wp_ajax_sunset_save_user_contact_form', 'sunset_save_contact' );

function sunset_save_contact(){

	$title = wp_strip_all_tags($_POST["name"]);
	$email = wp_strip_all_tags($_POST["email"]);
	$message = wp_strip_all_tags($_POST["message"]);

	echo $title . ',' . $email . ',' .$message;

    $args = array(
        'post_title'    => $title,
        'post_content'  => $message,
        'post_author'   => 1,
        'post_type'     => 'contact-form',
        'meta_input'    => array(
            '_contact_email_value_key' => $email
        )
    );

    $postID = wp_insert_post($args);

    echo $postID;

	die();

}
