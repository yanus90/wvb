<?php
if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title' 	=> 'Clubgegevens',
        'menu_title'	=> 'Clubgegevens',
        'menu_slug' 	=> 'general-business-settings',
        'capability'	=> 'edit_posts',
    ]);

    acf_add_options_page([
        'page_title' 	=> 'Carousel home',
        'menu_title'	=> 'Carousel home',
        'menu_slug' 	=> 'dashicons-images-alt2',
        'capability'	=> 'edit_posts',
    ]);
}
