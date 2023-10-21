<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

// Customize edit logo of wp-admin login screen.
function my_wp_login_logo()
{
    ?>
    <style>
        body.login div#login h1 a {
            background-image: url('/app/login-logo.svg');
            background-size: contain !important;
            padding-bottom: 150px;
            width: 100% !important;
            height: auto !important;
            font-size: larger !important;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', __NAMESPACE__ . '\\my_wp_login_logo');
