<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateSponsorOverview extends Controller
{
    public function sponsorTypes()
    {
        $query = new \WP_Term_Query([
            'taxonomy' => 'soort',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        ]);

        return $query->get_terms();
    }

    public function sponsoren()
    {
        $results = [];

        foreach ($this->sponsorTypes() as $type) {
            $query = new \WP_Query([
                'post_type' => 'sponsor',
                'orderby' => 'menu_order',
                'order' => 'DESC',
                'posts_per_page' => -1,
                'meta_query' => [
                    [
                        'key'     => 'zichtbaar_op',
                        'value'   => 'overview',
                        'compare' => 'LIKE',
                    ]
                ],
                'tax_query' => [
                    [
                        'taxonomy' => 'soort',
                        'field'    => 'term_id',
                        'terms'    => $type->term_id,
                    ]
                ]
            ]);

            if ($query->posts) {
                $results[$type->name] = $query->posts;
            }
        }
        return $results;
    }
}
