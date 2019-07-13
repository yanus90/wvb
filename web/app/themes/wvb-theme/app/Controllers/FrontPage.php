<?php

namespace App\Controllers;

use App\Controllers\Partials\EventTrait;
use App\Controllers\Partials\LatestNewsArticles;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
    use LatestNewsArticles;
    use EventTrait;

    public function slider()
    {
        return $slider = get_field('homepagina_slider');
    }

    public function sponsoren()
    {
        $query = new \WP_Query([
            'post_type' => 'sponsor',
            'meta_query' => [
                [
                    'key'     => 'zichtbaar_op_homepagina',
                    'value'   => 'homepage',
                    'compare' => 'LIKE',
                ]
            ],
            'order' => 'ASC',
            'orderby' => 'menu_order',
            'posts_per_page' => 12,
        ]);

        return $query->posts;
    }
}
