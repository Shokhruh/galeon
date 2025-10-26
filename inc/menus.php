<?php
    function galeon_menus() {
        $locations = array(
            'primary' => __("Desktop Primary Menu", 'galeon'),
            'footer_left'  => __("Footer Left Menu Items", 'galeon'),
            'footer_right'  => __("Footer Right Menu Items", 'galeon'),
        );
        register_nav_menus($locations);
    }

    add_action( 'init', 'galeon_menus' );


    // Custom Walker Class for PRIMARY DESKTOP MENU
    class Custom_Nav_Walker extends Walker_Nav_Menu {
        function start_lvl( &$output, $depth = 0, $args = null ) {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<div class=\"dropdown-menu\">\n";
        }

        function end_lvl( &$output, $depth = 0, $args = null ) {
            $indent = str_repeat("\t", $depth);
            $output .= "$indent</div>\n";
        }

        function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

            $indent = ($depth) ? str_repeat("\t", $depth) : '';

            $classes = empty($item->classes) ? [] : (array) $item->classes;
            $has_children = in_array('menu-item-has-children', $classes);
            $active = in_array('current-menu-item', $classes) ? ' active' : '';

            if ($has_children && $depth === 0) {
                $output .= $indent . '<div class="dropdown">';
                $output .= '<a class="nav_item dropdown-toggle' . $active . '" href="' . esc_attr($item->url) . '">' . esc_html($item->title) . '</a>';
            } else {
                $output .= $indent . '<a class="nav_item' . $active . '" href="' . esc_attr($item->url) . '">' . esc_html($item->title) . '</a>';
            }
        }

        function end_el( &$output, $item, $depth = 0, $args = null ) {
            if (in_array('menu-item-has-children', (array) $item->classes) && $depth === 0) {
                $output .= "</div>\n";
            }
        }
    }

    class Custom_Footer_Walker extends Walker_Nav_Menu {
        // Menyu boshlanishida chiqadi
        function start_lvl( &$output, $depth = 0, $args = null ) {
            $output .= '';
        }

        // Menyu yakunida chiqadi
        function end_lvl( &$output, $depth = 0, $args = null ) {
            $output .= '';
        }

        // Har bir <li> elementi uchun
        function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
            $classes = implode(' ', $item->classes);
            $output .= '<a class="nav_item" href="' . esc_attr($item->url) . '">' . esc_html($item->title) . '</a>';
        }

        function end_el( &$output, $item, $depth = 0, $args = null ) {
            $output .= '';
        }
    }



