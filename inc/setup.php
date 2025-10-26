<?php
    // Theme setup
    function furni_setup_theme() {
        add_theme_support('custom-logo');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'furni_setup_theme');

    // Customize title separator
    function furni_title_separator($sep) {
    return '|';
    }
    add_filter('document_title_separator', 'furni_title_separator');

    // Allow SVG uploads
    function allow_svg_uploads($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'allow_svg_uploads');

    // Fix SVG thumbnail display in admin
    function fix_svg_thumb_display() {
        echo '<style>
            .attachment-266x266, .thumbnail img {
                width: 100% !important;
                height: auto !important;
            }
        </style>';
    }
    add_action('admin_head', 'fix_svg_thumb_display');