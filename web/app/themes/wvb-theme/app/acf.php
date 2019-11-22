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
        'menu_slug' 	=> 'carousel-home',
        'capability'	=> 'edit_posts',
    ]);

    acf_add_options_page([
        'page_title' 	=> 'Weekbericht WvB 1',
        'menu_title'	=> 'Weekbericht WvB 1',
        'menu_slug' 	=> 'weekbericht-wvb-1',
        'capability'	=> 'edit_posts',
    ]);
}
