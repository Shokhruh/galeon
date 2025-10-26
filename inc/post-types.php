<?php
    function my_custom_init(){

        // Register Advantages Type
        register_post_type('advantage', array(
            'labels'             => array(
                'name'               => __('Advantages'),
                'singular_name'      => __('Advantage'),
                'add_new'            => __('Add New'),
                'add_new_item'       => __('Add New Advantage'),
                'edit_item'          => __('Edit Advantage'),
                'new_item'           => __('New Advantage'),
                'view_item'          => __('View Advantage'),
                'search_items'       => __('Search Advantages'),
                'not_found'          => __('No Advantages found'),
                'not_found_in_trash' => __('No Advantages found in Trash'),
                'parent_item_colon'  => '',
                'menu_name'          => __('Advantages')

            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true,
            'menu_icon'          => 'dashicons-welcome-add-page',
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 4,
            'supports'           => array('title','editor', 'thumbnail',),
        ) );
    }

    add_action( 'init', 'my_custom_init' );