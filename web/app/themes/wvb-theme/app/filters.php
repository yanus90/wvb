<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment'
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__.'\\filter_templates');
});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory().'/index.php';
    }
    return $template;
}, PHP_INT_MAX);

/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );

    $data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
        return apply_filters("sage/template/{$class}/data", $data, $comments_template);
    }, []);

    $theme_template = locate_template(["views/{$comments_template}", $comments_template]);

    if ($theme_template) {
        echo template($theme_template, $data);
        return get_stylesheet_directory().'/index.php';
    }

    return $comments_template;
}, 100);

// Nice URL structure combining post_type and taxonomy when using links.
add_filter('post_type_link', function ($post_link, $post) {
    if (is_object($post) && $post->post_type === 'elftal') {
        $terms = wp_get_object_terms($post->ID, 'afdeling');
        if ($terms) {
            return str_replace('%afdeling%' , $terms[0]->slug , $post_link);
        }
    }
    return $post_link;
}, 1, 2);

/**
 * @param $value
 * @param $post_id
 * @param $field
 * @return mixed
 */

add_filter('acf/update_value/name=overzichtafbeelding', function ($value, $post_id, $field)
{
    if ($value != '') {
        //Add the value which is the image ID to the _thumbnail_id meta data for the current post
        update_post_meta($post_id, '_thumbnail_id', $value);
    }

    return $value;
}, 10, 3);

add_filter('the_title', function ($title)
{
    $post = get_post();

    if (! empty($post->post_password)) {
        $formatted = sprintf(__('Protected: %s'), $post->post_title);
        $title = str_replace($formatted, $post->post_title, $title);
    }
    return $title;
}, 10);

add_filter('allowed_block_types_all', function()
{
    return [
        'core/paragraph',
        'core/heading',
        'core/list',
        'core/list-item',
        'core/block',
        'core/table',
        'core/code',
        'core/columns',
        'core/separator',
        'core/spacer',
        'core/more',
        'core/shortcode',
        'core/html',
        'core/video',
        'core/image',
    ];
});

// Rollen en rechten
// Remove dashboard menu-items based on user role
add_action('admin_menu', function () {
    if (current_user_can('content_beheerder')) {
        remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
        remove_menu_page('plugins.php');
        remove_menu_page('options-general.php');
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

        // Remove the "WP Mail SMTP" menu-item
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
    if (current_user_can('content_beheerder')) {
        remove_meta_box('wp_mail_smtp_reports_widget_lite', 'dashboard', 'normal');
    }
}, 20);
