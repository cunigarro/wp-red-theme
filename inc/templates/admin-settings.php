<h1>
    Vozpropia Social Networks
</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('settings-group'); ?>
    <?php do_settings_sections('vozpropia'); ?>
    <?php submit_button(); ?>
</form>
