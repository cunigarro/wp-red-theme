<?php
    require get_template_directory() . '/inc/function-admin.php';
    require get_template_directory() . '/inc/enqueue.php';
    require get_template_directory() . '/inc/custom-post-type.php';
    require get_template_directory() . '/inc/ajax.php';
    require get_template_directory() . '/inc/shortcodes.php';

    # Menus
    require get_template_directory() . '/inc/menus/walker-nav-header-menu.php';
    require get_template_directory() . '/inc/menus/walker-nav-footer-menu.php';

    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_post_type_support( 'page', 'excerpt' );


?>
