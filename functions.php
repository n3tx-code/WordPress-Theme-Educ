<?php

/**
 * Theme functions file
 * This file is used to add custom functions to the theme.
 * Here it does the following:
 * - Adds theme support
 * - Registers the use of navigation menus
 * - Enqueues styles and scripts
 */

// Add theme support
function my_custom_theme_setup() {
    /* Enables featured images for posts and pages */
    add_theme_support('post-thumbnails');    

    /* Registers navigation menu locations */
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'eemi-custom-theme'),
    ));
}

// Use the after_setup_theme wordpress hook to add theme support
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_scripts() {
    // Enqueues the main stylesheet, will be loaded in the header with wp_head()
    wp_enqueue_style(
        'theme-eemi', 
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0.0'
    );

    /* 
        Enqueues the front page specific stylesheet. 
        Will be loaded in the header with wp_head() of the front page
    */
    if (is_front_page()) {
        wp_enqueue_style(
            'theme-eemi-front-page',
            get_template_directory_uri() . '/assets/css/front-page.css',
            array('theme-eemi'),
            '1.0.0'
        );
    }

    // Enqueues the main JavaScript file, will be loaded in the footer with wp_footer()
    wp_enqueue_script(
        'eemi-theme-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );

    /*
        Enqueues the front page specific JavaScript file. 
        Will be loaded in the footer with wp_footer() of the front page
    */
    if (is_front_page()) {
        wp_enqueue_script(
            'eemi-theme-script-front-page',
            get_template_directory_uri() . '/assets/js/toto.js',
            array(),
            '1.0.0',
            true
        );
    }

}

// Use the wp_enqueue_scripts wordpress hook to add styles and scripts 
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts'); 