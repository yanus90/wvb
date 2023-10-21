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

// Remove dashboard menu-items based on user role
add_action('admin_menu', function () {
    if (current_user_can('website_beheerder')) {
        remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
        remove_menu_page('plugins.php');
        remove_menu_page('admin.php?page=roles');
        remove_menu_page('wpcf7');
        remove_menu_page('wpseo_dashboard');
        remove_menu_page('password-protected');
        remove_menu_page('members');
        remove_menu_page('smush');

        // Subpages
        remove_submenu_page('index.php', 'update-core.php');
        remove_submenu_page('admin.php', 'roles');
        remove_submenu_page('themes.php', 'widgets.php');

        $customizer_url = add_query_arg('return', urlencode(remove_query_arg(wp_removable_query_args(), wp_unslash($_SERVER['REQUEST_URI']))), 'customize.php');
        remove_submenu_page('themes.php', $customizer_url);
    }
});

// Hide WP Mail SMTP based on user role
add_action('admin_menu', function () {
    if (current_user_can('website_beheerder')) {
        remove_menu_page('wp-mail-smtp');
        remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp');
        remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp-logs');
        remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp-reports');
        remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp-tools');
        remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp-about');
        remove_submenu_page('wp-mail-smtp', 'https://wpmailsmtp.com/lite-upgrade/?utm_source=WordPress&utm_medium=admin-menu&utm_campaign=liteplugin&utm_content=Upgrade%20to%20Pro');
    }
}, 2147483647);

// Disable widget based on user role
add_action('wp_dashboard_setup', function () {
    $screen = get_current_screen();
    if ( !$screen ) {
        return;
    }

    // Remove the "WP Mail SMTP" widget based on user role
    if (current_user_can('website_beheerder')) {
        remove_meta_box('wp_mail_smtp_reports_widget_lite', 'dashboard', 'normal');
    }
}, 20);
