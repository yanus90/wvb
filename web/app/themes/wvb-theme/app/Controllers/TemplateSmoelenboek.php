<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateSmoelenboek extends Controller
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

    public function smoelenboek()
    {
        $results = [];

        foreach ($this->commissions() as $commission) {
            $query = new \WP_Query([
                'post_type' => 'person',
                'orderby' => 'menu_order',
                'order' => 'DESC',
                'posts_per_page' => -1,
                'meta_query' => [
                    [
                        'key'     => 'zichtbaar_op',
                        'value'   => 'smoelenboek',
                        'compare' => 'LIKE',
                    ]
                ],
                'tax_query' => [
                    [
                        'taxonomy' => 'commissie',
                        'field'    => 'term_id',
                        'terms'    => $commission->term_id,
                    ]
                ]
            ]);

            if ($query->posts) {
                $results[$commission->name] = $query->posts;
            }
        }
        return $results;
    }

//    public function smoelenboek()
//    {
//        $query = new \WP_Query([
//            'post_type' => 'person',
//            'meta_query' => [
//                [
//                    'key'     => 'zichtbaar_op',
//                    'value'   => 'smoelenboek',
//                    'compare' => 'LIKE',
//                ]
//            ],
//            'orderby' => 'menu_order',
//            'order' => 'ASC',
//            'posts_per_page' => -1
//        ]);
//        return $query->posts;
//    }
}
