<?php

namespace App\Controllers;

use App\Controllers\Partials\AllAfdelingen;
use Sober\Controller\Controller;

class TaxonomyCommissie extends Controller
{
    protected $template = 'taxonomy-commissie';
    private $category;

    public function __construct()
    {
        $this->category = get_queried_object();
    }

    public function persons()
    {
        $query = new \WP_Query([
            'post_type' => 'person',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'tax_query' => [
                [
                    'taxonomy' => 'commissie',
                    'field' => 'term_id',
                    'terms' => $this->category->term_id
                ]
            ]
        ]);
        return $query->posts;
    }
}
