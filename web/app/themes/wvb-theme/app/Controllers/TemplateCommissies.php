<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCommissies extends Controller
{
    public function commissions()
    {
        $query = new \WP_Term_Query([
            'taxonomy' => 'commissie',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        ]);

        return $query->get_terms();
    }
}
