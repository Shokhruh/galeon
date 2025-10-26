<?php
    // Enqueue scripts and styles
    require get_template_directory() . '/inc/enqueue.php';

    // Theme setup
    require get_template_directory() . '/inc/setup.php';

    // Register menus
    require get_template_directory() . '/inc/menus.php';

    //Post types
    require get_template_directory() . '/inc/post-types.php';

    // Custom widgets
    require get_template_directory() . '/inc/widgets.php';

    function dd($data) {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die();
    }

    // CF7 form markupidagi <p> va <br> avtomatik teglardan xalos bo‘lish
    add_filter('wpcf7_autop_or_not', '__return_false');

