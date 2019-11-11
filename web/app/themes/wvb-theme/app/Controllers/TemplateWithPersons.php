<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateWithPersons extends Controller
{
    public function persons()
    {
        $query = new \WP_Query([
            'post_type' => 'person',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'meta_query' => [
                [
                    'key'     => 'zichtbaar_op',
                    'value'   => 'sidebar',
                    'compare' => 'LIKE',
                ]
            ],
            'posts_per_page' => -1
        ]);
        return $query->posts;
    }
}
