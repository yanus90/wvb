<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Carbon\Carbon;
use WP_Query;

class TemplateMatchReports extends Controller
{
    private $newsQuery;

    public function articles()
    {
        $args = [
            'post_type' => 'news-article',
            'post_status' => 'publish',
            'posts_per_page' => 12,
            'tax_query' => [
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => [
                    'wedstrijdverslagen'
                ]
            ],
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        ];

        $this->newsQuery = new WP_Query($args);
        $articles = $this->newsQuery->posts;

        foreach ($articles as $key => $item) {
            if ($item && $item->post_date) {
                $date = Carbon::parse($item->post_date);
                $item->post_date = strftime("%e %B %Y", $date->timestamp);
            }
        }
        return $articles;
    }

    public function newsQuery()
    {
        return $this->newsQuery;
    }
}
