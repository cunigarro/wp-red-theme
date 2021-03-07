<h1>
    Vozpropia Home Slider
</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('home-slider-group'); ?>
    <?php do_settings_sections('vozpropia_home_slider'); ?>
    <?php submit_button(); ?>
</form>
