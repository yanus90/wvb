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
        'supports'           => ['title', 'page-attributes'],
        'taxonomies'         => ['afdeling'],
        'menu_icon'          => 'dashicons-id'
    ];
    register_post_type('elftal', $args);
    add_post_type_support('elftal', 'page-attributes');
}

// Agenda
add_action('init', 'register_evenement_post_type');
function register_evenement_post_type() {
    $labels = [
        'name'               => 'Agenda',
        'singular_name'      => 'Agenda',
        'menu_name'          => 'Agenda',
        'name_admin_bar'     => 'Agenda',
        'add_new'            => 'Nieuw item',
        'add_new_item'       => 'Voeg nieuw item toe',
        'new_item'           => 'Nieuw item',
        'edit_item'          => 'Bewerk item',
        'view_item'          => 'Bekijk item',
        'all_items'          => 'Alle items',
        'search_items'       => 'Zoek items',
        'parent_item_colon'  => 'Bovenliggend item',
        'not_found'          => 'Geen items gevonden',
        'not_found_in_trash' => 'Geen items gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Agenda post type',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'agenda'],
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => ['title', 'editor'],
        'menu_icon'          => 'dashicons-calendar-alt'
    ];
    register_post_type('evenement', $args);
}

// Sponsoren
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
        'menu_icon'          => 'dashicons-star-filled',
        'taxonomies'         => ['soorten']
    ];
    register_post_type('sponsor', $args);
}

// Personen
add_action('init', 'register_person_post_type');
function register_person_post_type() {
    $labels = [
        'name'               => 'Contactpersonen',
        'singular_name'      => 'Contactpersoon',
        'menu_name'          => 'Contactpersonen',
        'name_admin_bar'     => 'Contactpersoon',
        'add_new'            => 'Nieuwe toevoegen',
        'add_new_item'       => 'Voeg nieuw contactpersoon toe',
        'new_item'           => 'Nieuw contactpersoon',
        'edit_item'          => 'Bewerk contactpersoon',
        'view_item'          => 'Bekijk contactpersoon',
        'all_items'          => 'Alle contactpersonen',
        'search_items'       => 'Zoek contactpersonen',
        'parent_item_colon'  => 'Bovenliggend contactpersoon',
        'not_found'          => 'Geen contactpersonen gevonden',
        'not_found_in_trash' => 'Geen contactpersonen gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Personen post type',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'contactpersonen'],
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-businessman',
        'taxonomies'         => ['functies'],
        'supports'           => ['title', 'editor', 'page-attributes']
    ];
    register_post_type('person', $args);
    add_post_type_support('person', 'page-attributes');
}

// Spelers
add_action('init', 'register_speler_post_type');
function register_speler_post_type() {
    $labels = [
        'name'               => 'Spelers',
        'singular_name'      => 'Speler',
        'menu_name'          => 'Spelers',
        'name_admin_bar'     => 'Speler',
        'add_new'            => 'Nieuwe toevoegen',
        'add_new_item'       => 'Voeg nieuwe speler toe',
        'new_item'           => 'Nieuwe speler',
        'edit_item'          => 'Bewerk speler',
        'view_item'          => 'Bekijk speler',
        'all_items'          => 'Alle spelers',
        'search_items'       => 'Zoek spelers',
        'parent_item_colon'  => 'Bovenliggende spelers',
        'not_found'          => 'Geen spelers gevonden',
        'not_found_in_trash' => 'Geen spelers gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Spelers post type',
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-admin-users',
        'taxonomies'         => ['positie'],
        'supports'           => ['title', 'page-attributes']
    ];
    register_post_type('speler', $args);
    add_post_type_support('speler', 'page-attributes');
}

// Commissies
//add_action('init', 'register_commissie_post_type');
//function register_commissie_post_type() {
//    $labels = [
//        'name'               => 'Commissies',
//        'singular_name'      => 'Commissie',
//        'menu_name'          => 'Commissies',
//        'name_admin_bar'     => 'Commissie',
//        'add_new'            => 'Nieuwe toevoegen',
//        'add_new_item'       => 'Voeg nieuwe commissie toe',
//        'new_item'           => 'Nieuwe commissie',
//        'edit_item'          => 'Bewerk commissie',
//        'view_item'          => 'Bekijk commissie',
//        'all_items'          => 'Alle commissies',
//        'search_items'       => 'Zoek commissies',
//        'parent_item_colon'  => 'Bovenliggende commissies',
//        'not_found'          => 'Geen commissies gevonden',
//        'not_found_in_trash' => 'Geen commissies gevonden in de prullenbak'
//    ];
//    $args = [
//        'labels'             => $labels,
//        'description'        => 'Commissies post type',
//        'public'             => true,
//        'publicly_queryable' => true,
//        'show_ui'            => true,
//        'show_in_menu'       => true,
//        'query_var'          => true,
//        'rewrite'            => ['slug' => 'commissies'],
//        'capability_type'    => 'post',
//        'has_archive'        => false,
//        'hierarchical'       => true,
//        'menu_position'      => null,
//        'menu_icon'          => 'dashicons-share',
//        'supports'           => ['title', 'editor', 'page-attributes']
//    ];
//    register_post_type('commissie', $args);
//    add_post_type_support('commissie', 'page-attributes');
//}

// Vacatures
add_action('init', 'register_vacature_post_type');
function register_vacature_post_type() {
    $labels = [
        'name'               => 'Vacatures',
        'singular_name'      => 'Vacature',
        'menu_name'          => 'Vacatures',
        'name_admin_bar'     => 'Vacature',
        'add_new'            => 'Nieuwe toevoegen',
        'add_new_item'       => 'Voeg nieuwe vacature toe',
        'new_item'           => 'Nieuwe vacature',
        'edit_item'          => 'Bewerk vacature',
        'view_item'          => 'Bekijk vacature',
        'all_items'          => 'Alle vacatures',
        'search_items'       => 'Zoek vacatures',
        'parent_item_colon'  => 'Bovenliggende vacatures',
        'not_found'          => 'Geen vacatures gevonden',
        'not_found_in_trash' => 'Geen vacatures gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Vacatures post type',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'vacatures'],
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-search',
        'supports'           => ['title', 'editor', 'page-attributes']
    ];
    register_post_type('vacature', $args);
    add_post_type_support('vacature', 'page-attributes');
}

// Meldingen
add_action('init', 'register_melding_post_type');
function register_melding_post_type() {
    $labels = [
        'name'               => 'Meldingen',
        'singular_name'      => 'Melding',
        'menu_name'          => 'Meldingen',
        'name_admin_bar'     => 'Melding',
        'add_new'            => 'Nieuwe toevoegen',
        'add_new_item'       => 'Voeg nieuwe melding toe',
        'new_item'           => 'Nieuwe melding',
        'edit_item'          => 'Bewerk melding',
        'view_item'          => 'Bekijk melding',
        'all_items'          => 'Alle meldingen',
        'search_items'       => 'Zoek meldingen',
        'parent_item_colon'  => 'Bovenliggende meldingen',
        'not_found'          => 'Geen meldingen gevonden',
        'not_found_in_trash' => 'Geen meldingen gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Meldingen post type',
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-chat',
        'supports'           => ['title', 'page-attributes']
    ];
    register_post_type('melding', $args);
    add_post_type_support('melding', 'page-attributes');
}
