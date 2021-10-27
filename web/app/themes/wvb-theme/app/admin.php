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
        remove_submenu_page('themes.php', 'customize.php?return=' . urlencode($_SERVER['REQUEST_URI']));
        remove_submenu_page('themes.php', 'themes.php');
    } elseif (current_user_can('editor_1') || current_user_can('wvb_editor')) {
        remove_menu_page('edit.php?post_type=elftal');
        remove_menu_page('edit.php?post_type=evenement');
        remove_menu_page('edit.php?post_type=sponsor');
        remove_menu_page('edit.php?post_type=person');
        remove_menu_page('edit.php?post_type=speler');
        remove_menu_page('edit.php?post_type=vacature');
        remove_menu_page('edit.php?post_type=historie');
        remove_menu_page('wpcf7');
        remove_menu_page('general-business-settings');
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
        remove_submenu_page('themes.php', 'customize.php?return=' . urlencode($_SERVER['REQUEST_URI']));
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

    add_role( 'editor_1', 'Editor 1', []);

    remove_role('editor');
    remove_role('author');
    remove_role('author');
    remove_role('contributor');
    remove_role('subscriber');
    remove_role('wpseo_manager');
    remove_role('wpseo_editor');
});

/**
 * Add a custom role.
 */
add_action('init', function () {
    global $wp_roles;

    if (!isset($wp_roles)) {
        $wp_roles = new \WP_Roles();
    }

    $wvbEditor = $wp_roles->get_role('wvb_editor');

    if (!$wvbEditor) {
        $admin = $wp_roles->get_role('administrator');
        $customCaps = $admin->capabilities;

        $customCaps['switch_themes'] = false;
        $customCaps['edit_themes'] = false;
        $customCaps['delete_themes'] = false;
        $customCaps['install_themes'] = false;
        $customCaps['update_themes'] = false;
        $customCaps['update_plugins'] = false;
        $customCaps['delete_plugins'] = false;
        $customCaps['install_plugins'] = false;

        add_role('wvb_editor', 'WvB Editor', $customCaps);
    }
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

function wp_post_types_admin_order( $wp_query ) {
    if (is_admin()) {
        $post_type = $wp_query->query['post_type'];

        if ($post_type == 'news-article') {
            $wp_query->set('orderby', 'date');
            $wp_query->set('order', 'DESC');
        }
    }
}
add_filter('pre_get_posts', 'wp_post_types_admin_order');
