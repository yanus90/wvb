<?php
if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title' 	=> 'Bedrijf',
        'menu_title'	=> 'Bedrijf',
        'menu_slug' 	=> 'general-business-settings',
        'capability'	=> 'edit_posts',
    ]);
}
