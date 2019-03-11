<?php

namespace App\Controllers\Partials;

trait LatestNewsArticles
{
    public function latestNewsArticles()
    {
        $query = new \WP_Query([
            'post_type' => 'post',
            'post_status' => 'publish',
            'order' => 'desc',
            'orderby' => 'post_date',
            'per_page' => 4
        ]);
        return $query->posts;
    }
}
