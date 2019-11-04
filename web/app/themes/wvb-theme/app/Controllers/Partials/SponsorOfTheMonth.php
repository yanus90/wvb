<?php

namespace App\Controllers\Partials;

trait SponsorOfTheMonth
{
    public function sponsorOfTheMonth()
    {
        $query = new \WP_Query([
            'post_type' => 'sponsor',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => 1,
            'meta_query' => [
                [
                    'key'     => 'sponsor_van_de_maand',
                    'value'   => 1,
                    'compare' => 'LIKE',
                ]
            ],
        ]);
        return $query->posts;
    }
}
