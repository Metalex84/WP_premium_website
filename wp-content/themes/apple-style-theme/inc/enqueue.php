<?php

function theme_assets() {

    // Google Fonts - Inter
    wp_enqueue_style(
        'google-fonts-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        ['google-fonts-inter'],
        '2.0'
    );

    // Main JavaScript
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '2.0',
        true
    );

}

add_action('wp_enqueue_scripts', 'theme_assets');
