<?php

namespace App\Controllers\Partials;

trait AllAfdelingen
{
    public function categories()
    {
        $query = new \WP_Term_Query([
            'taxonomy' => 'afdeling',
            'order' => 'DESC',
            'post_per_page' => -1
        ]);

        return $query->get_terms();
    }
}
