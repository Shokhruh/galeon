<?php 
    function register_custom_widgets() {
        // Header Top Widget Area
        register_sidebar( array(
            'name'          => esc_html__( 'Header Top Widget Area', 'galeon' ),
            'id'            => 'header-top-widget-area',
            'before_widget' => '<div class="left">',
            'after_widget'  => '</div>',
        ) );
    }

    add_action( 'widgets_init', 'register_custom_widgets' );