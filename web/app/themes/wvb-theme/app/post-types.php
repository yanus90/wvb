<?php

# Register Custom Post Types

add_action('init', 'register_elftal_post_type');
function register_elftal_post_type() {
    $labels = [
        'name'               => 'Elftallen',
        'singular_name'      => 'Elftal',
        'menu_name'          => 'Elftallen',
        'name_admin_bar'     => 'Elftal',
        'add_new'            => 'Nieuw toevoegen',
        'add_new_item'       => 'Voeg nieuw elftal toe',
        'new_item'           => 'Nieuw elftal',
        'edit_item'          => 'Bewerk elftal',
        'view_item'          => 'Bekijk elftal',
        'all_items'          => 'Alle elftallen',
        'search_items'       => 'Zoek elftallen',
        'parent_item_colon'  => 'Bovenliggend elftal',
        'not_found'          => 'Geen elftallen gevonden',
        'not_found_in_trash' => 'Geen elftallen gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Elftallen post type',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'elftallen/%afdeling%', 'with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => 'afdeling',
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        'taxonomies'         => ['afdeling']
    ];
    register_post_type('elftal', $args);
    add_post_type_support('elftal', 'page-attributes');
}
