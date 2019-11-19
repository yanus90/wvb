<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class Category extends Controller
{
    private $newsQuery;

    public function articles()
    {
        $args = [
            'post_type' => 'news-article',
            'post_status' => 'publish',
            'posts_per_page' => 25,
            'tax_query' => [
                [
                    'taxonomy' => 'category',
                    'field'    => 'term_id',
                    'terms'    => get_queried_object_id(),
                ]
            ],
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        ];

        $this->newsQuery = new \WP_Query($args);
        $articles = $this->newsQuery->posts;

        return $articles;
    }

    public function newsQuery()
    {
        return $this->newsQuery;
    }
}
