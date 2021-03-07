<h1>
    Vozpropia Contact Form
</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('contact-options'); ?>
    <?php do_settings_sections('vozpropia_contact_section'); ?>
    <?php submit_button(); ?>
</form>
