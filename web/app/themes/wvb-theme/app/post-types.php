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
        'public'             => false,
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

// Historie
add_action('init', 'register_history_post_type');
function register_history_post_type() {
    $labels = [
        'name'               => 'Historie',
        'singular_name'      => 'Historie',
        'menu_name'          => 'Historie',
        'name_admin_bar'     => 'Historie',
        'add_new'            => 'Nieuw jaar',
        'add_new_item'       => 'Voeg nieuw jaar toe',
        'new_item'           => 'Nieuw jaar',
        'edit_item'          => 'Bewerk jaar',
        'view_item'          => 'Bekijk jaar',
        'all_items'          => 'Alle jaren',
        'search_items'       => 'Zoek jaren',
        'parent_item_colon'  => 'Bovenliggende jaren',
        'not_found'          => 'Geen jaren gevonden',
        'not_found_in_trash' => 'Geen jaren gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Historie post type',
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => null,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-clock',
        'supports'           => ['title', 'editor', 'page-attributes']
    ];
    register_post_type('historie', $args);
    add_post_type_support('historie', 'page-attributes');
}

// Nieuwsberichten
add_action('init', __NAMESPACE__.'\\register_news_post_type');
function register_news_post_type()
{
    $labels = [
        'name'               => 'Nieuwsberichten',
        'singular_name'      => 'Nieuwsbericht',
        'menu_name'          => 'Nieuws',
        'name_admin_bar'     => 'Nieuws',
        'add_new'            => 'Nieuwe toevoegen',
        'add_new_item'       => 'Voeg nieuw bericht toe',
        'new_item'           => 'Nieuw bericht',
        'edit_item'          => 'Bewerk bericht',
        'view_item'          => 'Bekijk bericht',
        'all_items'          => 'Alle nieuwsberichten',
        'search_items'       => 'Zoek nieuwsberichten',
        'parent_item_colon'  => 'Bovenliggend bericht',
        'not_found'          => 'Geen berichten gevonden',
        'not_found_in_trash' => 'Geen berichten gevonden in de prullenbak'
    ];
    $args = [
        'labels'             => $labels,
        'description'        => 'Nieuws post type',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'nieuws'],
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => ['title', 'editor', 'revisions', 'author', 'custom-fields', 'post-formats'],
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-format-aside',
        'taxonomies'         => ['category'],
    ];
    register_post_type('news-article', $args);

    // Pagination for news template.
    add_rewrite_rule('^nieuws/page/([0-9]{1,})/?', 'index.php?pagename=nieuws&paged=$matches[1]', 'top');
    add_rewrite_rule('^categorie/([^/]*)/page/([0-9]{1,})/?', 'index.php?post_type=news-article&category_name=$matches[1]&paged=$matches[2]', 'top');
}
