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

function remove_menu_items()
{
    if (current_user_can('admin_wvb')) {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
        remove_menu_page('plugins.php');
        remove_menu_page('options-general.php');
        remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('smush');
        remove_menu_page('gadwp_settings');
        remove_menu_page('wpseo_dashboard');
        remove_menu_page('onesignal-push');
        remove_submenu_page('themes.php', 'widgets.php');
        remove_submenu_page('themes.php', 'customize.php?return='. urlencode($_SERVER['REQUEST_URI']));
        remove_submenu_page('themes.php', 'themes.php');
    } else {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    }
}

add_action('admin_menu', __NAMESPACE__ . '\\remove_menu_items', 999);

add_action('init', function () {
    global $wp_roles;

    if (!isset($wp_roles)) {
        $wp_roles = new \WP_Roles();
    }

    $admin = $wp_roles->get_role('administrator');
    add_role('admin_wvb', 'Admin WvB', $admin->capabilities);
});

