<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateSmoelenboek extends Controller
{
    public function smoelenboek()
    {
        $query = new \WP_Query([
            'post_type' => 'person',
            'meta_query' => [
                [
                    'key'     => 'actief_smoelenboek',
                    'value'   => 1,
                    'compare' => 'LIKE',
                ]
            ],
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        ]);
        return $query->posts;
    }
}
