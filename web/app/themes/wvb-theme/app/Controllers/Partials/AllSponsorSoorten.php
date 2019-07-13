<?php

namespace App\Controllers\Partials;

trait AllSponsorSoorten
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
}
