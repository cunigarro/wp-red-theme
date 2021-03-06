<?php
    function scripts_enqueue() {
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all');
        wp_enqueue_style('material-design-icons', 'https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css', array(), '1.0.0', 'all');

        wp_enqueue_script('custom-js', get_template_directory_uri() . '/dist/js/main.min.js', array(), '1.0.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'scripts_enqueue');

    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_post_type_support( 'page', 'excerpt' );

    class Walker_Nav_Main_Menu extends Walker_Nav_Menu
    {
        public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span
            $indent = ( $depth ) ? str_repeat("\t",$depth) : '';

            $li_attributes = '';
            $class_names = $value = '';

            # echo json_encode($item->classes);

            $classes = empty( $item->classes ) ? array() : (array) $item->classes;

            $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
            $classes[] = ($item->current || $item->current_item_ancestor) ? 'text-blue' : '';
            $classes[] = 'menu-item-' . $item->ID;
            if( $depth && $args->walker->has_children ){
                $classes[] = 'dropdown-submenu';
            }

            $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
            $class_names = ' class="' . esc_attr($class_names) . ' inline-block mx-2"';

            $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
            $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

            $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
            $attributes .= ( $item->current || $item->current_item_ancestor ) ? ' class="font-semibold"' : 'class=""';

            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
            $item_output .= $args->after;

            $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }
?>
