<?php

    // Enqueue styles
    function galeon_enqueue_styles() {
        wp_enqueue_style( 'googleapis', 'https://fonts.googleapis.com' );
        wp_enqueue_style( 'gstatic', 'https://fonts.gstatic.com' );
        wp_enqueue_style( 'montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap' );
        wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' );
        wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css' );
        wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
        wp_enqueue_style( 'galeon-font', get_template_directory_uri() . '/assets/fonts/font.css' );
        wp_enqueue_style( 'galeon-main', get_template_directory_uri() . '/assets/css/main.css' );
    }
    add_action('wp_enqueue_scripts', 'galeon_enqueue_styles');

    // Enqueue scripts
    function galeon_enqueue_scripts() {
        wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array(), null, true );
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/libs/jquery-3.6.0.min.js', array(), null, true );
        wp_enqueue_script( 'inputmask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js', array(), null, true );
        wp_enqueue_script( 'yandex-maps', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), null, true );
        wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true );
        wp_enqueue_script( 'sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), null, true );
        wp_enqueue_script( 'galeon-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true );
    }
    add_action('wp_enqueue_scripts', 'galeon_enqueue_scripts');