<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Carbon\Carbon;
use WP_Query;

class TemplateNews extends Controller
{
    private $newsQuery;

    public function articles()
    {
        $args = [
            'post_type' => 'news-article',
            'post_status' => 'publish',
            'posts_per_page' => 24,
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        ];

        $this->newsQuery = new WP_Query($args);
        $articles = $this->newsQuery->posts;

        return $articles;
    }

    public function newsQuery()
    {
        return $this->newsQuery;
    }
}
