<?php

namespace App\Controllers\Partials;

trait LatestNewsArticles
{
    public function latestNewsArticles()
    {
        $query = new \WP_Query([
            'post_type' => 'news-article',
            'post_status' => 'publish',
            'posts_per_page' => 8,
            'ignore_sticky_posts' => 1
        ]);
        return $query->posts;
    }
}
