<?php

# Register Custom Taxonomies

add_action('init', 'custom_afdeling_taxonomy', 0);
function custom_afdeling_taxonomy()
{
    $labels = [
        'name'                       => 'Afdelingen',
        'singular_name'              => 'Afdeling',
        'menu_name'                  => 'Afdelingen',
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'view_item'                  => __( 'View Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Items', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    ];
    $args = [
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => ['slug' => 'afdelingen', 'with_front' => false],
    ];
    register_taxonomy('afdeling', ['elftal'], $args);
}

add_action('init', 'custom_category_sponsor_taxonomy', 0);
function custom_category_sponsor_taxonomy()
{
    $labels = [
        'name'                       => 'Soorten',
        'singular_name'              => 'Soort',
        'menu_name'                  => 'Soorten',
        'all_items'                  => __( 'Alle soorten', 'text_domain' ),
        'parent_item'                => __( 'Hoofd soort', 'text_domain' ),
        'parent_item_colon'          => __( 'Hoofd soort:', 'text_domain' ),
        'new_item_name'              => __( 'Nieuw soort', 'text_domain' ),
        'add_new_item'               => __( 'Voeg soort toe', 'text_domain' ),
        'edit_item'                  => __( 'Soort aanpassen', 'text_domain' ),
        'update_item'                => __( 'Bewerk soort', 'text_domain' ),
        'view_item'                  => __( 'Toon soort', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Soorten toevoegen of verwijderen', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Pupulaire soorten', 'text_domain' ),
        'search_items'               => __( 'Zoek soorten', 'text_domain' ),
        'not_found'                  => __( 'Niet gevonden', 'text_domain' ),
        'no_terms'                   => __( 'Geen soorten', 'text_domain' ),
        'items_list'                 => __( 'Soorten lijst', 'text_domain' ),
        'items_list_navigation'      => __( 'Soortenlijst navigatie', 'text_domain' ),
    ];
    $args = [
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => ['slug' => 'sponsoren'],
    ];
    register_taxonomy('soort', ['sponsor'], $args);
}

add_action('init', 'custom_category_person_taxonomy', 0);
function custom_category_person_taxonomy()
{
    $labels = [
        'name'                       => 'Functies',
        'singular_name'              => 'Functie',
        'menu_name'                  => 'Functies',
        'all_items'                  => __( 'Alle functies', 'text_domain' ),
        'parent_item'                => __( 'Hoofd functie', 'text_domain' ),
        'parent_item_colon'          => __( 'Hoofd functie:', 'text_domain' ),
        'new_item_name'              => __( 'Nieuwe functie', 'text_domain' ),
        'add_new_item'               => __( 'Voeg functie toe', 'text_domain' ),
        'edit_item'                  => __( 'Functie aanpassen', 'text_domain' ),
        'update_item'                => __( 'Bewerk functie', 'text_domain' ),
        'view_item'                  => __( 'Toon functie', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Functies toevoegen of verwijderen', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Pupulaire functies', 'text_domain' ),
        'search_items'               => __( 'Zoek functies', 'text_domain' ),
        'not_found'                  => __( 'Niet gevonden', 'text_domain' ),
        'no_terms'                   => __( 'Geen functies', 'text_domain' ),
        'items_list'                 => __( 'Functies lijst', 'text_domain' ),
        'items_list_navigation'      => __( 'Functielijst navigatie', 'text_domain' ),
    ];
    $args = [
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => false,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => ['slug' => 'functies'],
    ];
    register_taxonomy('functie', ['person'], $args);
}

add_action('init', 'custom_positie_taxonomy', 0);
function custom_positie_taxonomy()
{
    $labels = [
        'name'                       => 'Positie / functie',
        'singular_name'              => 'Positie / functie',
        'menu_name'                  => 'Posities / functies',
        'all_items'                  => __( 'Alle posities en functies', 'text_domain' ),
        'parent_item'                => __( 'Hoofd positie/functie', 'text_domain' ),
        'parent_item_colon'          => __( 'Hoofd positie/functie:', 'text_domain' ),
        'new_item_name'              => __( 'Nieuwe positie/functie', 'text_domain' ),
        'add_new_item'               => __( 'Voeg positie/functie toe', 'text_domain' ),
        'edit_item'                  => __( 'Positie/functie aanpassen', 'text_domain' ),
        'update_item'                => __( 'Bewerk positie/functie', 'text_domain' ),
        'view_item'                  => __( 'Toon positie/functie', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Posities/functies toevoegen of verwijderen', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Pupulaire posities/functies', 'text_domain' ),
        'search_items'               => __( 'Zoek posities/functies', 'text_domain' ),
        'not_found'                  => __( 'Niet gevonden', 'text_domain' ),
        'no_terms'                   => __( 'Geen posities/functies', 'text_domain' ),
        'items_list'                 => __( 'Positie/functies lijst', 'text_domain' ),
        'items_list_navigation'      => __( 'Positie/functielijst navigatie', 'text_domain' ),
    ];
    $args = [
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => false,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => ['slug' => 'positie-functie'],
    ];
    register_taxonomy('positie', ['speler'], $args);
}
