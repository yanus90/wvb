<?php

namespace App\Controllers;

use Carbon\Carbon;
use Sober\Controller\Controller;

class App extends Controller
{
    public function __construct()
    {
        setlocale(LC_ALL, 'nl_NL.utf8');
        Carbon::setLocale('nl_NL');
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            if (is_tax('afdeling') || is_tax('commissie')) {
                return single_term_title();
            } else {
                return get_the_archive_title();
            }
        }
        if (is_search()) {
            return sprintf(__('Je zocht naar <strong>%s</strong>', 'sage'), get_search_query());
        }
        if (is_404()) {
            return 'Pagina helaas niet gevonden!';
        }
        return get_the_title();
    }
}
