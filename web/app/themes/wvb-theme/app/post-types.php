<?php

# Register Custom Post Types

// Elftallen
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

// Agenda
add_action('init', 'register_evenement_post_type');
function register_evenement_post_type() {
    $labels = [
        'name'               => 'Evenementen',
        'singular_name'      => 'Evenement',
        'menu_name'          => 'Evenementen',
        'name_admin_bar'     => 'Evenement',
        'add_new'            => 'Nieuw evenement',
        'add_new_item'       => 'Voeg nieuw evenement toe',
        'new_item'           => 'Nieuw evenement',
        'edit_item'          => 'Bewerk evenement',
        'view_item'          => 'Bekijk evenement',
        'all_items'          => 'Alle evenementen',
        'search_items'       => 'Zoek evenementen',
        'parent_item_colon'  => 'Bovenliggend evenement',
        'not_found'          => 'Geen evenementen gevonden',
        'not_found_in_trash' => 'Geen evenementen gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Evenementen post type',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'evenementen'],
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => ['title', 'editor'],
        'menu_icon'          => 'dashicons-calendar-alt'
    ];
    register_post_type('evenement', $args);
}

add_action('init', 'register_sponsor_post_type');
function register_sponsor_post_type() {
    $labels = [
        'name'               => 'Sponsoren',
        'singular_name'      => 'Sponsor',
        'menu_name'          => 'Sponsoren',
        'name_admin_bar'     => 'Sponsor',
        'add_new'            => 'Nieuwe sponsor',
        'add_new_item'       => 'Voeg nieuw sponsor toe',
        'new_item'           => 'Nieuw sponsor',
        'edit_item'          => 'Bewerk sponsor',
        'view_item'          => 'Bekijk sponsor',
        'all_items'          => 'Alle sponsoren',
        'search_items'       => 'Zoek sponsoren',
        'parent_item_colon'  => 'Bovenliggende sponsor',
        'not_found'          => 'Geen sponsoren gevonden',
        'not_found_in_trash' => 'Geen sponsoren gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Sponsoren post type',
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'sponsoren/%soort%', 'with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => 'soort',
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => ['title', 'editor'],
        'menu_icon'          => 'dashicons-groups',
        'taxonomies'         => ['soorten']
    ];
    register_post_type('sponsor', $args);
}
